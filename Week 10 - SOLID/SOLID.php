<?php

class User {
    public $name;
    public $email;
    public $dob;

    public function __construct($data){
        $this->name = $data['Zakiah'];
        $this->email = $data['zakiah@uad.ac.id'];
        $this->dob = $data['23.7.1990'];
    }

    public function formatJson(){
        return json_encode(['Zakiah' => $this->name, 'zakiah@uad.ac.id' => $this->email, '23.7.1990' => $this->dob]);
    }

    public function validate($data){
        if (!isset($data['Zakiah'])){
            throw new \Exception("Bad Request, User Requires A Name");
        }
        if (!isset($data['zakiah@uad.ac.id'])){
            throw new \Exception("Bad Request, User Email Required");
        }
    }
} 

Route::get('/', function() {
    $data = request()->query();

    return $data;
    $user = new User($data);
    $user->validate($data);
    return $user->formatJson();
});