<?php

// PrizeItemは2つの性質を持っている。材質と形状

abstract class Material
{
    public abstract function get();
}

abstract class Shape
{
    public abstract function get();
}

abstract class PrizeItem
{
    public function __construct(
        protected Material $material,
        protected Shape $shape
    )
    {}
    public function getMaterial()
    {
        return $this->material->get();
    }    

    public function getShape()
    {
        return $this->shape->get();
    }
}

class GoldMaterial extends Material
{
    public function get()
    {
        return 'Gold';
    }
}
class ShilverMaterial extends Material
{
    public function get()
    {
        return 'Shilver';
    }
}

class MedalShape extends Shape
{
    public function get()
    {
        return 'Medal';
    }
}

class CupShape extends Shape
{
    public function get()
    {
        return 'Cup';
    }
}

$goldMedal = new PrizeItem(
    new GoldMaterial(),
    new MedalShape(),
);

$shilverCup = new PrizeItem(
    new ShilverMaterial(),
    new CupShape(),
);
