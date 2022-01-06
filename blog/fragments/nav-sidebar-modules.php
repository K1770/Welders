<!-- <h1><?php echo $category1; ?></h1> -->

<div class="flex-shrink-0 px-3 pt-3 bg-white">

    <ul class="list-unstyled ps-0 menu-ul">
        <li class="mb-1">
            <div>
                <button class="btn btn-toggle align-items-center rounded collapsed btn-menu p-0 mb-1" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                    <b class="h4">Menu</b>
                </button>
                <div class="border-bottom mb-2">
                </div>

                <div class="collapse show" id="home-collapse">
                    <div class="overflow-auto scrollbar-div pb-1" id="drag-to-scroll-cards" style="overflow: auto; ">

                        <div class="card card-block mb-2">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm position-relative">
                                <div class="col py-2 px-4 d-flex flex-column position-static">
                                    <div class="just-center w-100">
                                        <h3 class="mb-0">Module I</h3>
                                    </div>
                                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                                </div>
                            </div>
                        </div> <!-- one card -->
                        <div class="card card-block mb-2">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm position-relative">
                                <div class="col py-2 px-4 d-flex flex-column position-static">
                                    <div class="just-center w-100">
                                        <h3 class="mb-0">Module II</h3>
                                    </div>
                                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                                </div>
                            </div>
                        </div> <!-- one card -->
                        <div class="card card-block mb-2">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm position-relative">
                                <div class="col py-2 px-4 d-flex flex-column position-static">
                                    <div class="just-center w-100">
                                        <h3 class="mb-0">Module III</h3>
                                    </div>
                                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                                </div>
                            </div>
                        </div> <!-- one card -->
                        <div class="card card-block mb-2">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm position-relative">
                                <div class="col py-2 px-4 d-flex flex-column position-static">
                                    <div class="just-center w-100">
                                        <h3 class="mb-0">Module IV</h3>
                                    </div>
                                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                                </div>
                            </div>
                        </div> <!-- one card -->

                    </div>
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