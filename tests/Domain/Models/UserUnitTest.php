<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 28/11/18
 * Time: 15:18
 */

namespace App\Tests\Domain\Models;


use App\Domain\Models\Interfaces\UserInterface;
use App\Domain\Models\User;
use PHPUnit\Framework\TestCase;

/**
 * Class UserUnitTest
 * @author Patrick BASSOUKISSA<patrickbassoukissa@gmail.com>
 */
final class UserUnitTest extends TestCase
{
    /**
     * @param string $username
     * @param string $email
     * @param string $password
     *
     * @dataProvider provideCredentials
     */
    public function testItImplementsInterface(string $username, string $email, string $password)
    {
        $user = new User($username, $email, $password);

        $this->assertInstanceOf(UserInterface::class, $user);

        $this->assertSame($user->getUsername(), $username);
        $this->assertSame($user->getEmail(), $email);
        $this->assertSame($user->getPassword(), $password);
    }

    /**
     * @return \Generator
     */
    public function provideCredentials()
    {
        yield array('toto', 'toto@domain.com', 'toto');
        yield array('tito', 'tito@domain.com', 'tito');
        yield array('toti', 'toti@domain.com', 'toti');
    }
}