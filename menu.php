<!-- Header menu  -->
<?php include_once __DIR__ . "/templates/header.php"; ?>



<!--////////////////////////////////////Container-->
<section id="container"
  class="sub-page">
  <div class="wrap-container zerogrid">
    <div class="crumbs">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
      </ul>
    </div>
    <div id="main-content">
      <div class="wrap-content">
        <div class="row">

          <?php  foreach ($menu_data as $food_data) : ?>
          <div class="col-1-3">
            <div class="wrap-col">
              <h3><?php echo isset($food_data["menu_title"]) ? $food_data["menu_title"] : ""; ?></h3>
              <?php if (isset($food_data["items"]) && is_array($food_data["items"])) : ?>
              <?php foreach ($food_data["items"] as $food_item) : ?>
              <div class="post">
                <a href="#"><img
                    src="<?php echo isset($food_item["photo"]) ? $food_item["photo"] : "default.jpg"; ?>" /></a>
                <div class="wrapper">
                  <h5><a href="#"><?php echo isset($food_item["name"]) ? $food_item["name"] : ""; ?></a></h5>
                  <span><?php echo isset($food_item["price"]) ? $food_item["price"] : ""; ?></span>
                </div>
              </div>
              <?php endforeach; ?>
              <?php else : ?>

              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>


        </div>

      </div>
    </div>
  </div>
</section>

<!-- footer menu  -->
<?php include_once __DIR__ . "/templates/footer.php"; ?>