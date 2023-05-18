<?php

require_once __DIR__ . '/computer.php';

class Desktop extends Computer {
    function __construct($type, $model, $manufacturer, $storage_capacity, $gpu, $ram, public string $power_supply, public string $case_model, public int $weight, public string $img ){
        parent::__construct($type, $model, $manufacturer, $storage_capacity, $gpu, $ram);
        $this->power_supply = $power_supply;
        $this->case_model = $case_model;
        $this->weight = $weight;
        $this->img = $img;
    }

    function get_desktop_info(){
        return "$this->power_supply, $this->case_model, $this->weight, $this->img";
    }

}
