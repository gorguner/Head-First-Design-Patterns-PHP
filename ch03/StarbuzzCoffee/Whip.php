<?php

class Whip extends CondimentDecorator {

    public function __construct(Beverage $beverage)
    {
       $this->description ="Whip";
       $this->beverage = $beverage;
    }

    public function cost(): float{
        return 0.10 + $this->beverage->cost();
    }
}