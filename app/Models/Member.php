<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'details',
        'status',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

}
