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
    .modal-dialog-word {
      max-width: 200px !important;
      justify-content: center;
    }
  </style>
</head>

<body>

  <div class="container">
    <!-- <?php include('fragments/header.php'); ?> -->
  </div>

  <main class="container container2 mt-2">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="display: flex; margin-left: auto; margin-right: auto;">
      <div class="modal-dialog modal-dialog-word">
        <div class="modal-content">
          <div class="modal-header1 text-center py-1">
            <h5 class="modal-title " id="exampleModalLabel">Modal title</h5>
          </div>
          <div class="modal-body text-center">
            Название слова
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    </div>

  </main>
  <!-- <?php include('fragments/footer.php') ?> -->
</body>

</html>