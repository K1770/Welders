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

</head>

<body>

  <div class="container">
    <!-- <?php include('fragments/header.php'); ?> -->
  </div>

  <main class="container container2 mt-2">
    Arc Voltage: <input id="V">
    Welding Current: <input id="A">
    Welding Speed: <input id="S">
    <button id="say">Say hi!</button>
    <div id="result"></div>


  </main>


  <!-- <?php include('fragments/footer.php') ?> -->
  <script>
    V.oninput, A.oninput, S.oninput = function say_hi() {
      var V = document.getElementById('V').value;
      var A = document.getElementById('A').value;
      var S = document.getElementById('S').value;

      let heatInput = A * V * 0.06 / S

      var html = heatInput.toFixed(2);

      document.getElementById('result').innerHTML = html;
    }

    //document.getElementById('say').addEventListener('click', say_hi);
  </script>
</body>

</html>