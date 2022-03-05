<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provision extends Model
{
    use HasFactory;
    protected $fillable=['article_id','provision','conditions'];

    public function article(){
      return $this->belongsTo(Articles::class,'id','article_id');
    }
}
