<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'image', 'comment'];
    
    /**
     * このレシピを所有するユーザ。（Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * このレシピが所有する材料。（Materialモデルとの関係を定義）
     */
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
    
    /**
     * このレシピが所有する手順。（Stepモデルとの関係を定義）
     */
    public function steps()
    {
        return $this->hasMany(Step::class);
    }
    
    /**
     * このレシピに関係するモデルの件数をロードする。
     */
    public function loadRelationshipCounts()
    {
        $this->loadCount(['materials', 'steps']);
    }
}
