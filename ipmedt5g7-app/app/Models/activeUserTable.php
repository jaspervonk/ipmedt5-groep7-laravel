<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activeUserTable extends Model
{
    protected $table = 'activeUser';
    public $timestamps = false;
}
