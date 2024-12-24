<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TotalAmount extends Model
{
    use HasFactory;

    protected $table = 'total_amounts';
    protected $fillable = ['total_income','total_cost','total_debt'];
}
