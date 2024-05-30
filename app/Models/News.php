<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'news';
    protected $fillable = [
        'image',
        'name',
        'date',
        'description',
    ];



// public function image()
//     {
//         return $this->morphOne(File::class, 'file');
//     }
}