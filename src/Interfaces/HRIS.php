<?php 

namespace Zenapply\Common\Interfaces;

interface HRIS
{
    public function hire(Employable $applicant, Job $job);
}