<?php

namespace App\Models;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // static protected $slugColumnName = 'percorso';

    use Slugger;
}

