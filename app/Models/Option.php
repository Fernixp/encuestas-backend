<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'option_text'
    ];

    public function question()
    {
        //pertenece a una pregunta
        return $this->belongsTo(Question::class);
    }

}
