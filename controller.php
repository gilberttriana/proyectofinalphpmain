<?php

require_once("model.php");
$model = new Model();

$CITIES = $model->get_cities();
$TYPES =$model->get_types();
$DATA;

if (isset($_POST["show_all"])){
    $DATA = $model->get_all_anounces();
} else if (isset($_POST["custom_search"])){
    $city = $_POST["city"];
    $type = $_POST["type"];
    $min = floatval($_POST["min"]);
    $max = floatval($_POST["max"]);
    $DATA = $model->get_filtered_anounces($city,$type,$min,$max);
}

require_once("views/index.php");