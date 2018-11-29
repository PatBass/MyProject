<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 28/11/18
 * Time: 15:38
 */

namespace App\Domain\Models\Interfaces;

/**
 * Interface UserInterface
 *
 * @author Patrick BASSOUKISSA
 */
interface UserInterface
{
    /**
     * @return string
     */
    public function getUsername(): string;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getPassword(): string;
}