<?php

namespace App\Models;

use App\Models\images;
use App\Models\Comments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title","content"];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function image()
    {
        return $this->hasOne(images::class);
    }
}
