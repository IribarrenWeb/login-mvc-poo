<?php 

	/**
	 * Model for users
	 */
	class User
	{
		private $name;
		private $username;
		private $email;
		private $password;
		private $id;
		private $date;
		private $privilegio;

		public function getName()
		{
		    return $this->name;
		}

		public function setName($name)
		{
		    $this->name = $name;
		    return $this;
		}

		public function getUsername()
		{
		    return $this->username;
		}

		public function setUserName($username)
		{
		    $this->username = $username;
		    return $this;
		}
		public function getEmail()
		{
		    return $this->email;
		}

		public function setEmail($email)
		{
		    $this->email = $email;
		    return $this;
		}
		public function getPassword()
		{
		    return $this->password;
		}

		public function setPassword($password)
		{
		    $this->password = $password;
		    return $this;
		}
		public function getId()
		{
		    return $this->id;
		}

		public function setId($id)
		{
		    $this->id = $id;
		    return $this;
		}

		public function getDate()
		{
		    return $this->date;
		}

		public function setDate($date)
		{
		    $this->date = $date;
		    return $this;
		}

		public function getPrivilegio()
		{
		    return $this->privilegio;
		}

		public function setPrivilegio($privilegio)
		{
		    $this->privilegio = $privilegio;
		    return $this;
		}
	}