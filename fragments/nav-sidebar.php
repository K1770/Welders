<!-- <h1><?php echo $category1; ?></h1> -->
<style>
    @media (max-width: 768px) {
        .left {
            padding-left: 10% !important;
        }

        /* .text-center {
            text-align: left !important;
        } */

        /* 
        .pad-50 {
            padding-left: 50%;
        } */


        .pad-0 {
            padding-left: 0;
        }

        .marg-0 {
            margin-left: 0;
        }

        .align-left {
            text-align: left;
        }

        .pad-align-left {
            text-align: left;
            padding-left: 20% !important;
            margin: 0 !important;
            width: 100%;
        }

        ul,
        li {

            margin: 0;

            padding: 0;

        }

        .btn-toggle-nav a {
            display: inline-block;

            margin-top: 0;
            margin-left: 0;
            margin-right: 0;
        }
    }
</style>

<div class="flex-shrink-0 px-3 pt-2 bg-white" hi>
    <div class="text-center">
        <span class="fs-4 fw-semibold ">Menu</span>
        <div class=" border-bottom">
        </div>
    </div>

    <ul class="list-unstyled ps-0 menu-ul">
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed btn-menu pad-50 align-left left" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Category
            </button>
            <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <?php echo '<li class=""><a href="' . $categoryLink1 . '" class="link-dark rounded a-menu pad-0 marg-0 pad-align-left">Basic Information</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink2 . '" class="link-dark rounded a-menu pad-align-left">Video</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink3 . '" class="link-dark rounded a-menu pad-align-left">Vocabulary</a></li>' ?>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed btn-menu pad-50 align-left left" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                Topics
            </button>
            <div class="collapse show" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <?php
                    foreach ($topicLinks as $key => $value) {
                        echo '<li><a href="' . $value . '" class="link-dark rounded a-menu pad-align-left">' . $key . '</a></li>';
                    }
                    ?>
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