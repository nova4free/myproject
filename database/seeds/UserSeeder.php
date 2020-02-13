<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use App\Enterprise;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Tharinda Rodrigo',
                'email' => 'tharindarodrigo@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Udam Liyanage',
                'email' => 'udam1998@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Rajitha De Silva',
                'email' => 'desilvaorm@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],

        ]);


        User::find([1,2,3])->each(function(User $user){
            $user->assignRole('super-admin');
        });

        factory(User::class, 30)->create()->each(function (User $user) {
            $user->assignRole('developer');
        });

        factory(User::class, 10)->create()->each(function (User $user) {
            $user->assignRole('enterprise-super-admin');
            $user->enterprises()->save(factory(Enterprise::class)->make());
        });


    }
}
