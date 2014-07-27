<?php
require '../../reports/model/search_preference.php';
require '../../reviews/model/review.php';

$search_pref = new Search_Preference();
$search_pref_by_city_chart = $search_pref->getPreferencesGroupByCity();
$search_pref_by_city = $search_pref->getPreferencesGroupByCity();

$search_pref_by_price_chart = $search_pref->getPreferencesGroupByPrice();

$search_pref_by_price = $search_pref->getPreferencesGroupByPrice();

$rw = new Review();
$popular_properties_chart = $rw->get_properties_with_ratings();
$popular_properties = $rw->get_properties_with_ratings();
