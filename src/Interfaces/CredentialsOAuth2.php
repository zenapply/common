<?php 

namespace Zenapply\Common\Interfaces;

interface CredentialsOAuth2
{
    public function getClientId();
    public function getClientSecret();
    public function getAccountIdentifier();
}