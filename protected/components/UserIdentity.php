<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
 //public $layout='//layouts/main';
	
 //public $layout='//layouts/main';
class UserIdentity extends CUserIdentity
{
	public $layout='//userlayout/main';
	public $display_name;
	/**
	
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$login=Login::model()->findByAttributes(array('email'=>$this->username));
	   if(!$login)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($login->password!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
		$this->setState('dname', $login->display_name);
		$browser=$_SERVER['HTTP_USER_AGENT'];
		$ip=$_SERVER['REMOTE_ADDR'];
		
		$log = new userlog;
		$log->browser_type=$browser;
		$log->ip_address=$ip;
     	$log->date_time=date('Y-m-d H:i');
	    $log->login_id=$login->id;
		$log->save();
	// 	CVarDumper::dump($log,10,1);die;
			$this->errorCode=self::ERROR_NONE;
			 
		
		}
		return !$this->errorCode;
				 
 	       
	}
}