<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = "admin@codegym.vn";
        $user->password = bcrypt("123456");
        $user->name = "Admin";
        $user->save();

    }
}
