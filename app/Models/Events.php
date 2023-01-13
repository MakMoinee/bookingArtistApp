<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $id = 'eventID';


    protected $fillable = [
        'artistID',
        'eventdate',
        'addinfo',
        'location',
        'fromTime',
        'toTime',
        'services',
    ];
}
