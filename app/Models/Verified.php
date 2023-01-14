<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verified extends Model
{
    use HasFactory;

    protected $table = 'verifieds';
    protected $id = 'verifyID';


    protected $fillable = [
        'userID',
        'idPic',
        'idnumber',
        'name'
    ];
}
