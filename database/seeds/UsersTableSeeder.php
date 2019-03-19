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
    $user = App\User::create([
            'name'=>'Damith JK',
            'email'=>'dspdamithse@gmail.com',
            'password'=>bcrypt('dsp2143240'),
            'admin'=>1
        ]);
        App\Profile::create([
            'user_id' => $user->id,
            'avatar'=>'uploads/avatar/avatar.png',
            'about'=>'describe yourself',
            'facebook'=>'http://facebook.com',
            'youtube'=>'http://youtube.com'
        ]);

    }
}
