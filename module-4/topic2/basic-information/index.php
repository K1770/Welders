<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('../../../fragments/links-style-main.php') ?>

  <link href="../../../css/blog.css" rel="stylesheet">
  <link href="../../../css/style-main.css" rel="stylesheet">
  <link href="../../../css/style-basic.css" rel="stylesheet">
  <link href="../../../css/sidebars.css" rel="stylesheet">
  <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="../../../js/sidebars.js"></script>
  <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->

</head>

<body>
  <div class="container">
    <?php include('../../../fragments/header.php'); ?>
  </div>

  <main class="container container2">

    <section class="home-section ">

      <div class="row">

        <div class="col-md-3">
          <?php includeWithVariables(
            '../../../fragments/nav-sidebar.php',
            array(
              'categoryLink1' => '../basic-information',
              'categoryLink2' => '../video',
              'categoryLink3' => '../vocabulary'
            ),
            array(
              'Health and Safety prevention' => '../../topic1',
              'The Wordskills Competition in Welding' => '../../topic2'
            )
          ); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-9">

          <div class="py-1 text-center container ">
            <h2 class="fw-light">The Wordskills Competition in Welding</h2>
          </div>

          <div class="mb-5">
            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img1.png">
              </div>


              <div class="p-main">
                <span class="p-first-words">1. The Wordskills Competition  is the biggest vocational education and skills excellence event in the world that truly reflects global industry. It is hold every two years. The competitors demonstrate technical abilities and skills in 45 trades. They do specific tasks for which they study and/ or perform in their workplace. They do in both individually and collectively.</span>
              </div>
              <div class="p-main">
                <span class="p-first-words">2. One of the main goals of the Wordlskills Competition  is to give importance to professional education, as one of the true tools of socioeconomic transformation. The competition also provides leaders in the industry, government and education with the opportunity to exchange information and best practices in different industries and professional education. New ideas and processes inspire school-aged youth to technical and technological careers and towards a better future.</span>
              </div>

              <div class="p-main">
                <span class="p-first-words"> 3. It was 1946, and there was a great need for skilled workers in Spain. Mr Jose Antonio Elola Olaso, who was General Director of OJE (Spanish Youth Organization), had an insight: it was necessary to convince youth, as well as their parents, teachers and prospective employers, that their future depended on an effective vocational training system. For this challenge, the most suitable solution was to organize a competition. So, young people’s competing spirit would be aroused, adults would discuss the competition results and visitors would be able to see a great variety of trades being demonstrated.</span>
              </div>
              <div class="p-main">
                <span class="p-first-words">4. But the initiators wanted much more than that. As a matter of fact, they had far-reaching goals: to motivate youth to compete, to make them enthuastic about vocational training and to compare skills and abilities of people fromdifferent countries. Due to similarities in language, history and culture, contacts were made with Latin American countries to set up a joint International Competition. At first, these contacts did not succeed, but Portugal showed interest in the project. As a result, in 1953, at Spain’s invitation, youth from Germany, Great Britain, France, Morocco and Switzerland took part in it for the first time.</span>
              </div>

            </div>
          </div>
        </div>

      </div> <!-- col-md-8 -->
    </section>

  </main>

  <?php include('../../../fragments/footer.php') ?>

</body>

</html>