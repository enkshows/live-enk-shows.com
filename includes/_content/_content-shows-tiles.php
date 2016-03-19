<?php 
// this config file powers the home page.
// enter in the show information and it generates
// the necessary mark up for the tiles
// and the attend modules
$shows = array(
    // each `array` can be thought about as a 'show tile'
    // within each 'show tile' all displayed information is necessary
    // to power the tile. 

    // name: the name of the show - this should match the $showname variable in each show speficic vars.php file
    // abbreviation: this sets the background image for each tile
    // dates: sets the h1 tag within each show tile
    // location: sets the h2 tag within each show tile
    // year: not currently being set anywhere
    // attend: set to true to display a tile in the 'attend' section 
          // NOTE: the only tile that should not be set is the Shop The Floor tile
    // link: links the showtile to its respective show

    /* array(
      // show information
      name" => "Coterie",
      "abbreviation" => "fc",
      "dates" => "February 22.23.24",
      "location" => "Javits.NYC",
      "year" => "2016",
      "attend" => true,
      "link" => "/coterie"
    ), 
    array(
      // show information
      "name" => "Sole Commerce",
      "abbreviation" => "sc",
      "dates" => "February 22.23.24",
      "location" => "Javits.NYC",
      "year" => "2016",
      "attend" => true,
      "link" => "/sole"
    ),  
    array(
      // show information
      "name" => "TMRW",
      "abbreviation" => "tmrw",
      "dates" => "February 22.23.24",
      "location" => "Javits.NYC",
      "year" => "2016",
      "attend" => true,
      "link" => "/tmrw"
    ),           
    array(
      // show information
      "name" => "Children's Club",
      "abbreviation" => "cc",
      "dates" => "March 13.14.15",
      "location" => "Javits.NYC",
      "year" => "2016",
      "attend" => true,
      "link" => "/childrensclub"
    ),*/
    array(
      // show information
      "name" => "Accessorie Circuit",
      "abbreviation" => "ac",
      "dates" => "May 2.3.4",
      "location" => "Javits.NYC",
      "year" => "2016",
      "attend" => true,
      "link" => "/circuit"
    ),  
    array(
      // show information
      "name" => "Intermezzo Collections",
      "abbreviation" => "ic",
      "dates" => "May 2.3.4",
      "location" => "Javits.NYC",
      "year" => "2016",
      "attend" => true,
      "link" => "/intermezzo"
    ),
    array(
      // show information
      "name" => "FWD",
      "abbreviation" => "fwd",
      "dates" => "May 2.3.4",
      "location" => "Javits.NYC",
      "year" => "2016",
      "attend" => true,
      "link" => "/fwd"
    ),     
    array(
      // show information
      // this should never have the "attend" value
      "name" => "Shop The Floor",
      "abbreviation" => "stf",
      "dates" => "24/7 . 365 Days",
      "location" => "shopthefloor.com",
      "link" => "http://shopthefloor.com/"
    ),
    
);

?>

