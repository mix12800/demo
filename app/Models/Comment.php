<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['comment', 'order_id', 'user_id'])]
class Comment extends Model
{
    //
}
