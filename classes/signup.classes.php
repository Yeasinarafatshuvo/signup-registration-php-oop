<?php

class Signup extends Dbh{

    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? or users_email = ?;');

        if($stmt->execute(array($uid, $email))){
            $stmt = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }

        $resultCheck = false;

        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }

        return $resultCheck;


    }

}

?>