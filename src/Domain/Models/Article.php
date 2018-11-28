<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 26/11/18
 * Time: 14:20
 */

namespace App\Domain\Models;


class Article
{
    /**
     * @var string
     */
    private $content;

    /**
     * Article constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->content;
    }

}