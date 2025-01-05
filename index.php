 <!-- header part  -->
 <?php include_once __DIR__ . "/templates/header.php"; ?>


 <!-- slider part  -->
 <div class="zerogrid">
   <div class="callbacks_container">
     <ul class="rslides"
       id="slider4">
       <?php foreach($slider as $slide ) : ?>
       <li>
         <img src="<?php echo  $slide["photo"] ?>"
           alt="">
         <div class="caption">
           <h2><?php echo  $slide["title"] ?></h2></br>
           <p><?php echo  $slide["desc"] ?> </p>
         </div>
       </li>
       <?php endforeach; ?>
     </ul>
   </div>
 </div>


 <section id="container"
   class="index-page">
   <div class="wrap-container zerogrid">
     <!-----------------content-box-1-------------------->
     <section class="content-box box-1">
       <div class="zerogrid">
         <div class="row box-item">
           <!--Start Box-->
           <h2><?php echo $about_data["title"]?></h2>
           <span><?php echo $about_data["desc"]?> </span>
         </div>
       </div>
     </section>
     <!-----------------content-box-2-------------------->
     <section class="content-box box-2">
       <div class="zerogrid">
         <div class="row wrap-box">
           <!--Start Box-->
           <div class="header">
             <h2> <?php echo $food_data_all["title"]?> </h2>
             <hr class="line">
             <span><?php echo $food_data_all["desc"]?> </span>
           </div>
           <div class="row">
             <?php foreach($food_data_all["all_food"] as $single_food_data) : ?>
             <div class="col-1-3">
               <div class="wrap-col">
                 <div class="box-item">
                   <span class="ribbon"> <?php echo $single_food_data["title"]?> </span>
                   <img src="<?php echo $single_food_data["photo"]?>"
                     alt="">
                   <p> <?php echo $single_food_data["desc"]?></p>
                   <a href="#"
                     class="button button-1"> <?php echo $single_food_data["button"]?></a>
                 </div>
               </div>
             </div>
             <?php endforeach; ?>
           </div>
         </div>
       </div>
     </section>
   </div>
 </section>

 <!-- footer menu  -->
 <?php include_once __DIR__ . "/templates/footer.php"; ?>