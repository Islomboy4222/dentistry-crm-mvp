<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\User;


class Patient extends Model
{
    use SoftDeletes;

    public $table = 'patients';

    public $fillable = [
                        'reg_user_id', 
                        'first_name', 
                        'last_name', 
                        'middle_name', 
                        'birth_day'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'reg_user_id', 'id');
    }
}
