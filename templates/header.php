<?php 

  // includes data functions
  if (file_exists(__DIR__ . "/../autoload.php")) {
  include_once __DIR__ . "/../autoload.php";
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title> <?php echo $theme_options["site_title"] ?> | <?php echo $theme_options["tag_line"] ?> </title>
  <meta name="description"
    content="Free Responsive Html5 Css3 Templates | zerotheme.com">
  <meta name="author"
    content="www.zerotheme.com">

  <!-- Mobile Specific Metas -->
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS -->
  <link rel="stylesheet"
    href="css/zerogrid.css">
  <link rel="stylesheet"
    href="css/style.css">
  <link rel="stylesheet"
    href="css/slide.css">
  <link rel="stylesheet"
    href="css/menu.css">
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css"
    rel="stylesheet"
    type="text/css">

</head>

<body>
  <div class="wrap-body">
    <div class="top">
      <div class="zerogrid">
        <ul class="number f-left">
          <li class="mail">
            <p> <?php echo $theme_options["email"] ?> </p>
          </li>
          <li class="phone">
            <p><?php echo $theme_options["phone"] ?></p>
          </li>
        </ul>
        <ul class="top-social f-right">

          <?php foreach($theme_options["social"] as $icon) : ?>
          <li>
            <a href="<?php echo $icon["link"] ?>">
              <i class="<?php echo $icon["class_name"] ?>"></i>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <header>
      <div class="zerogrid">
        <center>
          <div class="logo"><img src="<?php echo $theme_options["logo"]["image"] ?> "></div>
        </center>
      </div>
    </header>
    <div class="site-title">
      <div class="zerogrid">
        <div class="row">
          <h2 class="t-center"> <?php echo $theme_options["tag_line"] ?> </h2>
        </div>
      </div>
    </div>


    <?php include_once __DIR__ . "/menu.php"; ?>