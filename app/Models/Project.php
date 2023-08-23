<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'sub_content_ru',
        'sub_content_uz',
        'statistic_ru',
        'statistic_uz',
        'content_ru', 
        'content_uz'
    ];

    public function gallaries(): HasMany
    {
        return $this->hasMany(ProjectGallary::class, 'project_id', 'id');
    }
}
