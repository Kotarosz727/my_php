<?php

namespace State;
class SafeSpeed implements SpeedStateInterface
{
    use Singleton;
    private $threshold = 100;
    private $color = 'green';
    public function nextStage(int $speed): SpeedStateInterface
    {
        if ($speed >= $this->threshold) {
            return DangerSpeed::getInstance();
        }

        return self::getInstance();
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
