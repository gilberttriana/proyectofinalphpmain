<?php

class Model {
    private $json_file;
    public function __construct(){
        $this->json_file = json_decode(file_get_contents("data-1.json"),true);
    }
    public function get_all_anounces() {
        return $this->json_file;
    }
    private function str_to_float($string) {
        $string = preg_replace("/[^0-9\.]/", "", $string);
        return floatval($string);
    }
    public function get_filtered_anounces($city, $type, $min, $max){
        return array_filter($this->json_file, function($element) use ($city, $type, $min, $max) {
            return ($element["Ciudad"] == $city &&
                    $element["Tipo"] == $type &&
                    $this->str_to_float($element["Precio"]) >= $min &&
                    $this->str_to_float($element["Precio"]) <= $max
            );
        });
    }
    public function get_cities(){
        return array_unique(array_column($this->json_file, 'Ciudad'));
    }
    public function get_types(){
        return array_unique(array_column($this->json_file, 'Tipo'));
    }
}