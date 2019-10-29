<?php

namespace App\Models;

use App\Models\EstimatedMaterial;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{

    protected $fillable = ['name', 'price_type', 'price', 'length', 'width', 'height', 'weight'];

    
    public function estimated_materials(){
        return $this->belongsToMany(EstimatedMaterial::class, 'estimated_materials');
    }

}
