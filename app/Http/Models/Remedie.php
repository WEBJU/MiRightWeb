<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedie extends Model
{
    use HasFactory;
    protected $fillable=['article_id','remedy'];
    public function article(){
      return $this->belongsTo(Articles::class);
    }
}
