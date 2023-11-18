<?php

namespace Src\factory_pattern;

interface Connector 
{
    public function logIn();
    
    public function logOut();

    public function createPost($content);
}
