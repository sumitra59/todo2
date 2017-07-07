<?php

use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_type = new \App\UserType();
        $user_type->name = "Admin";
        $user_type->save();

        $user_type = new \App\UserType();
        $user_type->name = "User";
        $user_type->save();
    }
}
