<?php


use NepAudioLanguage\AudioLanguage;
use NepAudioLanguage\AudioLanguageDictionaries;


class LanguageTest extends TestCase
{
    public function testShouldReturnLanguageList()
    {
        $this->get("language", []);
        $this->seeStatusCode(200);
    }

    public function testShouldReturnLanguage()
    {
        $this->get("language/eng", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'name',
            'iso_639_1',
            'iso_639_3'
        ]);
    }

    public function testShouldReturnDefaultLanguage()
    {
        $this->get("language/qpr", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'name',
            'iso_639_1',
            'iso_639_3'
        ]);
        $this->seeJsonEquals([
            "name" => "Undetermined",
            "iso_639_1" => "ud",
            "iso_639_3" => "und"
        ]);
    }

    public function testConsistencyInAudioLanguageDictionary()
    {
        $dict = new AudioLanguageDictionaries();
        $languageList = $dict->listIsoDashThree();
        foreach ($languageList as $listedLanguage  => $code )  {
            $language = new AudioLanguage($code);
            $this->assertEquals($code, $language->iso_639_3);
        }
    }
}
