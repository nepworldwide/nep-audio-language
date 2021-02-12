<?php

use PHPUnit\Framework\TestCase;
use NepAudioLanguage\AudioLanguage;

class AudioLanguageTest extends TestCase
{
    public function testInstanceSuccess()
    {
        $al = new AudioLanguage('nor');
        $this->assertInstanceOf('NepAudioLanguage\AudioLanguage', $al);
    }

    public function testNameSettersAndGettersSuccess()
    {
        $al = new AudioLanguage();
        $al->setName('name');
        $this->assertEquals('name', $al->getName());
    }

    public function testNameSettersAndGettersFails()
    {
        $al = new AudioLanguage();
        $al->setName('name');
        $this->assertNotEquals('namn', $al->getName());
    }

    public function testDashOneSettersAndGettersSuccess()
    {
        $al = new AudioLanguage();
        $al->setIso_639_1('en');
        $this->assertEquals('en', $al->getIso_639_1());
    }

    public function testDashOneSettersAndGettersFails()
    {
        $al = new AudioLanguage();
        $al->setIso_639_1('en');
        $this->assertNotEquals('sv', $al->getIso_639_1());
    }

    public function testDashThreeSettersAndGettersSuccess()
    {
        $al = new AudioLanguage();
        $al->setIso_639_3('eng');
        $this->assertEquals('eng', $al->getIso_639_3());
    }

    public function testDashThreeSettersAndGettersFails()
    {
        $al = new AudioLanguage();
        $al->setIso_639_1('eng');
        $this->assertNotEquals('nor', $al->getIso_639_1());
    }

    public function testCreateObjectSuccess()
    {
        $al = new AudioLanguage();
        $al->createObject('eng');
        $this->assertEquals('eng', $al->getIso_639_3());
        $this->assertEquals('en', $al->getIso_639_1());
        $this->assertEquals('English', $al->getName());
    }

    public function testCreateObjectDefault()
    {
        $al = new AudioLanguage();
        $al->createObject('zgr');
        $this->assertEquals('und', $al->getIso_639_3());
        $this->assertEquals('ud', $al->getIso_639_1());
        $this->assertEquals('Undetermined', $al->getName());
    }

    public function testCreateObjectFails()
    {
        $al = new AudioLanguage();
        $al->createObject('nor');
        $this->assertNotEquals('und', $al->getIso_639_3());
        $this->assertNotEquals('ud', $al->getIso_639_1());
        $this->assertNotEquals('Undetermined', $al->getName());
    }

    public function testJsonSerialize()
    {

        $al =  new AudioLanguage('eng');
        $array =  [
            'name' => $al->getName(),
            'iso_639_1' => $al->getIso_639_1(),
            'iso_639_3' => $al->getIso_639_3(),
        ];
        $json = $al->jsonSerialize();
        $this->assertJsonStringEqualsJsonString(json_encode($array), json_encode($json));
    }
}
