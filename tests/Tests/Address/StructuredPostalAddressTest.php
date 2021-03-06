<?php

namespace Consilience\Pain001\Tests\Address;

use Consilience\Pain001\Address\StructuredPostalAddress;
use Consilience\Pain001\Tests\TestCase;

/**
 * @coversDefaultClass \Consilience\Pain001\Address\StructuredPostalAddress
 */
class StructuredPostalAddressTest extends TestCase
{
    /**
     * @covers ::sanitize
     */
    public function testSanitize()
    {
        $this->assertInstanceOf(\Consilience\Pain001\Address\StructuredPostalAddress::class, StructuredPostalAddress::sanitize(
            'Dorfstrasse',
            '∅',
            'Pfaffenschlag bei Waidhofen an der Thaya',
            '3834',
            'AT'
        ));
    }
}
