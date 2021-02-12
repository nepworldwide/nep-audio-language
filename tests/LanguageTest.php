<?php


use NepAudioLanguage\AudioLanguage;
use NepAudioLanguage\AudioLanguageDictionaries;
use PHPUnit\Framework\TestCase;


class LanguageTest extends TestCase
{
    public function lister()
    {
        $dictionary = new AudioLanguageDictionaries();
        $dictionary->nameFromKey;
        $dictionary->key_iso_639_1;
        $dictionary->key_iso_639_2_B;
        $dictionary->key_iso_639_3;
        $dictionary->listIsoDashOne();
        $dictionary->listIsoDashThree();
        $dictionary->resolve();
    }
    public function testShouldReturnLanguageListOfIsoDashThree()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertInstanceOf('NepAudioLanguage\AudioLanguageDictionaries', $dictionary);
        $list = $dictionary->listIsoDashThree();
        $this->assertIsArray($list);
        $this->assertArrayHasKey('English', $list);
        $this->assertArrayNotHasKey('Engelsk', $list);
    }

    public function testShouldReturnLanguageListOfIsoDashOne()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertInstanceOf('NepAudioLanguage\AudioLanguageDictionaries', $dictionary);
        $list = $dictionary->listIsoDashOne();
        $this->assertIsArray($list);
        $this->assertArrayHasKey('English', $list);
        $this->assertArrayNotHasKey('Engelsk', $list);
    }

    public function testResolveTwoCharCode()
    {
        $dictionary = new AudioLanguageDictionaries();
        $resolved = $dictionary->resolve('en');
        $this->assertEquals('en', $resolved);
    }

    public function testKeyDefault()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertEquals('ud', $dictionary->key_default);
        $this->assertNotEquals('uu', $dictionary->key_default);
    }

    public function testDictDashThree()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertIsArray($dictionary->key_iso_639_3);

    }

    public function testDictDashTwo()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertIsArray($dictionary->key_iso_639_2_B);
    }

    public function testDictDashOne()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertIsArray($dictionary->key_iso_639_1);
    }

    public function testDictNameFromKey()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertIsArray($dictionary->nameFromKey);
    }

    public function testShouldReturnLanguage()
    {
        $result = [
            "name"=> "English",
            "iso_639_1"=> "en",
            "iso_639_3"=> "eng"
        ];
        $language = new AudioLanguage('eng');
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
