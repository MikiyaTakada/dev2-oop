<?php
//OOP concepts

class Fare
{
    //Properties
    private $age;
    private $distance;

    //Method    
    public function setAge($age)
    {
        $this->age = $age;

    }

    public function getAge()
    {
        return $this->age;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    public function getdistance()
    {
        return $this->distance;
    }

    public function setValue($age, $distance)
    {
        $this->setAge($age);
        $this->setDistance($distance);
    }

    public function calculation($age, $distance)
    {
        $basefare = 8;
        $totalfare = 0;

        if ($age >= 60) {
            if ($distance > 4) {
                $totalfare = ($basefare + ($distance - 4)) * 0.8;
            } else {
                $totalfare = $basefare * 0.8;
            }
        } else {
            if ($distance > 4) {
                $totalfare = $basefare + ($distance - 4);
            } else {
                $totalfare = $basefare;
            }
        }
        return $totalfare;
    }

}
?>