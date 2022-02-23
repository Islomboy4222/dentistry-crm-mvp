<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Patient;

class Treatment extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'treatments';

    public $fillable = [
        'patient_id',
        'tooth_position',
        'treated_id'
    ];

    public function patients()
    {
        return $this->belongsTo(Patient::class , 'id', 'patient_id');
    }

    public static $TYPE = [
        '1' => 'Plonba',
        '2' => 'Kanal plonba',
        '3' => 'Protes',
        '4' => 'Kolonka',
    ];

    public function getTypeStringAttribute()
    {
        return self::$TYPE[$this->treated_id];
    }
}
