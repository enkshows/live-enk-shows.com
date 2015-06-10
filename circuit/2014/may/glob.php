<?php 
  // foreach (glob('../../../img/shows/acic/2015/jan/{*.jpg,*.gif}', GLOB_BRACE) as $image) {
  //   echo "Filename: " . $image . "<br />";  
  // }
// $dir  = '/home/enkshows/public_html/img/shows/acic/2015/jan/{*.jpg}';
// $dir = '../../../img/shows/acic/2015/jan/{*.jpg}';

//   foreach (glob($dir, GLOB_BRACE) as $image) {
//     echo "Filename: " . $image . "<br />";  
//     echo '<img src="' . $image . '" alt="">';

//   }
  $path = '../../../img/shows/acic/2015/jan/ac-jan2015-gallery';

    for ($i = 1; $i <= 6; $i++) {
        echo '<img src="' . $path . $i .'.jpg" alt="" rel="'. $path . '-thumb' . $i . '.jpg">';
    }


?>