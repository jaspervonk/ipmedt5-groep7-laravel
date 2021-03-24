<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepten extends Model
{
    protected $table = 'recepten';

    public function receptenModel(){
        return $this->belongsTo('\App\Models\SoortRecept', 'soort', 'soort');
    }
}
