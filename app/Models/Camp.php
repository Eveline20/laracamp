<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SoftDelete;

class Camp extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['title', 'price'];
}
