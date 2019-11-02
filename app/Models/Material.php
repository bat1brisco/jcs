<?php

namespace App\Models;

use App\Models\EstimatedMaterial;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    const SIZE = ['Extra Small', 'Small', 'Medium', 'Large', 'Extra Large', '2 Extra Large', '3 Extra Large'];
    const PRICE_TYPE = ['Length', 'Size', 'Weight', 'Dozen', 'Each'];
    const UNIT_TYPE = ['Imperial' , 'Metric'];

    protected $fillable = ['name', 'price_type', 'price', 'unit_type', 'size', 'length', 'width', 'height', 'weight'];

    
    public function estimated_materials(){
        return $this->belongsToMany(EstimatedMaterial::class, 'estimated_materials');
    }

}
