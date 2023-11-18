<?php

namespace Src\factory_pattern;

abstract class SocialNetworkPoster 
{
    abstract public function getSocialNetwork();

    public function post($content): void
    {
        $network = $this->getSocialNetwork();
        echo "\033[32m"; 
        $network->logIn();
        echo "\033[32m" .PHP_EOL; 
        $network->createPost($content);
        echo "\033[32m" .PHP_EOL; 
        $network->logOut();
    }
}
