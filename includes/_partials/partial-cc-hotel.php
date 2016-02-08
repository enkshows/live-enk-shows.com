<div class="module" id="hotel-travel" style="height 1150px">
  <h1>Hotel + Amenities</h1>
  <div class="row">
    <nav class="row-item item-one-third page-inner-nav partial-hotel">
      <ul>
        <li><a href="#show-hotel-travel" class="active">Accomodations</a></li>
        <li><a href="#show-taxi">Taxi Services</a></li>
        <li><a href="#show-car-service">Car Services</a></li>
        <li><a href="#show-airport">Airport Transportation</a></li>
        <li><a href="#show-parking">Parking</a></li>
        <li><a href="#show-hours" id="hours">Show Hours/Location</a></li>
      </ul>
    </nav>
    <div class="row-item item-two-third">
      <!-- Accomodation  -->
      <?php include($root . '/includes/_partials/partial-cc-accomodations.php');?>

      <!-- Taxi Service -->
      <?php include($root . '/includes/_partials/partial-cc-taxi-service.php');?>

      <!-- Car Service -->
      <?php include($root . '/includes/_partials/partial-cc-car-service.php');?>

      <!-- Airport Transportation -->
      <?php include($root . '/includes/_partials/partial-cc-airport-transportation.php');?>

      <!-- Parking Transportation -->
      <?php include($root . '/includes/_partials/partial-cc-parking.php');?>
      
      <!-- Show Hours Transportation -->
      <?php include($root . '/includes/_partials/partial-show-hours.php');?>
      
    </div>
  </div>
</div>