<?php

namespace Src\factory_pattern;

use Src\factory_pattern\Connector;

class FaceBookConnector implements Connector
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn()
    {
        echo "connecting to login API $this->login with $this->password";
    }

    public function createPost($content)
    {
        echo "created post $content";
    }

    public function logOut()
    {
        echo "log out API $this->login";
    }

}