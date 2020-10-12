<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'name',
        'lastName',
        'motherLastName',
        'phone',
        'role,'
    ];

    public function exams(){
        // Primero va la clase, la llave foranea y la llave primaria correspondiente al modelo
        return $this->hasMany(Exam::class, 'idStudent', 'idStudent');
    }

}
