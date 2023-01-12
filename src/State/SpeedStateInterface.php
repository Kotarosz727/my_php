<?php

interface SpeedStateInterface
{
    public function nextStage(int $speed): self;

    public function getColor(): string;
}