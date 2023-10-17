<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipe extends Model
{
    use HasFactory;
    protected $table = 'equipes';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'adress', 'téléphone'];
}
