<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'expenses';

    protected $fillable = [
        'name', 'amount', 'category', 'date', 'description'
    ];
}
