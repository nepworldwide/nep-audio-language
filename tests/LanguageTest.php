<?php


use NepAudioLanguage\AudioLanguage;
use NepAudioLanguage\AudioLanguageDictionaries;
use PHPUnit\Framework\TestCase;


class LanguageTest extends TestCase
{
    public function testShouldReturnLanguage()
    {
        $result = [
            "name"=> "English",
            "iso_639_1"=> "en",
            "iso_639_3"=> "eng"
        ];
        $language = new AudioLanguage('eng');
        $language->
        $this->assertJson(json_encode($language));
        $this->assertJsonStringEqualsJsonString(json_encode($result), json_encode($language));

    }

    public function testShouldReturnDefaultLanguage()
    {
        $result = [
            "name" => "Undetermined",
            "iso_639_1" => "ud",
            "iso_639_3" => "und"
        ];
        $language = new AudioLanguage('opr');
        $this->assertJson(json_encode($language));
        $this->assertJsonStringEqualsJsonString(json_encode($result), json_encode($language));
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

    public function testConsistencyInAudioLanguageFromDashOne()
    {
        $dict = new AudioLanguageDictionaries();
        $languageList = $dict->listIsoDashOne();
        foreach ($languageList as $listedLanguage  => $code )  {
            $language = new AudioLanguage($code);
            $this->assertEquals($code, $language->iso_639_1);
        }
    }
}
