<?php

require_once __DIR__ . '/../Traits/GetRamCapacity.php';

class Computer{
 

    function __construct(public string $type, public string $model, public string $manufacturer, public string $storage_capacity, public string $gpu){
        $this->type = $type;
       $this->model = $model;
       $this->manufacturer = $manufacturer;
       $this->storage_capacity = $storage_capacity;
       $this->gpu = $gpu;
       
    
       
    }

    use GetRamCapacity;

    public function get_computer_info(){
      return "$this->type, $this->model, $this->manufacturer, $this->storage_capacity, $this->gpu";
    }
    
    


   
   }
   