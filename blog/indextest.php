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
    .modal-dialog-div {
      justify-content: center;
      align-items: center;
      display: flex;
      margin-left: auto;
      margin-right: auto;
    }

    .mdw {
      max-width: 12rem !important;
      top: 40%;
      bottom: 0;
      margin: auto;
      position: absolute;
      left: 0;
      right: 0;
    }

    .mda {
      max-width: 24rem !important;
      top: 35%;
      bottom: 0;
      margin: auto;
      position: absolute;
      left: 0;
      right: 0;
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
      <div class="modal-dialog-div">
        <div class="modal-dialog mda">
          <div class="modal-content">
            <div class="modal-header1 text-center py-1">
              <h5 class="modal-title " id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body text-center">
              Название слова
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consectetur nihil quos earum quod consequuntur eius fugiat id nisi laudantium expedita eveniet ea soluta iste, sapiente facere tempora laborum quaerat?
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