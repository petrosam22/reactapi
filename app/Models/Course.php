<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content',
        'photo',
        'user_id',
    ];


    public function users(){
        return $this->hasMany(User::class);
    }
}
