<?php 

namespace Zenapply\Common\Interfaces;

interface CredentialsBasic
{
    public function getUserName();
    public function getPassword();
    public function getAccountIdentifier();
}