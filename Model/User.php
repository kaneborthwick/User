<?php
declare (strict_types = 1);

namespace Towersystems\User\Model;

use Towersystems\Resource\Model\AbstractResourceItem;
use Towersystems\Resource\Model\TimestampableTrait;

class User extends AbstractResourceItem implements UserInterface {
	use TimestampableTrait;

	/**
	 * @var string
	 */
	protected $username;

	/**
	 * @var string
	 */
	protected $password;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @var string
	 */
	protected $salt;

	/**
	 * @var string
	 */
	protected $plainPassword;

	/**
	 * @var \DateTime
	 */
	protected $lastLoginAt;

	public function __construct() {
		// $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
		$this->createdAt = new \DateTime();
	}

	/**
	 * @return string
	 */
	public function getUsername(): string {
		return $this->username;
	}

	/**
	 * @param string $username
	 */
	public function setUsername($username): void{
		$this->username = $username;
	}

	/**
	 * @return string
	 */
	public function getPassword():  ? string {
		return $this->password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword($password) : void{
		$this->password = $password;
	}

	/**
	 * @return string
	 */
	public function getEmail():  ? string {
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email) : void{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getSalt():  ? string {
		return $this->salt;
	}

	/**
	 * @return string
	 */
	public function getPlainPassword() :  ? string {
		return $this->plainPassword;
	}

	/**
	 * @param string $plainPassword
	 */
	public function setPlainPassword($plainPassword) : void{
		$this->plainPassword = $plainPassword;
	}

	/**
	 * @return \DateTime
	 */
	public function getLastLoginAt():  ? \DateTime {
		return $this->lastLoginAt;
	}

	/**
	 * @param \DateTime $lastLoginAt
	 */
	public function setLastLoginAt(\DateTime $lastLoginAt = null) : void{
		$this->lastLoginAt = $lastLoginAt;
	}
}