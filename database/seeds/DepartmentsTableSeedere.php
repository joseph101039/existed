<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeedere extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo('aa');
        DB::insert("insert into directory.departments values (1, 'Corporate')");
        DB::insert("insert into directory.departments values (2, 'Engineering')");
        DB::insert("insert into directory.departments values (3, 'Sales')");
        DB::insert("insert into directory.departments values (4, 'Marketing')");
        DB::insert("insert into directory.departments values (5, 'Accounting')");
    }
}
