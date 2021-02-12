<?php


use NepAudioLanguage\AudioLanguageDictionaries;
use PHPUnit\Framework\TestCase;

class AudioLanguageDictionariesTest extends TestCase
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
}
