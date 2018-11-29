<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 28/11/18
 * Time: 15:30
 */

namespace App\Domain\Models;

use App\Domain\Models\Interfaces\UserInterface;

/**
 * Class User
 *
 * @author Patrick BASSOUKISSA
 */
class User implements UserInterface
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * User constructor.
     * @param string $username
     * @param string $email
     * @param string $password
     */
    public function __construct(
        string $username,
        string $email,
        string $password
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}