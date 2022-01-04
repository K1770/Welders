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

    .wrap_images {
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>

  <div class="container">
    <!-- <?php include('fragments/header.php'); ?> -->
  </div>

  <main class="container container2 mt-2">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <img class="wrap_images" src="_img/handbook1.png" />
      </div>
      <div class="col-md-4"></div>
    </div>

    <!-- Button trigger modal -->
    <div class="row">
      <div class="col-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary btn-block w-50" name="myButton1" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myAlert(this)">
          1
        </button>
      </div>
      <div class="col-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary btn-block w-50" name="myButton2" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myAlert(this)">
          2
        </button>
      </div>
      <div class="col-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary btn-block w-50" name="myButton3" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myAlert(this)">
          3
        </button>
      </div>
      <div class="col-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary btn-block w-50" name="myButton4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myAlert(this)">
          4
        </button>
      </div>
    </div>

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
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <!-- </div> -->
          </div>
        </div>
      </div>

    </div>

  </main>

  <script>
    function myAlert(button) {
      let buttonName = button.name;
      let newLabel = "";
      let newTextBody = "";
      switch (buttonName) {
        case 'myButton1': {
          newLabel = "Igor1";
          newTextBody = "body 1";
          break;
        }
        case 'myButton2': {
          newLabel = "Igor2";
          newTextBody = "body 2";
          break;
        }
        case 'myButton3': {
          newLabel = "Igor3";
          newTextBody = "body 3";
          break;
        }
        case 'myButton4': {
          newLabel = "Igor4";
          newTextBody = "body 4";
          break;
        }

      }
      $('#exampleModalLabel').text(newLabel);
      $('.modal-body:eq(0)').text(newTextBody);
    }
  </script>
  <!-- <?php include('fragments/footer.php') ?> -->
</body>

</html>