<?php 

namespace Zenapply\Common\Interfaces;

interface Credentials
{
    public function getClientId();
    public function getClientSecret();
    public function getAccountIdentifier();
}