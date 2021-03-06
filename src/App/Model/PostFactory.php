<?php
namespace App\Model;

use Interop\Container\ContainerInterface;
use Mni\FrontYAML\Bridge\CommonMark\CommonMarkParser;
use Mni\FrontYAML\Parser;

class PostFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new Post(
            new Parser(null, new CommonMarkParser())
        );
    }
}
