<?php
class Fare{
    private $age;
    private $distance;
    private $fare;

    //Age setter & getter
    public function setAge($new_age){
        $this->age = $new_age;
    }

    public function getAge(){
        return $this->age;
    }

    //Distance setter & getter
    public function setDistance($new_distance){
        $this->distance = $new_distance;
    }

    public function getDistance(){
        return $this->distance;
    }

    //Fare setter & getter
    public function setFare(){
        //Fare
        if($this->distance <= 4){
            $this->fare = 8;
    }elseif($this->distance > 4){
        $this->fare = $this->distance + 4;
    }

    if($this->age >= 60){
        $this->fare *= 0.8; //$this->fare = $this->fare * 0.8
        }
    }

    public function getFare(){
        return $this->fare;
    }
    
}

?>