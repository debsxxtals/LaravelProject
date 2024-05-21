<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $primaryKey = 'courseid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'courseid',
        'studentid',
        'coursetitle',
        'coursedescription',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'studentid', 'studentid');
    }
}
