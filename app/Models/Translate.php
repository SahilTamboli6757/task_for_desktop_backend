<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Translate extends Model
{
    /** @use HasFactory<\Database\Factories\TranslateFactory> */
    use HasFactory, SoftDeletes;

    protected $guarded  = ['id'];
}
