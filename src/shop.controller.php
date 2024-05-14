<?php

  $has_connection;

  $db_host = getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST');
  $db_name = getenv('MYSQL_DATABASE', true) ?: getenv('MYSQL_DATABASE');
  $db_user = getenv('MYSQL_USER', true) ?: getenv('MYSQL_USER');
  $db_pwd  = getenv('MYSQL_PASSWORD', true) ?: getenv('MYSQL_PASSWORD');

  $conn = new mysqli($db_host, $db_user, $db_pwd);

  if ($conn->connect_error) {
      $has_connection = false;
      die("Ошибка соединения с бд: " . $conn->connect_error);

  } else {
    $has_connection = true;
    mysqli_set_charset($conn, "utf8");

    $result = $conn->query("SHOW DATABASES LIKE '$db_name'");
    
    if ($result->num_rows == 0) {
      $create_db_query = "CREATE DATABASE $db_name";
      if ($conn->query($create_db_query) === FALSE) {
        echo "Ошибка: " . $conn->error;
      }
    }

    mysqli_select_db($conn, $db_name);
    createTable();
  }

  function createTable() {
    global $conn, $has_connection, $prmLabels;

    if (!$has_connection) {
      echo "Ошибка: нет соединения с бд";
      return;
    }

    $columns = "";

    foreach ($prmLabels as $prm => $label) {
        if ($prm !== 'prm0') {
          $columns .= "$prm VARCHAR(255) DEFAULT NULL, ";
        }
    }

    $columns = rtrim($columns, ', ');

    $create_table_query = "
    CREATE TABLE IF NOT EXISTS shopData (
        prm0 VARCHAR(255),
        $columns,
        PRIMARY KEY (prm0)
    )";

    if ($conn->query($create_table_query) !== TRUE) {
      echo "Ошибка создания таблицы: " . $conn->error;
    }
}

function createOrUpdateData($newLine) {
  global $conn, $has_connection, $prmLabels;

  if (!$has_connection) {
    echo "Ошибка: нет соединения с бд";
    return;
  }

  $columns = implode(', ', array_keys($prmLabels));
  $values = [];

  foreach ($newLine as $value) {
    if ($value !== null || $value !== "") {
      $values[] = "'" . $conn->real_escape_string($value) . "'";
    } else {
      $values[] = "NULL";
    }
  }

  $setStatements = [];
  foreach ($prmLabels as $prm => $label) {
    if ($prm !== 'prm0') {
      $setStatements[] = "$prm = VALUES($prm)";
    }
  }
  $setPart = implode(', ', $setStatements);

  $sql = "INSERT INTO shopData ($columns) VALUES (" . implode(', ', $values) . ") ON DUPLICATE KEY UPDATE $setPart";

  if ($conn->query($sql) !== TRUE) {
    echo "Ошибка: " . $conn->error;
  }

}

  function clearTable() {
    global $conn, $has_connection;

    if (!$has_connection) {
      echo "Ошибка: нет соединения с бд";
      return;
    }

    $sql = "DELETE FROM shopData";

    if ($conn->query($sql) !== TRUE) {
      echo "Ошибка при удалении строки: " . $conn->error;
    }
  }

  function clearLine($id) {

    global $conn, $has_connection;

    if (!$has_connection) {
      return;
    }

    $id = $conn->real_escape_string($id);

    $sql = "DELETE FROM shopData WHERE prm0 = '$id'";

    if ($conn->query($sql) !== TRUE) {
      echo "Ошибка: " . $conn->error;
    }
  
  }

  function showTable() {
    global $conn, $has_connection, $prmLabels;

    if (!$has_connection) {
      return;
    }

    $sql = "SELECT * FROM shopData";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $html_table = '<table border="1" cellspacing="0">';

      $html_table .= '<tr>';
      foreach ($prmLabels as $prm => $label) {
        $html_table .= '<th>' . $label . '</th>';
      }
      $html_table .= '</tr>';

      while ($row = $result->fetch_assoc()) {
        $html_table .= '<tr>';
        foreach ($prmLabels as $prm => $label) {
          $cellValue = $row[$prm] === "null" ? 'Не выбрано' : $row[$prm];
          $html_table .= '<td>' . $cellValue . '</td>';
        }
        $html_table .= '</tr>';
      }

      $html_table .= '</table>';

      echo $html_table;
    } else {
      echo "Нет данных";
    }
  }

?>
