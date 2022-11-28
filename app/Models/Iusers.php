<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iusers extends Model
{
    use HasFactory;

    protected $table = 'iusers';
    protected $id = 'userID';


    protected $fillable = [
        'email',
        'password',
        'userType',
        'phonenum',
    ];
}
