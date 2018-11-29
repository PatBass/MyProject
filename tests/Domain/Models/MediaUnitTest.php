<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 29/11/18
 * Time: 12:08
 */

namespace App\Tests\Domain\Models;


use App\Domain\Models\Interfaces\MediaInterface;
use App\Domain\Models\Media;
use PHPUnit\Framework\TestCase;

final class MediaUnitTest extends TestCase
{
    public function testItImplementsInterfaces()
    {
        $media = new Media();

        $this->assertInstanceOf(MediaInterface::class, $media);
    }
}