<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'image',
    ];


    public function product(){
        return  $this->hasMany(Product::class,'category_id');

}

// public function image()
//     {
//         return $this->morphOne(File::class, 'file');
//     }
}
