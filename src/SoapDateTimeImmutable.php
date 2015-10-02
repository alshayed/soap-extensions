<?php

namespace BSP\SoapExtensions;


class SoapDateTimeImmutable extends \DateTimeImmutable
{

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format('Y-m-d\TH:i:s');
    }

}