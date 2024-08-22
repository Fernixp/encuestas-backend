<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'option_id',
        'result'
    ];

    public function option()
    {
        //pertenece a una encuesta 
        return $this->belongsTo(Option::class);
    }
}
