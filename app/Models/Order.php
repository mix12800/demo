<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['name', 'date', 'room_id', 'pay'])]
class Order extends Model
{
    //
}
