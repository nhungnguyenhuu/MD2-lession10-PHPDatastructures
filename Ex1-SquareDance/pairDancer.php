<?php
include_once "Dancer.php";

class PairDancer
{
    protected $queueMale;
    protected $queueFemale;

    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function pairDancer()
    {
        if (count($this->queueMale) > count($this->queueFemale)) {
        } else {
            for ($i = 0; $i < count($this->queueFemale); $i++) {


                if ($i == count($this->queueFemale) - 1) {
                    return "Nam dang cho";

                }
            }
        }
    }
}

