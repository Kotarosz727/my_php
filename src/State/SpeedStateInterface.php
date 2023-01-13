<?php

namespace State;
interface SpeedStateInterface
{
    public function nextStage(int $speed): SpeedStateInterface;

    public function getColor(): string;
}