<?php

namespace App\Models;

use Carbon\Carbon;
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

    /**
     * Get the expense's date formatted as dd/mm/yyyy.
     *
     * @return string
     */
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->format('d/m/Y');
    }
}
