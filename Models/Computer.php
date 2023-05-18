<?php


class Computer{
 

    function __construct(public string $type, public string $model, public string $manufacturer, public string $storage_capacity, public string $gpu,
    public int $ram){
        $this->type = $type;
       $this->model = $model;
       $this->manufacturer = $manufacturer;
       $this->storage_capacity = $storage_capacity;
       $this->gpu = $gpu;
       $this->ram = $ram;
       
    }
    public function get_computer_info(){
      return "$this->type, $this->model, $this->manufacturer, $this->storage_capacity, $this->gpu, $this->ram";
    }
   
   
   }
   