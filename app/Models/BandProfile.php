<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandProfile extends Model
{
    use HasFactory;


    protected $table = 'band_profiles';
    protected $id = 'profileID';


    protected $fillable = [
        'userID',
        'bandSize',
        'reper',
        'address',
        'bandName',
        'bio',
        'artistType',
        'genres',
        'exp',
        'youtube',
        'bandPic',
        'verified'
    ];
}
