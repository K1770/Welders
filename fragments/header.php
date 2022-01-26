<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="/welders">English for welders </a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
    </div>
  </div>
</header>

<div class="nav-scroller py-1 mb-2 border-bottom ">
  <nav class="nav justify-content-between scrollbar-div" id="drag-to-scroll-header">
    <a class="p-2 link-secondary" draggable="false" href="https://worldskills.org/skills/id/222/" target="_blank">Working competition in Welding</a>
    <a class="nav-link dropdown-toggle link-secondary p-2" draggable="false" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Modules</a>
    <ul class="dropdown-menu scrollable-menu px-2" id="myDropDown" role="menu" style="min-width: auto;">
      <li><a class="link-secondary" href="/welders/module-1">Module I</a></li>
      <li><a class="link-secondary" href="/welders/module-2">Module II</a></li>
      <li><a class="link-secondary" href="/welders/module-3">Module III</a></li>
      <li><a class="link-secondary" href="/welders/module-4">Module IV</a></li>
    </ul>
    <a class="nav-link dropdown-toggle link-secondary p-2" draggable="false" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Checking course</a>
    <ul class="dropdown-menu scrollable-menu px-2" id="myDropDown" role="menu" style="min-width: auto;">
      <li><a class="link-secondary" href="/welders/checking-course.php">All modules</a></li>
      <hr class="my-1">
      <li><a class="link-secondary" href="https://docs.google.com/forms/d/1-KbIXFZB-YARA1Z-IE2KJAktKcEUvJcxGNp61Dyd-Vg/edit" target="_blank">Module I</a></li>
      <li><a class="link-secondary" href="https://docs.google.com/forms/d/1fgr43sPgVpz2Cro5SO117lS3GAjxzVfxEpuE7ybAGo8/edit" target="_blank">Module II</a></li>
      <li><a class="link-secondary" href="https://docs.google.com/forms/d/1nP4TOtuTqfSg2wW7ROqzC8gimKGkLSrWA3PByVyjg8c/edit" target="_blank">Module III</a></li>
      <li><a class="link-secondary" href="https://docs.google.com/forms/d/107ddwCWkC5c0oP30ZffhSCugBDALBqFW0qlNrJiIaDo/edit" target="_blank">Module IV</a></li>
    </ul>
    <a class="p-2 link-secondary" draggable="false" href="/welders/podcasts.php">Podcasts</a>
    <a class="p-2 link-secondary" draggable="false" href="/welders/quizlet.php">Quizlet</a>
    <a class="p-2 link-secondary" draggable="false" href="https://primeweld.com/blogs/news" target="_blank">Welding news</a>
    <a class="p-2 link-secondary" draggable="false" href="/welders/learn-more.php">Learn more</a>
    <a class="p-2 link-secondary" draggable="false" href="/welders/handbook">Handbook</a>
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

function topicsOnly($filePath, $topicLinks = array(), $print = true)
{
  $output = NULL;
  if (file_exists($filePath)) {
    // Extract the variables to a local namespace
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