<?php
//OOP concepts

class Fare
{
    //Properties
    private $sname;
    private $year;
    private $units;
    private $choice;
    private $year1 = 550;
    private $year2 = 630;
    private $year3 = 470;
    private $year4 = 501;
    private $year1in = 3359;
    private $year2in = 4000;
    private $year3in = 2890;
    private $year4in = 3555;

    private $totalfare = 0;

    //Method    
    public function setSname($sname)
    {
        $this->sname = $sname;
    }

    public function getSname()
    {
        return $this->sname;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

     public function setUnits($units)
    {
        $this->units = $units;
    }

    public function getUnits()
    {
        return $this->units;
    }

    public function setChoice($choice)
    {
        $this->choice = $choice;
    }

    public function getChoice()
    {
        return $this->choice;
    }

    public function setValue($sname, $year, $units, $choice)
    {
        $this->setSname($sname);
        $this->setYear($year);
        $this->setUnits($units);
        $this->setChoice($choice);
    }

    public function calculation()
    {
        if ($this->year == 1) {
            if ($this->choice == 1) {
                $totalfare = $this->year1 * $this->units + $this->year1in;
                return $totalfare . "(With Lab)";
            } else {
                $totalfare = $this->year1 * $this->units;
                return $totalfare;
            }
        }elseif($this->year == 2){
            if ($this->choice == 1) {
                $totalfare = $this->year2 * $this->units + $this->year2in;
                return $totalfare . "(With Lab)";
            } else {
                $totalfare = $this->year2 * $this->units;
                return $totalfare;
            }
        }elseif($this->year == 3){
            if ($this->choice == 1) {
                $totalfare = $this->year3 * $this->units + $this->year3in;
                return $totalfare . "(With Lab)";
            } else {
                $totalfare = $this->year3 * $this->units;
                return $totalfare;
            }
        }else{
            if ($this->choice == 1) {
                $totalfare = $this->year4 * $this->units + $this->year4in;
                return $totalfare . "(With Lab)";
            } else {
                $totalfare = $this->year4 * $this->units;
                return $totalfare;
            }
        }
    }

}
?>