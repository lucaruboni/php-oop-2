<?php


class Computer{
 

    function __construct(protected string $model, protected string $manufacturer, protected string $storage_capacity, protected string $gpu,
    protected int $ram){
       $this->model = $model;
       $this->manufacturer = $manufacturer;
       $this->storage_capacity = $storage_capacity;
       $this->gpu = $gpu;
       $this->ram = $ram;
    }
    public function get_computer_info(){
      return "$this->model $this->manufacturer $this->storage_capacity $this->gpu $this->ram";
    }
   
   
   }
   