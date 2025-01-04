<a href="#"
  class="nav-toggle">Toggle Navigation</a>
<nav class="cmn-tile-nav">
  <ul class="clearfix">
    <?php
         
         $j = 1;
        
        foreach($header_menu as $menu) : ?>
    <li class="colour-<?php echo $j++ ?> ">
      <a href="<?php echo $menu["link"] ?>"> <?php echo $menu["name"] ?> </a>
    </li>
    <?php endforeach; ?>
  </ul>
</nav>