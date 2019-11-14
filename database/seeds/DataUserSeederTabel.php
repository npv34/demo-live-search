<?php

use Illuminate\Database\Seeder;

class DataUserSeederTabel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'thanh';
        $user->email = 'than21h@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name = 'guest';
        $user->email = 'gue21st@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::GUEST;
        $user->save();

        $user = new \App\User();
        $user->name = 'thanh';
        $user->email = 'tha21nh@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name = 'guest';
        $user->email = 'gues32t@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::GUEST;
        $user->save();

        $user = new \App\User();
        $user->name = 'thanh';
        $user->email = 'than32h@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name = 'guest';
        $user->email = 'guestwew3@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::GUEST;
        $user->save();

        $user = new \App\User();
        $user->name = 'thanh';
        $user->email = 'thanh3@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name = 'guest';
        $user->email = 'guest3@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = \App\Http\Controllers\RoleConstant::GUEST;
        $user->save();
    }
}
