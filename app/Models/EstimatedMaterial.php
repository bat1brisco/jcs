<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
use App\Models\Estimation;


class EstimatedMaterial extends Model
{

    protected $fillable = ['material_id', 'estimation_id', 'price_estimation', 'quantity'];

    public function materials(){
        return $this->belongsToMany(Material::class, 'estimated_materials', 'material_id', 'estimation_id');
    }
    
    public function estimations(){
        return $this->belongsTo(Estimation::class);
    }


}
