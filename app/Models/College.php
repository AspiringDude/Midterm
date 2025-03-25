<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class College extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'college_id';
    public $incrementing = false;
    protected $keyType = 'integer';
    
    protected $fillable = ['college_id', 'college_name', 'college_code', 'is_active'];

    public function departments()
    {
        return $this->hasMany(Department::class, 'college_id', 'college_id');
    }
}
