<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- VueJS -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- style -->
  <link rel="stylesheet" href="style/style.css">
  <title>Document</title>
</head>

<body>
  <?php
  require __DIR__ . '/php/server.php';
  ?>

  <div id="root">
    <form action="php/server.php" method="post">
      <div class="input-section">
        <div class="input-wrapper">
          <label for="name">Nome:</label>
          <input type="text" id="name" name="name" placeholder="Nome">
        </div>
        <div class="input-wrapper">
          <label for="last-name">Cognome:</label>
          <input type="text" id="last-name" name="last-name" placeholder="Cognome">
        </div>
        <div class="input-wrapper">
          <button id="add-student" type="submit">Aggiungi Studente</button>
        </div>
      </div>
    </form>
    <form action="index.php" method="post">
      <div class="input-section">
        <!-- creare un select di studenti -->
        <div class="input-wrapper">
          <label for="student">Selezionare studente:</label>
          <select name="student" id="student">
            <?php foreach ($class as $element) { ?>
              <option value="<?php echo strtolower($element->name), strtolower($element->lastName);?>">
                <?php echo $element->name; ?>
              </option>
            <?php } ?>

          </select>
        </div>
        <div class="input-wrapper">
          <label for="add-grade">Voto:</label>
          <input type="text" id="add-grade" name="grade" placeholder="Aggiungi voto">
        </div>
        <div class="input-wrapper">
          <button id="add-grade-btn" type="submit">Aggiungi Voto</button>
        </div>
      </div>
    </form>
  </div>

  <script src="js/script.js"></script>
</body>

</html>