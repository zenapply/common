<?php 

namespace Zenapply\Common\Interfaces;

interface Employable
{
    public function getEmail();
    public function getPhone();
    public function getFirstName();
    public function getLastName();
    public function getAddressLine1();
    public function getAddressLine2();
    public function getCity();
    public function getState();
    public function getZip();
}