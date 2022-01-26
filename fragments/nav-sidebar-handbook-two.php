<!-- <h1><?php echo $category1; ?></h1> -->
<style>
    @media (max-width: 768px) {
        .name-align-left {
            text-align: left;
            padding-left: 2.5rem !important;
        }

        .li-align-left {
            text-align: left;
            padding-left: 15% !important;
            margin: 0 !important;
            width: 100%;
        }

        .btn-toggle-nav a {
            display: inline-block;
        }
    }
</style>

<div class="flex-shrink-0 px-3 pt-2 bg-white" hi>
    <div class="text-center">
        <span class="fs-4 fw-semibold">Handbook</span>
        <div class=" border-bottom">
        </div>
    </div>

    <ul class="list-unstyled ps-0 menu-ul">
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed btn-menu name-align-left" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Category
            </button>
            <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <?php
                    foreach ($variables as $key => $value) {
                        echo '<li><a href="' . $value . '" class="link-dark rounded a-menu li-align-left">' . $key . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed btn-menu name-align-left" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                Topics
            </button>
            <div class="collapse show" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <?php echo '<li><a href="' . $categoryLink1 . '" class="link-dark rounded a-menu li-align-left">Welder’s clothing</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink2 . '" class="link-dark rounded a-menu li-align-left">Welder’s workplace</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink3 . '" class="link-dark rounded a-menu li-align-left">Health and safety prevention</a></li>' ?>

                    <?php echo '<li><a href="' . $categoryLink4 . '" class="link-dark rounded a-menu li-align-left">Metalwork</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink5 . '" class="link-dark rounded a-menu li-align-left">Symbols in welding</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink6 . '" class="link-dark rounded a-menu li-align-left">How to Weld</a></li>' ?>

                    <?php echo '<li><a href="' . $categoryLink7 . '" class="link-dark rounded a-menu li-align-left">Glossary</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink8 . '" class="link-dark rounded a-menu li-align-left">Welding calculations</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink9 . '" class="link-dark rounded a-menu li-align-left" target="_blank">Test</a></li>' ?>

                </ul>
            </div>
        </li>
    </ul>
</div> <!-- menu-->

<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
        let collapsedElements = document.getElementsByClassName("collapse");

        for (let i = 0; i < collapsedElements.length; i++) {
            collapsedElements[i].classList.toggle("show");
        }
    }
</script>