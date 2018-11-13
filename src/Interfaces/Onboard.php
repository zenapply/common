<?php 

namespace Zenapply\Common\Interfaces;

interface Onboard
{
    public function getPositionId();
    public function getLocationId();
    public function getHiredDate();
    public function getEmployeeType();
    public function getExtraData();
    public function getPayType();
    public function getCostCenter1();
    public function getCostCenter2();
    public function getCostCenter3();
}