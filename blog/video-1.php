<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('links-style.php') ?>
</head>

<body>

  <div class="container">
    <?php include('header.php'); ?>
  </div>

  <main class="container container2">

    <section class="home-section ">

      <div class="row">

        <div class="col-md-3">
          <?php includeWithVariables(
            'nav-sidebar.php',
            array(
              'categoryLink1' => 'Basic Information 1',
              'categoryLink2' => 'Basic Information 2',
              'categoryLink3' => 'Basic Information 3',
            ),
            array(
              'The history of weilding' => 'topicLink1',
              'What welders do' => ' topicLink2',
              'Welding equipment and materials' => 'topicLink3',
            )
          ); ?>
        </div> <!-- col-md-3-->

        <div class="col-md-9">

          <div class="pt-1 text-center container">
            <h2 class="fw-light">The history of welding</h2>
          </div>

          <div class="justify-content-centers m-4">
          <div class="bd-example mb-1" bis_skin_checked="1">
            <div class="embed-responsive embed-responsive-16by9 thumb-wrap" bis_skin_checked="1">
              <iframe class="embed-responsive-item" width=" " height=" " src="https://www.youtube.com/embed/smKKTH4WvFk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="bd-example mb-1" bis_skin_checked="1">
            <div class="embed-responsive embed-responsive-16by9 thumb-wrap" bis_skin_checked="1">
              <iframe class="embed-responsive-item" width=" " height=" " src="https://www.youtube.com/embed/hqo3lyDMlwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="bd-example mb-1" bis_skin_checked="1">
            <div class="embed-responsive embed-responsive-16by9 thumb-wrap" bis_skin_checked="1">
              <iframe class="embed-responsive-item" width=" " height=" " src="https://www.youtube.com/embed/C6JQ2-7zu0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        </div> <!-- col-md-8 -->

      </div>

      </div>
    </section>

  </main>

  <?php include('footer.php') ?>
</body>

</html>