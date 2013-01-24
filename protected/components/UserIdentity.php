<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
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
		/*
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);*/
		     $usuario = Usuario::model();
                $user = $usuario->find('usuario = "'.$this->username.'"');
                #Yii::app()->clientScript->registerScript('test', 'alert("'.$user->usuario.'");', 4);
		if($usuario->count('usuario = "'.$this->username.'"') == 0){
			$this->errorCode=self::ERROR_USERNAME_INVALID;
			#Yii::app()->clientScript->registerScript('test', 'alert("Error");', 4);
		}
		else if($user->password != sha1($this->password)){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
			#Yii::app()->clientScript->registerScript('test', 'alert("Error Dos");', 4);
		}
		else {
                        $this->_id=$usuario->id_usuario;
			$this->setState('usuario', $usuario->usuario);
                        $this->setState('id', $usuario->id_usuario);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}