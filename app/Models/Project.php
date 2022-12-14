<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function detailsliders()
    {
        return $this->hasMany(Project_detail_slider::class);
    }
}
