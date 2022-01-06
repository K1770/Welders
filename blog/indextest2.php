<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('fragments/links-style.php') ?>
  <link href="css/blog.css" rel="stylesheet">
  <link href="css/style-main.css" rel="stylesheet">
  <link href="css/sidebars.css" rel="stylesheet">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="js/sidebars.js"></script>

  <style>
  </style>
</head>

<body>

  <div class="container">
    <!-- <?php include('fragments/header.php'); ?> -->
  </div>

  <main class="container container2 mt-2">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row w-100">
      <div class="col-3"></div>
      <div class="col-6 d-flex justify-content-center">
        <div class="row">
          <input name="diametr" class="mb-2" id="diametr">
          <br>
          <select class="mb-2" id="selectOptions">
            <option value="1">Опция 1</option>
            <option value="2">Опция 2</option>
            <option value="3">Опция 3</option>
          </select>
          <br>
          <input type="button" value="calculate" onclick="calculate()">
          <div class="">
            <h4>Сила тока:</h4>
            <h5 id="amperage" style="color: red;">-1А</h5>
            <h4>Минимальное напряжение:</h4>
            <h5 id="minVoltage" style="color: red;">-2В</h5>
            <h4>Максимальное напряжение:</h4>
            <h5 id="maxVoltage" style="color: red;">-3В</h5>
          </div>
        </div>
      </div>
      <div class="col-3"></div>
    </div>

    <a href="https://u.to/VArjGw" target="_blank">
      <img src="http://qrcoder.ru/code/?https%3A%2F%2Fu.to%2FVArjGw&6&0" width="198" height="198" border="0" title="QR код">
    </a>

  </main>

  <script>
    function calculate() {
      // alert("calculate")
      // $('#exampleModalLabel').text(newLabel);
      // $('.modal-body:eq(0)').text(newTextBody);
      let selectedValue = Number($('#selectOptions option:selected').val());

      $('#amperage').text(2 * selectedValue + 'D');
      $('#minVoltage').text("33В");
      $('#maxVoltage').text("44В");

    }
  </script>
  <!-- <?php include('fragments/footer.php') ?> -->
</body>

</html>