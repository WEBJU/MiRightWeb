<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    use HasFactory;

    protected $fillable=['article_id','scenario'];

    public function article(){
      return $this->belongsTo(Articles::class,'id','article_id');
    }
}
