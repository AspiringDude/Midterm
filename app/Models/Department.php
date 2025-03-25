<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'department_id';
    public $incrementing = false;
    protected $keyType = 'integer';
    
    protected $fillable = ['department_id', 'college_id', 'department_name', 'department_code', 'is_active'];

    public function college()
    {
        return $this->belongsTo(College::class, 'college_id', 'college_id');
    }
}