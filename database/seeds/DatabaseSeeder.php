<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'jho@outlook.com',
            'password' => app('hash')->make('123456'),
            'api_token' => ''
        ]);
    }
}
