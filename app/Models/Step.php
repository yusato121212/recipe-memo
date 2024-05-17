<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = ['step_number', 'description', 'image'];
    public $timestamps = false; // 不要なのでタイムスタンプを無効化
    
    /**
     * この材料を所有するレシピ。（Recipeモデルとの関係を定義）
     */
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
