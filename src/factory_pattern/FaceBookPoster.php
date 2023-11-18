<?php

namespace Src\factory_pattern;


use Src\factory_pattern\SocialNetworkPoster;

class FaceBookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password =   $password;
    }

    public function getSocialNetwork()
    {
        $connection = new FaceBookConnector($this->login, $this->password);
        return $connection;
    }
}