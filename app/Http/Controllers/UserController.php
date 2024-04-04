<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager-tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // Retrieving Single Models
        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstwhere('level_id', 1);
        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
            //     abort(404);
        // });
        
        // Not Found Exceptions
        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        
        // Retrieving Aggregrates
        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);            
        
        // Retreiving or Creating Models
        $user = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['username', 'level_id']);
        $user->wasChanged('nama');
        $user->wasChanged(['nama', 'level_id']);    
        dd($user->wasChanged(['nama', 'username']));
    
        return view('user', ['data' => $user]);
    }
}
