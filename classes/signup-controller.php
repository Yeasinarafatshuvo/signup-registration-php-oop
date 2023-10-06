<?php 

class signupcontroller extends Signup{

    private $uid;
    private $email;
    private $password;
    private $pwdrepeat;


    public function __construct($uid, $email, $password, $pwdrepeat)
    {
        $this->uid = $uid;
        $this->email = $email;
        $this->password = $password;
        $this->pwdrepeat = $pwdrepeat;
        
    }

    public function signupUser(){
        if($this->emptyInput() == false)
        {
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        if($this->invalidUid() == false)
        {
            header("location: ../index.php?error=invalidUid");
            exit();
        }

        
        if($this->invalidemail() == false)
        {
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        if($this->passMatch() == false)
        {
            header("location: ../index.php?error=passMatch");
            exit();
        }



    }


    private function emptyInput()
    {
        $result = false;

        if (empty($this->uid) || empty($this->email) || empty($this->password) || empty($this->pwdrepeat)) {
            
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid()
    {
        $result = false;

        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    private function invalidemail()
    {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else{
            $result = true;
        }

        return $result;
    }

    private function passMatch()
    {
        $result = false;
        
        if($this->password !== $this->pwdrepeat)
        {
            $result = false;
        }else{
            $result = true;
        }


        return $result;

    }

    public function uidTakenCheck()
    {
        $result = false;

        if($this->checkUser($this->uid, $this->email)){
                $result = false;
        }else{
            $result = true;
        }

        return $result;
    }






}



?>