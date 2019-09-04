<?php

class Users {
    public function list($f3)
    {
        $users = $f3->get('DB')->exec('SELECT * FROM `user`');

        echo json_encode($users, JSON_PRETTY_PRINT);
    }

    public function create($f3)
    {
        $user = new DB\SQL\Mapper($f3->get('DB'), 'users');
        $user->name     = $f3->get('POST.name');
        $user->email     = $f3->get('POST.email');
        $user->password     = $f3->get('POST.password');
        $user->save();
        
        echo json_encode($user->cast(), JSON_PRETTY_PRINT);
    }
}