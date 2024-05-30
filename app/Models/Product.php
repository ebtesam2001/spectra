<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image',
        'category_id'
    ];


    public function Catrgory()
    {
        return  $this->belongsTo(Category::class, 'category_id');
    }
}
