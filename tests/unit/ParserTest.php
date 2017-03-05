<?php

class ParserTest extends \PHPUnit_Framework_TestCase
{
    public function testGetXmlId()
    {
        $parser = new \App\Parser();

        $this->assertEquals(
            'kia/rio',
            $parser->getXmlId('/cars/kia/rio')
        );
        $this->assertEquals(
            'kia/rio',
            $parser->getXmlId('/cars/kia/rio/')
        );
        $this->assertEquals(
            'kia/rio',
            $parser->getXmlId('/cars/kia/rio?creditbtn=1642')
        );
    }

    public function testGetParentXmlId()
    {
        $parser = new \App\Parser();

        $this->assertEquals(
            'kia',
            $parser->getParentXmlId('/cars/kia/rio/')
        );
        $this->assertEquals(
            'kia',
            $parser->getParentXmlId('/cars/kia/rio')
        );
    }
}
