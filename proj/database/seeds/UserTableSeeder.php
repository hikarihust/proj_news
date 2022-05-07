<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id'          => 1,
                'username'    => 'admin',
                'email'       => 'admin@gmail.com',
                'fullname'    => 'admin quang',
                'password'    => Hash::make('123456'),
                'avatar'      => '1ctW8mj8vq.png',
                'level'       => 'admin',
                'created'     => '2014-12-10 08:55:35',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-04 14:47:14',
                'modified_by' => 'quangvu',
                'status'      => 'active',
            ],
            [
                'id'          => 2,
                'username'    => 'quangvu',
                'email'       => 'quangvu@gmail.com',
                'fullname'    => 'quang vu',
                'password'    => Hash::make('123456'),
                'avatar'      => 'IMiwonX9RE.png',
                'level'       => 'member',
                'created'     => '2014-12-10 08:55:35',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-04 14:47:14',
                'modified_by' => 'quangvu',
                'status'      => 'active',
            ],
            [
                'id'          => 3,
                'username'    => 'user123',
                'email'       => 'test123@gmail.com',
                'fullname'    => 'user test123',
                'password'    => Hash::make('123456'),
                'avatar'      => 'Hb1QSn1CL8.png',
                'level'       => 'member',
                'created'     => '2014-12-10 08:55:35',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-04 14:47:14',
                'modified_by' => 'quangvu',
                'status'      => 'inactive',
            ],
            [
                'id'          => 5,
                'username'    => 'user456',
                'email'       => 'user456@gmail.com',
                'fullname'    => 'user test456',
                'password'    => Hash::make('123456'),
                'avatar'      => 'J1uknUz0T6.png',
                'level'       => 'member',
                'created'     => '2014-12-10 08:55:35',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-04 14:47:14',
                'modified_by' => 'quangvu',
                'status'      => 'inactive',
            ],
        ];

        foreach ($user_list as $user){
            if (!DB::table('users')->where('username', $user['username'])->exists()){
                DB::table('users')->insert($user);
            }
        }
    }
}
