<?php
require_once __DIR__ . '/computer.php';

class Laptop extends Computer {

    function __construct(protected string $monitor_size, protected string $keyboard, protected string $cam, protected string $battery_capacity){
       parent::__construct($model, $manufacturer, $storage_capacity, $gpu, $ram);
       $this->monitor_size = $monitor_size;
       $this->keyboard = $keyboard;
       $this->cam = $cam;
       $this->battery_capacity = $battery_capacity;
    }
 
     function get_laptop_info(){
       
       return "$this->model, $this->manufacturer, $this->storage_capacity, $this->gpu, $this->ram, $this->monitor_size, $this->keyboard, $this->cam, $this->battery_capacity ";
     }
    
 }