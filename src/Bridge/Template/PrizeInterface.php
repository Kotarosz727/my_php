<?php
// templateメソッドで実装しているパターン。重複が生じている。
interface PrizeItemInterface 
{
    public function getMaterial();
    public function getShape();
}

abstract class Medal implements PrizeItemInterface
{
    public abstract function getMaterial();

    public function getShape()
    {
        
    }
}

abstract class Cup implements PrizeItemInterface
{
    public abstract function getMaterial();
    public function getShape()
    {
        
    }
}

class GoldMedal extends Medal{
    public function getMaterial(){
        return 'Gold';
    }
}

class ShilverMedal extends Medal{
    public function getMaterial(){
        return 'Shilver';
    }
}


class GoldCup extends Cup {
    public function getMaterial(){
        return 'Gold';
    }
}
class ShilverCup extends Cup{
    public function getMaterial(){
        return 'Shilver';
    }
}
