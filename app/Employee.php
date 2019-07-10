<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employeeId';
    public $timestamps = false; 

    public function department() {
        return $this->hasOne(\App\Department::class, 'departmentId');
    }
}
