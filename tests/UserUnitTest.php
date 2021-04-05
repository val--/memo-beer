<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserUnitTest extends TestCase
{
    public function testSomething(): void
    {
        $user = new User();
        $user->setEmail('test@test.com');
        // TODO unit tests on User entity
        $this->assertTrue($user->getEmail() === 'test@test.com');
    }
}
