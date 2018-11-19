<?php
declare (strict_types = 1);

namespace Towersystems\User\Model;

use Towersystems\Resource\Model\TimestampableInterface;

interface UserInterface extends TimestampableInterface {

	/**
	 * @return string
	 */
	public function getUsername(): string;

	/**
	 * @param string $username
	 */
	public function setUsername($username): void;

	/**
	 * @return string
	 */
	public function getPassword():  ? string;

	/**
	 * @param string $password
	 */
	public function setPassword($password) : void;

	/**
	 * @return string
	 */
	public function getEmail():  ? string;

	/**
	 * @param string $email
	 */
	public function setEmail($email) : void;

	/**
	 * @return string
	 */
	public function getSalt():  ? string;

	/**
	 * @return string
	 */
	public function getPlainPassword() :  ? string;

	/**
	 * @param string $plainPassword
	 */
	public function setPlainPassword($plainPassword) : void;

	/**
	 * @return \DateTime
	 */
	public function getLastLoginAt():  ? \DateTime;

	/**
	 * @param \DateTime $lastLoginAt
	 */
	public function setLastLoginAt(\DateTime $lastLoginAt = null) : void;
}