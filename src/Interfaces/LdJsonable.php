<?php 

namespace Zenapply\Common\Interfaces;

interface LdJsonable
{
    /**
     * Returns Schema.org LdJson string
     *
     * @return string
     */
    public function toLdJson();
}