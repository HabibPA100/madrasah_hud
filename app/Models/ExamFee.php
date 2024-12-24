<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamFee extends Model
{
    use HasFactory;
    protected $table ="exam_fees";
    protected $fillable = [
        'amount',
        'exam_name',
        'transaction_number',
        'student_name',
        'class_name',
        'user_id',
    ];

    public function user()
        {
            return $this->belongsTo(User::class);
        }
}