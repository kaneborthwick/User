<?php

declare (strict_types = 1);

namespace Towersystems\User\Processor;

use Towersystems\User\Model\UserInterface;

interface UserProcessorInterface {

	/**
	 * @param UserInterface $user
	 */
	public function process(UserInterface $user);
}