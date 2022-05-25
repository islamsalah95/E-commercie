<?php
namespace App\Models;


use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewer extends Model
{
    use HasFactory;
    protected $table="viewers";

    protected $fillable = [
        'id',
        'name',
        'viewers',
    ];

    protected $timestamp ="false";


}


