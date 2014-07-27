<?php
require '../../common/kint/Kint.class.php';
require '../../property/model/property.php';
require '../../reports/model/search_preference.php';

$location = $_POST['location']; 
$property_type = $_POST['property_type'];
$min_val = $_POST['min_val'];
$max_val = $_POST['max_val'];

//KINT::dump($location);
//KINT::dump($property_type);
$min_val = str_replace(',', '',$min_val);
$max_val = str_replace(',', '',$max_val);

$min_val_dec = 0;
$max_val_dec = 0;

$no_min = false;
$no_max = false;
$no_type = false;
$no_location = false;

if(strpos($min_val, 'No min') !== false){
    $no_min = true;
}
else{
    $min_val_dec = floatval($min_val);
}
if(strpos($max_val, 'No max') !== false){
    $no_max = true;
}
else{
    $max_val_dec = floatval($max_val);
}
if(strpos($property_type, 'Select')){
    $no_type = true;
}
if(strpos($location, 'Select')){
    $no_location = true;
}
//KINT::dump($min_val_dec);
//KINT::dump($max_val_dec );

$property = new Property();
$search_pref = new Search_Preference();

$searchResult = $property->getPropertiesBySearchCategory($location, $property_type, $min_val_dec, $max_val_dec,$no_min,$no_max,$no_type,$no_location);
date_default_timezone_set('Asia/Colombo');
$date = date('m/d/Y h:i:s a', time());
$search_pref->insert_search_preference($property_type, $min_val.'-'.$max_val, $location);
include '../../property/view/display_properties.php';; 

