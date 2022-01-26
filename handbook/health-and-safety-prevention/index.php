<!doctype html>
<html lang="en">

<head>
    <title>English for welders</title>
    <?php include('../../fragments/links-style-main.php') ?>

    <link href="../../css/blog.css" rel="stylesheet">
    <link href="../../css/style-main.css" rel="stylesheet">
    <link href="../../css/style-basic.css" rel="stylesheet">
    <link href="../../css/sidebars.css" rel="stylesheet">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="../../js/sidebars.js"></script>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        .hidden {
            display: none;
        }

        button {
            width: 3rem;
            /* max-height: 38px; */
            margin-right: 0.5rem;
        }

        .flex {
            display: flex;
        }

        .inline {
            display: inline;
        }

        .span-btn {
            display: inline;
            margin-left: 0;
            text-decoration: underline;
            color: blue;
            padding: 0;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="container">
        <?php include('../../fragments/header.php'); ?>
    </div>

    <main class="container container2 mt-2">

        <section class="home-section ">

            <div class="row">

                <div class="col-md-3">
                    <?php topicsOnly(
                        '../../fragments/nav-sidebar-handbook-one.php',
                        array(
                            'categoryLink1' => '../../handbook/welders-clothing',
                            'categoryLink2' => '../../handbook/welders-workplace',
                            'categoryLink3' => '../../handbook/health-and-safety-prevention',

                            'categoryLink4' => '../../handbook/metalwork',
                            'categoryLink5' => '../../handbook/symbols-in-welding',
                            'categoryLink6' => '../../handbook/how-to-weld',

                            'categoryLink7' => '../../handbook/glossary',
                            'categoryLink8' => '../../handbook/welding-calculations',
                            'categoryLink9' => 'https://docs.google.com/forms/d/1C0wKzaX9HkreBmB_JpKrSmpA_lDO_DH7ovqTBVw9oOo/edit'
                        )
                    ); ?>
                </div> <!-- col-md-3 -->

                <div class="col-md-9">

                    <div class="py-1 text-center container ">
                        <h2 class="fw-light">Health and safety prevention</h2>
                    </div>

                    <div class="mb-5">

                        <div class="p-main">

                            <div class="inline">
                                1. During welding, the following injuries are possible ─ electric shock, burns from slag and metal drops, mechanical injuries.
                            </div>
                            <div class="hidden">1. При сварке возможны следующие травмы ─ поражение электрическим током, ожоги от шлака и капель металла, травмы механического характера.</div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">

                            <div class="inline">
                                2. In order to prevent all of these situations, it is important to observe the precautions strictly.
                            </div>
                            <div class="hidden">
                                2. Для предотвращения всех этих положений важно неукоснительно соблюдать меры предосторожности.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                3. Reliable insulation of all wires connected to the power supply of the power source and the welding arc, the device of hermetically sealed switching devices, grounding of the bodies of welding machines. Grounding are subject to: enclosures and power supplies, hardware box, auxiliary electrical equipment.
                            </div>
                            <div class="hidden">
                                3. Надежная изоляция всех проводов, связанных с питанием источника тока и сварочной дуги, устройство герметически закрытых включающих устройств, заземление корпусов сварочных аппаратов. Заземление подлежат: корпуса и источников питания, аппаратного ящика, вспомогательное электрическое оборудование.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>


                        <div class="p-main">
                            <div class="inline">
                                4. Reliable device of the electrode holder with good insulation, which guarantees that there will be no accidental contact of the current-carrying parts of the electrode holder with the workpiece to be welded or the welder's hands.
                            </div>
                            <div class="hidden">
                                4. Надежное устройство электрододержателя с хорошей изоляцией, которая гарантирует, что не будет случайного контакта токоведущих частей электрододержателя со свариваемыми изделием или руками сварщика.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                5. Work with serviceable dry overalls and gloves.
                            </div>
                            <div class="hidden">
                                5. Работа с исправной сухой спецодежде и рукавицах.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                6. Eyes are especially hazardous. Therefore, welding helmets must be used.
                            </div>
                            <div class="hidden">
                                6. Особой опасности подвержены глаза. Поэтому необходимо применять сварочные маски.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                7. For protection against splashes, overalls made of tarpaulin and special fabric are usually used. During work, jackets should not be put into trousers, and shoes should have a smooth top so that splashes of molten metal do not get inside the clothes, as this could cause severe burns.
                            </div>
                            <div class="hidden">
                                7. Для защиты от брызг обычно используют спецодежду из брезентовой и специальной ткани. Куртки при работе не следует вправлять в брюки, а обувь должна иметь гладкий верх, чтобы брызги расплавленного металла не попадали внутрь одежды, так как в этом случае возможны тяжелые ожоги.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                8. To protect against contact with damp, cold ground and snow, as well as with cold metal during outdoor work and indoors, welders should be provided with warm mats, mats, knee pads, armrests made of fire-resistant materials with an elastic layer.
                            </div>
                            <div class="hidden">
                                8. Для защиты от соприкосновения с влажной, холодной землей и снегом, а также с холодным металлом при наружных работах и в помещении сварщики должны обеспечиваться теплыми подстилками, матами, подколенниками, подлокотниками из огнестойких материалов с эластичной прослойкой.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                9. Use ventilation or local suction when welding.
                            </div>
                            <div class="hidden">
                                9. Необходимо использовать вентиляцию или местные отсосы при сварочных работах.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                10. Prevent fires from molten metal and slag. The danger of fires for this reason exists in those cases when welding is carried out on a metal covering a tree or combustible materials, on wooden scaffolding, near flammable materials, etc.
                            </div>
                            <div class="hidden">
                                10. Предотвращение пожаров от расплавленного металла и шлака. Опасность возникновения пожаров по этой причине существует в тех случаях, когда сварку выполняют по металлу, закрывающему дерево либо горючие материалы, на деревянных лесах, вблизи легко воспламеняющихся материалов и т.д.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                11. All equipment that, in a malfunctioning state, may be energized, must have an individual earthing with a terminal to a common protective earth.
                            </div>
                            <div class="hidden">
                                11. Все оборудование, которое при неисправном состоянии может оказаться под напряжением, должно иметь индивидуальное заземление с выводом к общему защитному заземлению.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                        <div class="p-main">
                            <div class="inline">
                                12. Only the fitter-adjuster has the right to correct the defects of the electric welding equipment.
                            </div>
                            <div class="hidden">
                                12. Исправить дефекты электросварочного оборудования имеет право только монтер-наладчик.
                            </div>
                            <span class="span-btn" onclick="translate_txt(this)">Russian</span>
                        </div>

                    </div>

                </div> <!-- col-md-8 -->

            </div>
            <!--? -->

            </div>
            <!--? -->

        </section>

    </main>
    <script>
        ;
        // (function($D) {
        //     var $button = $D.querySelector('.js-button'),
        //         $container = $D.querySelector('.js-ru'),
        //         $container2 = $D.querySelector('.js-eng');
        //     console.log($button)

        //     $button.addEventListener('click', function(e) {
        //         var data = e.target.dataset,
        //             toggleText = $button.innerHTML,
        //             isVisible = $container.style.display == 'block',
        //             isVisible = $container2.style.display == 'none';

        //         $button.innerHTML = data.toggleText;
        //         data.toggleText = toggleText;

        //         $container.style.display = isVisible ? 'none' : 'block',
        //             $container2.style.display = isVisible ? 'block' : 'none';
        //     });
        // })(document);

        function translate_txt(button) {
            Russian = button.previousSibling.previousSibling;
            English = button.previousSibling.previousSibling.previousSibling.previousSibling;
            console.log(button.previousSibling.previousSibling.previousSibling.previousSibling.innerHTML)
            console.log(button.innerHTML)

            data = button.innerHTML,
                toggleText = button.innerHTML,
                isVisible = Russian.style.display == 'inline',
                isVisible = English.style.display == 'none';
            console.log()

            button.innerHTML = data == 'English' ? 'Russian' : 'English';
            data.toggleText = toggleText;


            Russian.style.display = isVisible ? 'none' : 'inline',
                English.style.display = isVisible ? 'inline' : 'none';
        }
    </script>
    <?php include('../../fragments/footer.php') ?>

</body>

</html>