<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use lluminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use SoftDeletes;
}
