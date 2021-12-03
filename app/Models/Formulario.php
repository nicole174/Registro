<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    protected $table = 'formularios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'phone',
        'age',
        'escolaridad',
        'experiencia',
        'tipo_experiencia',
        'vacante',
        'path',
        'document_name',
        'id_user',
    ];

    protected $casts = [
        'datetime' => 'datetime',
    ];

    protected $attributes = [
        'tipo_experiencia' => 'No',
        'path' => 'hello',
        'document_name' => 'bye',
    ];

    public function User() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
