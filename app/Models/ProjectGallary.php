<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGallary extends Model
{
    use HasFactory;

    protected $table = 'project_gallaries';

    protected $fillable = 
    [
        'project_id', 'image'
    ];

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id');
    }
}
