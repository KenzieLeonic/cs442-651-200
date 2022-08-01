<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; //trait = interface มีการ implement method แล้วเอาไปใช้เลย
    //eloquent ไม่ต้องบอกเรื่อง field ให้

    public function scopeAdvertise($query){
        return $query->where('Live_count','<',1000)
        -> where('view_count','>',70000);
    }
    public function scopePopular($query,$live_count,$view_count){
        return $query->where('live_count','>=',$live_count)
            ->where('view_count','>=',$view_count);
    }
    public function scopeFilterTitle($query,$search){
        return $query->where('title','LIKE',"%{$search}%"); //case insensitive
    }

}
