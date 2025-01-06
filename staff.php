<!-- Header menu  -->
<?php include_once __DIR__ . "/templates/header.php"; ?>

<section id="container"
  class="sub-page">
  <div class="wrap-container zerogrid">
    <div class="crumbs">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="staff.html">Staff</a></li>
      </ul>
    </div>
    <div id="main-content">
      <div class="wrap-content">
        <div class="chef">
          <div class="row">
            <?php foreach($staff_data as $single_team) : ?>
            <div class="col-1-4">
              <div class="wrap-col">
                <div class="zoom-container">
                  <a href="#">
                    <img src="<?php echo $single_team["photo"]?>" />
                  </a>
                </div>
                <h3><?php echo $single_team["name"]?></h3>
                <h5 style="margin: 15px;"><?php echo $single_team["designation"]?></h5>
                <ul class="social t-center">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer menu  -->
<?php include_once __DIR__ . "/templates/footer.php"; ?>
