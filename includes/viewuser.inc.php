<?php

class ViewUser extends User {

  

    protected function showAllUsers() {
        $datas = $this->getAllUsers();
        foreach ($datas as $data) {
            echo $data['user_email'];
            echo $data['user_pass'];
        }
    }
}