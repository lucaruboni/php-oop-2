<?php

trait getRamCapacity {
    public $ram;
    
    function getRam(){
        return $this->ram;
    }

    function setRam($capacity, $unit){
      

        if (!is_numeric($capacity)){
            throw new InvalidArgumentException("$capacity $unit is an invalid value");
            
        }
        else if(!is_string($unit)){
            throw new InvalidArgumentException("$unit is an invalid value");
        }
        else if($capacity > 1000 || $capacity < 1){
            throw new RangeException("$capacity $unit Is An Invalid capacity range, must be between 1 and 1000");
        }
        
         return $this->ram = $capacity . $unit;
        
    }

    
}