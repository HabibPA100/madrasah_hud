<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Donor extends Model
{
    use HasFactory;
    protected $table="donors";
    protected $fillable = ['donor_name', 'donor_type'];
}
