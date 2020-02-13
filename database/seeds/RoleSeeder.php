<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Spatie\Permission\Models\Role::insert([
            ['name' => 'super-admin', 'guard_name' => 'web'],
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'enterprise-super-admin', 'guard_name' => 'web'],
            ['name' => 'enterprise-admin', 'guard_name' => 'web'],
            ['name' => 'enterprise-developer', 'guard_name' => 'web'],
            ['name' => 'developer', 'guard_name' => 'web'],
            ['name' => 'user', 'guard_name' => 'web']
        ]);
    }
}
