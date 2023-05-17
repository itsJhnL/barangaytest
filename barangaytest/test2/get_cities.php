<?php
// Retrieve the selected country from the request
$province = $_GET['province'];

// You can modify this array to match your data source
$cityData = array(
  'Nueva_Ecija' => array('New York', 'Los Angeles', 'Chicago'),
  'Nueva_Vizcaya' => array('Vigorus', 'SmoothLP', 'AXS'),
  'Manila' => array('Toronto', 'Vancouver', 'Montreal')
  // Add more countries and cities here
);

// Retrieve the cities for the selected country
$cities = isset($cityData[$province]) ? $cityData[$province] : array();

// Return the cities as JSON
echo json_encode($cities);
?>
