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
              'Mechanical and chemical properties of carbon steel' => '../../topic1',
              'Mechanical and chemical properties of stainless steel' => '../../topic2',
              'Mechanical and chemical properties of aluminium' => '../../topic3',
              'Cast iron, copper and its alloys' => '../../topic4',
            )
          ); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-9">
          <div class="content">

            <div class="py-1 text-center container ">
              <h2 class="fw-light">Vocabulary - Cast iron, copper and its alloys</h2>
            </div>

            <p>
              <strong></strong>
            </p>
            <p>
              <strong>1. </strong>
              Complete the sentences:
            </p>
            <p>
              1. The term “alloy” determines…
            </p>
            <p>
              2. The main alloying element in ferrous metals is …
            </p>
            <p>
              3. The ferrous alloys with less than 2,14 % С are termed as…
            </p>
            <p>
              4. Ferrous and non-ferrous alloys are widely used in …
            </p>
            <p>
              5. Aluminium alloys are mainly used because of …
            </p>
            <p>
              6. Aluminium alloys possess desirable property of …
            </p>
            <p>
              7. Zink alloys have advantages over…
            </p>
            <p>
              8. Titanium alloys are applied in …
            </p>
            <p>
              9. Alloying elements are added to some metals in order to…
            </p>
            <p>
              10. All alloying elements can form …
            </p>
            <p>
              <strong>2. </strong>
              Insert the proper words into the sentences:
            </p>
            <p>
              1. The term (сплав) determines material (содержащий) more than one element.
            </p>
            <p>
              2. (Углерод) is the main (легирующий) element in (черный) metals.
            </p>
            <p>
              3. Each metal (обладать) distinct (свойствами).
            </p>
            <p>
              4. Steels are alloys of (железо) and (углерод) with other (легирующими)
              elements.
            </p>
            <p>
              5. Gray (чугун) is weak and (хрупкий)
            </p>
            <p>
              6. (Ковкий чугун) possesses high amount of (тягучесть).
            </p>
            <p>
              7. (Недостатком) of aluminium alloys is their low (температура плавления).
            </p>
            <p>
              8. Aluminium alloys are used where (требуется легкий вес).
            </p>
            <p>
              9. (Медные сплавы) form such metals, as (латунь) and (бронза).
            </p>
            <p>
              10. Titanium is inert in (биологической среде) and is widely used in
              (медицина).
            </p>
            <p>
              <strong>3. </strong>
              Translate into English:
            </p>
            <p>
              1. Термин «сплав» означает материал, состоящий более чем из одного
              элемента.
            </p>
            <p>
              2. Основным легирующим элементом черных металлов является углерод.
            </p>
            <p>
              3. В зависимости от процентного содержания углерода сплавы делятся на стали
              и чугуны.
            </p>
            <p>
              4. Существуют не только черные, но и цветные сплавы.
            </p>
            <p>
              5. Как черные, так и цветные металлы обладают эластичностью, тягучестью,
              ковкостью и прочностью.
            </p>
            <p>
              6. Такие металлы, как медь, магний, никель и цинк придают сплавам особые
              свойства.
            </p>
            <p>
              7. Титан обладает уникальными качествами и широко применяется в медицине.
            </p>
            <p>
              8. Титан проявляет высокую устойчивость к коррозии, легкость, прочность на
              растяжение, но главным является инертность по отношению к биологической
              среде.
            </p>
            <p>
              9. Легирующие элементы добавляются к другим металлам, чтобы создать новые,
              улучшенные свойства материала.
            </p>
            <p>
              10. Известными легирующими элементами являются силикон, хром, свинец,
              висмут, селен и теллур.
            </p>
            <p>
              <strong>4. </strong>
              Give the summary of the text, using key vocabulary and tell about:
            </p>
            <p>
              a) the concept of alloy;
            </p>
            <p>
              b) ferrous and non-ferrous metals and alloys;
            </p>
            <p>
              c) importance of metals and alloys in engineering;
            </p>
            <p>
              d) the aim of melting various elements with metals;
            </p>
            <p>
              e) the properties of alloys;
            </p>
            <p>
              f) the spheres of application of some metals and alloys.
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