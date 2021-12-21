<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('links-style.php') ?>
  
</head>

<body>
  <div class="container">
    <?php include ('header.php');?>
  </div>

  <main class="container container2">
  
    <section  class="home-section ">

      <div class="row">

      <div class="col-md-3">
        <?php includeWithVariables('nav-sidebar.php', array('categoryLink1' => 'Basic Information 1',
                                                            'categoryLink2' => 'Basic Information 2',
                                                            'categoryLink3' => 'Basic Information 3',), 
                                                      array('topicLink1' => 'The history of weilding',
                                                            'topicLink2' => 'What welders do',
                                                            'topicLink3' => 'Welding equipment and materials',)); ?>
      </div> <!-- col-md-3 -->

      <div class="col-md-8">

        <div class="py-1 text-center container ">
          <h2 class="fw-light">The history of welding</h2>
        </div>

        <div class="mb-5"> 

        <div>
        <div class="text-center mb-2">
          <img class="text-center" src="img1.png">
        </div>

        <div>
          <div class="p-main">
            <span class="p-first-words">In the 19th century</span>, main breakthroughs were made in welding. Scientists and engineers from the UK and the USA took an active part in advancing welding technologies.
          </div>
          <div class="p-main">
            <span class="p-first-words">Sir Humphry Davy</span>, a famous British chemist and inventor, produced an arc between two carbon electrodes using a battery in 1800. His cousin, Edmund Davy, discovered acetylene in 1836.
          </div>
          <div class="p-main">
            <span class="p-first-words">In 1890 Charles L.Coffin</span>, an American inventor, got the first US patent for an arch welding process using a metal electrode.
          </div>
          <div class="p-main">
            <span class="p-first-words">In 1900</span> Arthur Percy Strohmenger introduced a coated metal electrode in Great Britain. There was a thin coating of clay or lime, but it provided a more stable arc.
          </div>
          <div class="p-main">
            <span class="p-first-words">In about 1900</span>, a torch suitable for low-pressure acetylene was invented.
          </div>
          <div class="p-main">
            <span class="p-first-words">The First World War</span> made the countries develop weapons production and welding was in high demand. In America and in Europe many companies appeared to produce welding machines and electrodes.
          </div>
        </div>
        </div>

        <div class="text-center mb-2">
          <img class="text-center" src="img2.png">
        </div>

        <div>
          <div class="p-main">
            <span class="p-first-words">In 1919</span> The American Welding Society as a non-profit organization was founded. The aim of the society was to advance welding and allied processes.
          </div>
          <div class="p-main">
            <span class="p-first-words">In 1920</span> automatic welding was introduced by The General Electric Company. It was used to build up motor shafts and cranes. It was also used by the automobile industry to produce rear axles.
          </div>
          <div class="p-main">
            <span class="p-first-words">During the 1920s</span> various types of welding electrodes were developed.
          </div>
          <div class="p-main">
            <span class="p-first-words">In 1927</span> the heavy-coated electrodes were introduced by the A.O.Smith Company in America. The electrodes were made by extruding.
          </div>
          <div class="p-main">
            <span class="p-first-words">In 1929</span> the Lincoln Electric Company produced extruded electrode rods.
          </div>
        </div>

        <div>
          <div class="text-center mb-2">
            <img class="text-center" src="img3.png">
          </div>
          
          <div>
            <div class="p-main">
              <span class="p-first-words">In 1930</span> covered electrodes were widely used.
            </div>
            <div class="p-main">
              The contribution of British and American inventors in the development of welding was great.
            </div>
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