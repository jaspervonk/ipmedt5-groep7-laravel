<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoortRecept extends Model
{
    protected $table = 'soort_recept';

    public function allRecepten(){
        return $this->hasMany('\App\Models\Recepten', 'soort', 'soort');
    }
}
