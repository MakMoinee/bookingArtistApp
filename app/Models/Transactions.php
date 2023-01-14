<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $id = 'transID';


    protected $fillable = [
        'transID',
        'eventID',
        'reference',
        'phoneNum',
    ];
}
