<?php

namespace State;
class DangerSpeed implements SpeedStateInterface
{
    use Singleton;

    private $threshold = 80;
    private $color = 'red';
    public function nextStage(int $speed): SpeedStateInterface
    {
        if ($speed <= $this->threshold){
            return SafeSpeed::getInstance();
        }

        return self::getInstance();
    }

    public function getColor(): string
    {
        return $this->color;
    }
}