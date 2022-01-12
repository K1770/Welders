<!-- <h1><?php echo $category1; ?></h1> -->

<div class="flex-shrink-0 px-3 pt-3 bg-white" hi>
    <div class="text-center">
        <span class="fs-4 fw-semibold">Menu</span>
        <div class=" border-bottom">
        </div>
    </div>

    <ul class="list-unstyled ps-0 menu-ul">
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed btn-menu" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Category
            </button>
            <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <?php echo '<li><a href="' . $categoryLink1 . '" class="link-dark rounded a-menu">Basic Information</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink2 . '" class="link-dark rounded a-menu">Video</a></li>' ?>
                    <?php echo '<li><a href="' . $categoryLink3 . '" class="link-dark rounded a-menu">Vocabulary</a></li>' ?>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed btn-menu" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                Topics
            </button>
            <div class="collapse show" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <?php
                    foreach ($topicLinks as $key => $value) {
                        echo '<li><a href="' . $value . '" class="link-dark rounded a-menu">' . $key . '</a></li>';
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