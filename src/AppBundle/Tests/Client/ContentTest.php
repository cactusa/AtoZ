<?php

namespace AppBundle\Tests\Client;


use AppBundle\Client\Content;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testPerformRequest()
    {
        // Ideally this test would use a mack web service instead of a live one in order to be
        // able to return a reliable responce on every call.
        $content = new Content();
        $result = $content->performRequest('ibl.api.bbci.co.uk/ibl/v1/atoz/a/programmes?page=1');

        // Happy path
        $this->assertObjectHasAttribute('atoz_programmes', $result);
        $this->assertObjectHasAttribute('character', $result->atoz_programmes);
        $this->assertEquals('a', $result->atoz_programmes->character);
        $this->assertEquals(68, $result->atoz_programmes->count);
        $this->assertEquals(1, $result->atoz_programmes->page);
        $this->assertObjectHasAttribute('id', $result->atoz_programmes->elements[0]);

        // Unhappy path
        $badResult = $content->performRequest('ibl.api.bbci.co.uk/ibl/v1/atoz/aa/programmes?page=1');
        $this->assertObjectHasAttribute('atoz_programmes', $badResult);
        $this->assertObjectHasAttribute('character', $badResult->atoz_programmes);
        $this->assertEquals('aa', $badResult->atoz_programmes->character);
        $this->assertEquals(0, $badResult->atoz_programmes->count);
        $this->assertEquals(1, $badResult->atoz_programmes->page);
        $this->assertEmpty($badResult->atoz_programmes->elements);
    }

    public function testBuildUrl()
    {
        $content = new Content();
        $result = $content->buildUrl('a', 1);

        $this->assertEquals('ibl.api.bbci.co.uk/ibl/v1/atoz/a/programmes?page=1&per_page=20', $result);
    }

    public function testGetProgrammeList()
    {
        $content = new Content();

        // Happy path
        $result = $content->getProgrammeList('a', 1);
        $this->assertArrayHasKey('Abadas',$result);
        $this->assertArrayHasKey('pages',$result);
        $this->assertEquals(4, $result['pages']);
        $expect = array(
                'small' => 'http://ichef.bbci.co.uk/images/ic/192x108/p017mqg6.jpg',
                'medium' => 'http://ichef.bbci.co.uk/images/ic/406x228/p017mqg6.jpg',
                'large' => 'http://ichef.bbci.co.uk/images/ic/560x315/p017mqg6.jpg',
            );
        $this->assertEquals($expect, $result['Abadas']);

        // Unhappy path
        $badResult = $content->getProgrammeList('aa', 1);
        $this->assertEquals(false, $badResult);
    }

    public function testGenerateImageUrls()
    {
        $content = new Content();
        $result = $content->generateImageUrls('http://example.url/{recipe}/image.png');
        $expected['small'] = 'http://example.url/192x108/image.png';
        $expected['medium'] = 'http://example.url/406x228/image.png';
        $expected['large'] = 'http://example.url/560x315/image.png';

        $this->assertEquals($expected, $result);
    }
}
