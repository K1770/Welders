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
  <!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script> top menu -->
  <style>
    .shadow-for-white-text {
      text-shadow: 1px 1px 2px black;
    }

    .fit-image-div {
      object-fit: cover;
    }

    #drag-to-scroll-header {
      overflow: auto;
    }

    #drag-to-scroll-cards {
      cursor: grab;
      overflow: auto;
    }
  </style>
</head>

<body>

  <div class="container">
    <?php include('fragments/header.php'); ?>
  </div>

  <main class="container container2 mt-2">
    <div class="p-4 mb-4 text-white rounded bg-dark the-main-information" style="background-image: url('_img/the-main-information.jpg');">
      <div class="col-md-8 px-0">
        <h1 class="display-6 fst-italic shadow-for-white-text">The main information (Test)</h1>
        <p class="lead my-3 shadow-for-white-text">Personal site for the students of welding careers as a support in studying the English language as a professional component</p>
        <p class="lead mb-0"><a href="about.php" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div>

    <div class="d-flex flex-row flex-nowrap overflow-auto scrollbar-div pb-1" id="drag-to-scroll-cards" style="overflow: auto; ">
      <div class="card card-block mr-2 me-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">About</strong>
            <h3 class="mb-0">Module I</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a draggable="false" href="module-1/index.php" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block" style="background: red">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module1.jpg">
          </div>
        </div>
      </div>
      <div class="card card-block mr-2 me-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Mechanical</strong>
            <h3 class="mb-0">Module II</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a draggable="false" href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module2.jpg">
          </div>
        </div>
      </div>
      <div class="card card-block mr-2 me-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">About</strong>
            <h3 class="mb-0">Module III</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a draggable="false" href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module3.jpg">
          </div>
        </div>
      </div>
      <div class="card card-block mr-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">About</strong>
            <h3 class="mb-0">Module IV</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a draggable="false" href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module4.jpg">
          </div>
        </div>
      </div>
    </div>

  </main>
  <?php include('fragments/footer.php') ?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const ele = document.getElementById('drag-to-scroll-cards');
      // ele.style.cursor = 'grab';

      let pos = {
        top: 0,
        left: 0,
        x: 0,
        y: 0
      };

      const mouseDownHandler = function(e) {
        ele.style.cursor = 'grabbing';
        ele.style.userSelect = 'none';

        pos = {
          left: ele.scrollLeft,
          top: ele.scrollTop,
          // Get the current mouse position
          x: e.clientX,
          y: e.clientY,
        };

        document.addEventListener('mousemove', mouseMoveHandler);
        document.addEventListener('mouseup', mouseUpHandler);
      };

      const mouseMoveHandler = function(e) {
        // How far the mouse has been moved
        const dx = e.clientX - pos.x;
        const dy = e.clientY - pos.y;

        // Scroll the element
        ele.scrollTop = pos.top - dy;
        ele.scrollLeft = pos.left - dx;
      };

      const mouseUpHandler = function() {
        ele.style.cursor = 'grab';
        ele.style.removeProperty('user-select');

        document.removeEventListener('mousemove', mouseMoveHandler);
        document.removeEventListener('mouseup', mouseUpHandler);
      };

      ele.addEventListener('mousedown', mouseDownHandler);
    });
  </script>
</body>

</html>