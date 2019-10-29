<?php

namespace App\Models;

use App\Moels\EstimatedMaterial;
use App\Moels\Material;

use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{

    protected $fillable = ['total_estimation', 'total_materials_no'];

    public function estimated_materials(){
        return $this->hasMany(EstimatedMaterial::class);
    }
}
