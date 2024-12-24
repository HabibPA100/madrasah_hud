<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Add_New_Annual_Account extends Model
{
    use HasFactory;

    protected $table = 'add__new__annual__accounts';
    protected $fillable = ['year_name','income','cost'];
}
