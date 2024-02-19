<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
    protected $guarded=[];
    use HasFactory;


    public function getRouteKeyName()
    {
        return 'slug';
    }

public function user(){
    return $this->belongsTo(User::class);
}









}
