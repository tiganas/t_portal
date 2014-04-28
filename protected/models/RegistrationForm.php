<?php

class RegistrationForm extends CFormModel
{
	public $username;
	public $password;
        public $name;
        public $teatre_name;


	public function rules()
	{
		return array(
			array('username, password, name, teatre_name', 'required'),
                        array('teatre_name', 'length', 'max'=>18),
                        array('password', 'xmlAuthenticate'),
                        array('username', 'unique', 'className' => 'Users','attributeName' => 'username','message'=>'This Username is already in use'),
		);
	}
        
        
        public function xmlAuthenticate($attribute,$params)
	{
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'http://www.demobiffen.dk/api/api_film.asp?bio='.$this->username.'&apikey='.$this->password.'');
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_VERBOSE, '1');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml"));
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
            curl_setopt($ch, CURLOPT_TIMEOUT, 400); 
            $output = curl_exec($ch);
            if(strlen($output)>80)
            {
                return true;
            }
            else
            $this->addError('password','Wrong API login or password.');
	}

        
        
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username'=>'Your username',
                        'password'=>'Your password',
                        'name'=>'Your name',
                        'teatre_name'=>'Your teatre name',
		);
	}

	
	
}
