<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];
    const CATEGORIES = ['اكشن', 'دراما', 'كوميدي', 'رومانسي', 'رعب'];
    use HasFactory;
}
