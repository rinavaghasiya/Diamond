<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chocolate extends Model
{
    use HasFactory;
    public $table = 'chocolates';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
