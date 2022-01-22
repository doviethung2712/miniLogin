<?php

class Auth
{
    public $users;
    public $dataPath;

    public function __construct()
    {
        $this->dataPath = "data.json";
        $this->users = $this->loadData();
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->dataPath, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->dataPath);
        return json_decode($dataJson);
    }

    public function registration($request)
    {

        $infor = [
            "id" => $this->getId(),
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => $request["password"],
        ];
        $data = $this->users;
        $data[] = $infor;
        $this->saveData($data);
//        foreach ($this->users as $user) {
//
//            if ($user->email == $request['email']) {
//                echo "<script> alert(Đã Có Tài Khoản) </script>";
//            }
//            if ($user->email != $request['email']) {
//
//            }
//        }


    }

    public function login($request)
    {
        $email = $request["email"];
        $password = $request["password"];
        foreach ($this->users as $user) {
            if ($user->email == $email) {
                if ($user->password == $password) {
                    header("location:home.php");
                } else {
                    header("Location:login.php");
                }
            }
        }
    }

    public function getId()
    {
        if (empty($this->users)) {
            return 1;
        } else {
            $last = $this->users[count($this->users) - 1];
            return (int)$last->id + 1;
        }
    }


}