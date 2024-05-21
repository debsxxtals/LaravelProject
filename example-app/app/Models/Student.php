<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'studentid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'studentid',
        'name_',
        'age',
        'address',
        'contactnumber',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'studentid', 'studentid');
    }
}
