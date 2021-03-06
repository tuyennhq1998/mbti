<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable=[
        'name',
        'nickname',
        'overview',
        'advantages',
        'weakness',
        'suitable_jobs',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey='character_id';
}
