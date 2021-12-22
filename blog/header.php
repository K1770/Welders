<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="index.php">English for welders</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      </div>
    </div>
  </header>

<div class="nav-scroller py-1 mb-2 border-bottom ">
    <nav class="nav justify-content-between scrollbar-div">
      <a class="p-2 link-secondary" href="#">Working competition in Welding</a>
      <a class="nav-link dropdown-toggle link-secondary p-2" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Modules</a>
        <ul class="dropdown-menu scrollable-menu px-2" id="myDropDown" role="menu">
          <li><a class="link-secondary" href="module-1.html">Module I</a></li>
          <li><a class="link-secondary" href="#">Module II</a></li>
          <li><a class="link-secondary" href="#">Module III</a></li>
          <li><a class="link-secondary" href="#">Module IV</a></li>
       </ul>
      <a class="p-2 link-secondary" href="#">Checking course</a>
      <a class="p-2 link-secondary" href="#">Podcasts</a>
      <a class="p-2 link-secondary" href="#">Quizlet</a>
      <a class="p-2 link-secondary" href="#">Weding news</a>
      <a class="p-2 link-secondary" href="#">Learn more</a>
    </nav>
  </div>

  <?php
    function includeWithVariables($filePath, $variables = array(), $topicLinks = array(), $print = true)
    {
      $output = NULL;
      if (file_exists($filePath)) {
        // Extract the variables to a local namespace
        extract($variables);
        extract($topicLinks);

        // Start output buffering
        ob_start();

        // Include the template file
        include $filePath;

        // End buffering and return its contents
        $output = ob_get_clean();
      }
      if ($print) {
        print $output;
      }
      return $output;
    }
    ?>