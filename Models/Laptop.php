<?php
require_once __DIR__ . '/computer.php';


class Laptop extends Computer {

    function __construct($type, $model, $manufacturer, $storage_capacity, $gpu, public string $monitor_size, public string $keyboard, public string $cam, public string $battery_capacity, public string $img){
       parent::__construct($type, $model, $manufacturer, $storage_capacity, $gpu);
       $this->monitor_size = $monitor_size;
       $this->keyboard = $keyboard;
       $this->cam = $cam;
       $this->battery_capacity = $battery_capacity;
       $this->img = $img;
    }
 
     function get_laptop_info(){
       
       return "$this->type, $this->model, $this->manufacturer, $this->storage_capacity, $this->gpu, $this->ram, $this->monitor_size, $this->keyboard, $this->cam, $this->battery_capacity, $this->img";
     }


 }