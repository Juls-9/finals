<?php

    class User {

        public function log($user,$pass){
            $user = new userModel($user,$pass);
            $pv = $user->login();
            if($pv){
                return true;
            }
        }
        


    }