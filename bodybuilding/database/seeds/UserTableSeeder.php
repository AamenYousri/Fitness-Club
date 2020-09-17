<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();

        $u->name= 'Abdelrahman';
        $u->email= "abdelrahmansami@gmail.com";
        $u->password = bcrypt('abdelrahman1996');
        $u->save();

    }
}
