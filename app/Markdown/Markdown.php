<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 15/12/19
 * Time: 下午3:48
 */

namespace App\Markdown;


class Markdown
{
    protected $parser;
    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }
    public function  markdown($text)
    {
        $html = $this->parser->makeHtml($text);
        return $html;
    }
}