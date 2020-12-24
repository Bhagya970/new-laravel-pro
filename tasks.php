<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Facades\DB;
 use\App\Models\User;


class tasks extends Model
{
    use HasFactory;
    protected $table = "tasks";
    protected $fillable = [
        'taskdescription',
        'user_id',
        
    ];
    public function users()
{
    return $this->belongsTo('App\Models\User', 'user_id', 'id');
}
}
