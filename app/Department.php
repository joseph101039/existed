<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';
    protected $primaryKey = 'departmentId';
    public $timestamps = false;

    public function employees() {
        return $this->hasMany(\App\Employee::class, 'employeeId');
    }
}
