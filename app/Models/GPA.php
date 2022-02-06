<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPA extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'total_score', 'total_units'
    ];
    public function user () {
        $this->belongsTo(User::class);
    }

    public function score () {
        $gpa = $this->total_score / $this->total_units;
        return number_format((float)$gpa, 2, '.', ''); 

    }
}
