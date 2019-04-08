<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = "orders";
    public $timestamps = false;
}


//Function 
//Plant cost = plant quantity * plant price
//Shipping cost = shipping multiplier * plant quantity * plant unit shipping cost
//Total order cost = shipping cost + plant cost
//



$array = ['NSW','QLD','NT','VIC','SA','ACT','WA','TAS'];