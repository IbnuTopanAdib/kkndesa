<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable= ['judul','excerpt','body','slug', 'poster'];

    public function scopeFilter($query, array $filters){
        // if(isset($filters['search']) ? $filters['search']:false){
        //     return $query->where('judul','like','%'. $filters['search'] . '%')
        //           ->orWhere('body','like','%'. $filters['search'] . '%');
        // }
        $query->when(($filters['search']) ?? false, function($query, $search){
            return $query->where('judul','like','%'. $search . '%')
                  ->orWhere('body','like','%'. $search . '%');
        }); 
    }

}
