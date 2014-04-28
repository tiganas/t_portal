<?php
class AtUserIdentity extends CUserIdentity
{
    private $_id;
    public function authenticate()
    {
        $user=Users::model()->findByAttributes(array('username'=>$this->username));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($this->password != $user->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->errorCode = self::ERROR_NONE;
            foreach ($user as $key => $value) 
            {
                $this->setState($key, $value);
                $this->_id = $user['idUser'];
            }
            //Yii::app()->user->setState('logged', 'admin');
            //var_dump(Yii::app()->user->getState($arg = 'idUser'));exit;
        }
        return !$this->errorCode;
    }
    
    public static function UserInfo($arg = 'idUser') 
    {
        return Yii::app()->user->getState($arg);
    }
    
    public function getId()
    {
        return $this->_id;
    }
}