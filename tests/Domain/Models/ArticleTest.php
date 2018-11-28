<?php


namespace App\Tests\Domain\Models;


use App\Domain\Models\Article;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class ArticleTest extends TestCase
{
    public function testConstructor()
    {
        $article = new Article('Toto');

        static::assertSame(
            'Toto',
            $article->getArticle()
        );
    }

}