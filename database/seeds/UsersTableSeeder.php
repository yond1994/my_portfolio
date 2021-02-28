<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tests = array(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
            ]
        );

        foreach ($tests as $key) {
            DB::table('users')->insert($key);
        }
    }
}
