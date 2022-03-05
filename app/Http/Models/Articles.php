<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable=['article_number','article_title','article_cover','article_category'];

    //provisions
    public function provisions(){
      return $this->hasMany(Provision::class,'article_id','id');
    }
    //content
    public function contents(){
      return $this->hasMany(Content::class,'article_id','id');
    }
    //interpretations
    public function interpretations(){
      return $this->hasMany(Interpretation::class,'article_id','id');
    }
    //scenarios
    public function scenarios(){
      return $this->hasMany(Scenario::class,'article_id','id');
    }
    //remedie
    public function remedies(){
      return $this->hasMany(Remedie::class,'article_id','id');
    }
}
