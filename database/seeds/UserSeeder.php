<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Gabriel Ilochi',
            'email' => 'gabrielilochi@gmail.com',
            'email_verified_at' => now(),
            'email_verify_token' => \Illuminate\Support\Str::random(10),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);

        factory(\App\User::class, 5)->create();
    }
}
