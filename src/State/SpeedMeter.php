<?php

class SpeedMeter
{
    protected $speed = 0;
    protected SpeedStateInterface $speedState;
    public function __construct()
    {
        $this->speedState = SafeSpeed::getInstance();
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
        $this->speedState = $this->speedState->nextStage($speed);
    }

    public function display(): void
    {
        echo $this->speed . 'km' . $this->speedState->getColor();  
    }
}

$class = new SpeedMeter();
$class->setSpeed(80);
$class->display(); // 80km green

$class->setSpeed(90);
$class->display(); // 90km green

$class->setSpeed(100);
$class->display(); // 100km red

$class->setSpeed(90);
$class->display(); // 90km red

$class->setSpeed(80);
$class->display(); // 80km green
