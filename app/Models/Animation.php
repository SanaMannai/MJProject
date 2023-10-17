<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animation extends Model
{
    use HasFactory;
    protected $table = 'animations';
    protected $primaryKey = 'id';
    protected $fillable = ['sportives', 'culture', 'sortie', 'arts', 'loisirs'];
}
