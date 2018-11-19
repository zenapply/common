<?php 

namespace Zenapply\Common\Interfaces;

interface Onboard
{
    public function getPositionId();
    public function getLocationId();
    public function getHiredDate();
    public function getHiredDateAsString();
    public function getEmployeeType();
    public function getExtraData();
    public function getPayType();
    public function getHrisCostCenter1();
    public function getHrisCostCenter2();
    public function getHrisCostCenter3();
    public function getHrisPositionId();
    public function getHrisLocationId();
}