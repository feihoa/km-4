<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Форма оформления заказа</title>
</head>
<body>
<section>
  <form method="post">
    <table border="1px" cellspacing="0" width="96%" align="center">
      <tr>
        <td colspan="4" align="center">
          <strong>Магазин рукоделия «Серебряная нить»</strong><br />
          комплект «Скорая помощь больному»
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center">
        <label>Номер записи:
              <input type="number" min="1" name="prm0" value="<?php echo isset($_POST['prm0']) ? $_POST['prm0'] : '1'; ?>">
            </label>
        </td></tr>
      <tr>
        <td rowspan="4">
          <label>Выбрать недостающие материалы<br />первой необходимости:
            <p>
              <select multiple size="5" name="prm1[]">
                <option value="Моток белой нити" <?php if(isset($_POST['prm1']) && in_array('Моток белой нити', $_POST['prm1'])) echo 'selected'; ?>>Моток белой нити</option>
                <option value="Мел" <?php if(isset($_POST['prm1']) && in_array('Мел', $_POST['prm1'])) echo 'selected'; ?>>Мел</option>
                <option value="Напёрсток" <?php if(isset($_POST['prm1']) && in_array('Напёрсток', $_POST['prm1'])) echo 'selected'; ?>>Напёрсток</option>
                <option value="Набор игл" <?php if(isset($_POST['prm1']) && in_array('Набор игл', $_POST['prm1'])) echo 'selected'; ?>>Набор игл</option>
                <option value="Набор булавок" <?php if(isset($_POST['prm1']) && in_array('Набор булавок', $_POST['prm1'])) echo 'selected'; ?>>Набор булавок</option>
              </select>
            </p>
          </label>
        </td>
        <td align="center">
          <input id="fabric" type="checkbox" name="prm2" value="Ткань" <?php if(isset($_POST['prm2']) && $_POST['prm2'] == 'Ткань') echo 'checked'; ?>>
          <label for="fabric">Ткань</label>
        </td>
        <td align="center">
          <input id="graph-paper" type="checkbox" name="prm5" value="Миллиметровая бумага" <?php if(isset($_POST['prm5']) && $_POST['prm5'] == 'Миллиметровая бумага') echo 'checked'; ?>>
          <label for="graph-paper">Миллиметровая бумага</label>
        </td>
        <td align="center">
          <input id="thread" type="checkbox" name="prm10" value="Нить" <?php if(isset($_POST['prm10']) && $_POST['prm10'] == 'Нить') echo 'checked'; ?>>
          <label for="thread">Нить</label>
        </td>
      </tr>

      <tr align="center">
        <td>
          <label>Материал:
            <select name="prm3">
              <option value="Хлопок" <?php if(!isset($_POST['prm3']) || isset($_POST['prm3']) && $_POST['prm3'] == 'Хлопок') echo 'selected'; ?>>Хлопок</option>
              <option value="Лён" <?php if(isset($_POST['prm3']) && $_POST['prm3'] == 'Лён') echo 'selected'; ?>>Лён</option>
              <option value="Шёлк" <?php if(isset($_POST['prm3']) && $_POST['prm3'] == 'Шёлк') echo 'selected'; ?>>Шёлк</option>
              <option value="Шерсть" <?php if(isset($_POST['prm3']) && $_POST['prm3'] == 'Шерсть') echo 'selected'; ?>>Шерсть</option>
            </select>
          </label>
        </td>
        <td rowspan="2">
          <input type="radio" id="roll" name="prm6" value="Рулон" <?php if(isset($_POST['prm6']) && $_POST['prm6'] == 'Рулон') echo 'checked'; ?>>
          <label for="roll">Рулон</label>
          <input type="radio" id="sheet" name="prm6" value="Лист" <?php if(isset($_POST['prm6']) && $_POST['prm6'] == 'Лист') echo 'checked'; ?>>
          <label for="sheet">Лист</label>
          <p>
            <label>Ширина:
              <input type="number" min="0" name="prm7" value="<?php echo isset($_POST['prm7']) ? $_POST['prm7'] : '0'; ?>">
            </label>
          </p>
          <p>
            <label>Длина:
              <input type="number" min="0" name="prm8" value="<?php echo isset($_POST['prm8']) ? $_POST['prm8'] : '0'; ?>">
            </label>
          </p>
          <p>
            <label>Количество:
              <input type="number" min="0" step="1" name="prm9" value="<?php echo isset($_POST['prm9']) ? $_POST['prm9'] : '0'; ?>">
            </label>
          </p>
        </td>
        <td>
          <label>Цвет:
            <input name="prm11" value="<?php echo isset($_POST['prm11']) ? $_POST['prm11'] : ''; ?>">
          </label>
          <br /><br />
          <label>Толщина:
            <input id="1" type="radio" name="prm12" value="1" <?php if(isset($_POST['prm12']) && $_POST['prm12'] == '1') echo 'checked'; ?>>
            <label for="1">1</label>
            <input id="2" type="radio" name="prm12" value="2" <?php if(isset($_POST['prm12']) && $_POST['prm12'] == '2') echo 'checked'; ?>>
            <label for="2">2</label>
            <input id="3" type="radio" name="prm12" value="3" <?php if(isset($_POST['prm12']) && $_POST['prm12'] == '3') echo 'checked'; ?>>
            <label for="3">3</label>
          </label>
        </td>
      </tr>

      <tr>
        <td align="center">
          <label>Метраж:<br />
            <b>1м.</b>
            <input type="range" id="size" min="1" max="5" value="<?php echo isset($_POST['prm4']) ? $_POST['prm4'] : '3'; ?>" name="prm4" />
            <b>5м.</b>
          </label>
        </td>
        <td align="center">
          <label>Количество:
            <input type="number" min="0" step="1" name="prm13" value="<?php echo isset($_POST['prm13']) ? $_POST['prm13'] : '0'; ?>">
          </label>
        </td>
      </tr>

      <tr>
        <td colspan="3" align="center">
          <label for="additional-attrs">Дополнительные инструменты:</label><br /><br />
          <textarea id="additional-attrs" name="prm14" rows="4" cols="30"><?php echo isset($_POST['prm14']) ? $_POST['prm14'] : ''; ?></textarea>
        </td>
      </tr>

      <tr>
        <td colspan="3" align="right">Дата, к которой комплект должен быть собран:</td>
        <td align="center"><input type="date" name="prm15" min="2023-09-12" max="2026-01-01" value="<?php echo isset($_POST['prm15']) ? $_POST['prm15'] : ''; ?>"></td>
      </tr>

      <tr align="center">
        <td colspan="3">
          <input id="machine-rental" type="checkbox" name="prm16" value="Аренда швейной машинки" <?php if(isset($_POST['prm16']) && $_POST['prm16'] == 'Аренда швейной машинки') echo 'checked'; ?>>
          <label for="machine-rental">Аренда швейной машинки</label><br /><br />
          <input id="overlock-rental" type="checkbox" name="prm17" value="Аренда оверлока" <?php if(isset($_POST['prm17']) && $_POST['prm17'] == 'Аренда оверлока') echo 'checked'; ?>>
          <label for="overlock-rental">Аренда оверлока</label><br /><br />
          <input id="steamer-rental" type="checkbox" name="prm18" value="Аренда отпаривателя" <?php if(isset($_POST['prm18']) && $_POST['prm18'] == 'Аренда отпаривателя') echo 'checked'; ?>>
          <label for="steamer-rental">Аренда отпаривателя</label>
        </td>
        <td>
          <button type="submit" name="action" value="Add">Заказать!</button>
          <button type="submit" name="action" value="Reset">Очистить</button>
      </td>
      </tr>
    </table>
    <br />
    <button type="submit" name="action" value="ClearAllData">Очистить все записи</button>
  </form>
  <br />
</section>
<section>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" ): ?>
<?php

  require './labels.php';
  require './shop.controller.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  
    if ($_POST['action'] == 'ClearAllData') {
      clearTable();
    } else if ($_POST['action'] == 'Reset') {
      clearLine($_POST['prm0']);
    } else {

      $newLine = [];

      foreach ($prmLabels as $prm => $label) {
        $paramValue = isset($_POST[$prm]) ? is_array($_POST[$prm]) ? implode('; ', $_POST[$prm]) : $_POST[$prm] : "null";
        array_push($newLine, $paramValue);
      }

      createOrUpdateData($newLine);
    }
    showTable();
  }
  
?>
<?php endif; ?>
</section>
</body>
</html>
