<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('../../../fragments/links-style-main.php') ?>

  <link href="../../../css/blog.css" rel="stylesheet">
  <link href="../../../css/style-main.css" rel="stylesheet">
  <link href="../../../css/sidebars.css" rel="stylesheet">
  <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="../../../js/sidebars.js"></script>
  <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->

  <style>
    tr {
      border: solid 1px black;
    }

    td {
      border: solid 1px black;
      padding: 0.5rem;
    }

    .content {
      margin-bottom: 1rem;
    }
  </style>

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
              'Symbols in Welding' => '../../topic1',
              'Alternative Types of Welding' => '../../topic2',
              'Arc and Gas Welding' => '../../topic3'
            )
          ); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-9">
          <div class="content">

            <div class="py-1 text-center container ">
              <h2 class="fw-light">Vocabulary - Arc and Gas Welding</h2>
            </div>

            <p>
              <strong>1.</strong> Read the texts above and find the English equivalents for the following
              Russian phrases in the text.
            </p>
            <p style="line-height: 32px; ">
              Положительно заряженный анод, остатки флюса, волна типа "синусоида",
              гармоническая волна/ прямоугольная волна, плавящийся электрод, свариваемые
              металлы, пересечение нулевого уровня, пленка ПВХ, светофильтры, наплавка,
              горючие материалы
            </p>
            <p>
              <strong>2.</strong> Say if the following statements are true or false. Correct the false
              sentences.
            </p>
            <p>
              1. Filler material is always necessary for arc welding.
            </p>
            <p>
              2. The amount of heat input at the welding point depends on the voltage.
            </p>
            <p>
              3. Shielded metal arc welding is a consumable electrode process.
            </p>
            <p>
              4. Consumable welding processes use any type of current.
            </p>
            <p>
              5. Consumable electrode methods are faster than none-consumable ones.
            </p>
            <p>
              6. TIG welding requires little operator training.
            </p>
            <p>
              7. Submerged arc welding is used to weld large work pieces.
            </p>
            <p>
              <strong>3.</strong> Answer the following questions on the text.
            </p>
            <p>
              1. What is arc welding?
            </p>
            <p>
              2. What kind of current and electrodes are used in arc welding?
            </p>
            <p>
              3. What is the welded region protected by?
            </p>
            <p>
              4. Why is constant current power supply most often used for manual welding
              processes?
            </p>
            <p>
              5. How does the type of the electrode charge (positive/negative) influence
              the speed of welding and weld penetration?
            </p>
            <p>
              6. What problem is related to the use of alternating current in gas
              tungsten welding?
            </p>
            <p>
              7. What is the function of flux in shielded metal arc welding?
            </p>
            <p>
              8. What are the main advantages and disadvantages of manual metal arc
              welding?
            </p>
            <p>
              9. Which type of metal arc welding uses a separate filler material?
            </p>
            <p>
              10. What do the welding protection clothes include?
            </p>
            <p>
              <strong>4.</strong> Translate the following sentences from Russian into English.
            </p>
            <p>
              1. Зона сварки при электродуговых процессах защищается защитным газом.
            </p>
            <p>
              2. При сварке с использованием плавящихся электродов используется как
              постоянный, так и переменный ток.
            </p>
            <p>
              3.При РДС электрод является присадочным материалом.
            </p>
            <p>
              4. Благодаря разнообразию способов электродуговой сварки она находит
              широкое применение в различных отраслях производства.
            </p>
            <p>
              5. Для защиты сварщиков от ультрафиолетового излучения электрической дуги
              используются светофильтры.
            </p>
            <p>
              6. При недостаточной вентиляции газы могут представлять опасность для
              здоровья.
            </p>
            <p>
              7. Благодаря отсутствию дыма при дуговой сварке под флюсом условия труда
              гораздо лучше, чем при других способах электродуговой сварки.
            </p>
            <p>
              8. В целях предосторожности не следует держать воспламеняющиеся предметы
              вблизи проведения сварочных работ.
            </p>
          </div>
        </div>
      </div> <!-- col-md-8 -->
      </div>
      </div>
    </section>

  </main>
  <?php include('../../../fragments/footer.php') ?>
</body>

</html>