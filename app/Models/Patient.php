<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Treatment;


class Patient extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'patients';

    public $fillable = [
                        'reg_user_id', 
                        'first_name', 
                        'last_name', 
                        'middle_name', 
                        'birth_day',
                        'phone_number'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'reg_user_id', 'id');
    }

    public function treatment()
    {
        return $this->hasMany(Treatment::class, 'patient_id', 'id');
    }
}
