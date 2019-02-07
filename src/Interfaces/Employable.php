<?php 

namespace Zenapply\Common\Interfaces;

interface Employable
{
    public function getApplicantId();
    public function getEmployeeId();
    public function getEmail();
    public function getUsername();
    public function getPhone();
    public function getFirstName();
    public function getLastName();
    public function getAddressLine1();
    public function getAddressLine2();
    public function getCity();
    public function getState();
    public function getZip();
}