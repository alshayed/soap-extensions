<?php

namespace BSP\SoapExtensions;


class SoapDateTime extends \DateTime
{

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format('Y-m-d\TH:i:s');
    }

}