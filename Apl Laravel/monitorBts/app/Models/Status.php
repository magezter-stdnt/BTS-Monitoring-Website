<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function btslist(){
        return $this->belongsTo(Btslist::class);
    }
    public function survey(){
        return $this->belongsTo(Survey::class);
    }
}