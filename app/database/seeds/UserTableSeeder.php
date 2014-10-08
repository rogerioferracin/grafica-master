<?php

class UserTableSeeder extends Seeder
{
    public function run() {
        DB::table('users') -> delete();
        
        User::create(array(
            'name' => 'Rogerio Ferracin',
            'username' => 'ferracin',
            'password' => Hash::make('746663'),
            'email' => 'ferracin@ig.com.br',
            'phone' => '(12) 98854-2458',
            'profile' => '1',
            'active' => TRUE,
        ));
    }
}