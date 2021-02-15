<?php


use NepAudioLanguage\AudioLanguageDictionaries;
use PHPUnit\Framework\TestCase;

class AudioLanguageDictionariesTest extends TestCase
{
    /**
     * $dictionary = new AudioLanguageDictionaries();
     * $dictionary->nameFromKey;
     * $dictionary->key_iso_639_1;
     * $dictionary->key_iso_639_2_B;
     * $dictionary->key_iso_639_3;
     * $dictionary->listIsoDashOne();
     * $dictionary->listIsoDashThree();
     * $dictionary->resolve();
     */


    /**
     * Test success $dictionary->listIsoDashThree();
     */
    public function testShouldReturnLanguageListOfIsoDashThreeSuccess()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertInstanceOf('NepAudioLanguage\AudioLanguageDictionaries', $dictionary);
        $list = $dictionary->listIsoDashThree();
        $this->assertIsArray($list);
        $this->assertArrayHasKey('English', $list);
        $this->assertArrayNotHasKey('Engelsk', $list);
    }

    /**
     * Test fails $dictionary->listIsoDashThree();
     */
    public function testShouldReturnLanguageListOfIsoDashThreeFail()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertInstanceOf('NepAudioLanguage\AudioLanguageDictionaries', $dictionary);
        $list = $dictionary->listIsoDashThree();
        $this->assertIsNotObject($list);
        $this->assertIsNotString($list);
    }

    /**
     * Test success $dictionary->listIsoDashOne();
     */
    public function testShouldReturnLanguageListOfIsoDashOneSuccess()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertInstanceOf('NepAudioLanguage\AudioLanguageDictionaries', $dictionary);
        $list = $dictionary->listIsoDashOne();
        $this->assertIsArray($list);
        $this->assertArrayHasKey('English', $list);
        $this->assertArrayNotHasKey('Engelsk', $list);
    }

    /**
     * Test fails $dictionary->listIsoDashOne();
     */
    public function testShouldReturnLanguageListOfIsoDashOneFails()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertInstanceOf('NepAudioLanguage\AudioLanguageDictionaries', $dictionary);
        $list = $dictionary->listIsoDashOne();
        $this->assertIsNotObject($list);
        $this->assertIsNotString($list);
    }

    public function testResolveTwoCharCodeSuccess()
    {
        $dictionary = new AudioLanguageDictionaries();
        $resolved = $dictionary->resolve('en');
        $this->assertEquals('en', $resolved);
    }

    public function testResolveTwoCharCodeFail()
    {
        $dictionary = new AudioLanguageDictionaries();
        $resolved = $dictionary->resolve('yy');
        $this->assertEquals('ud', $resolved);
    }

    public function testResolveThreeCharCodeSuccess()
    {
        $dictionary = new AudioLanguageDictionaries();
        $resolved = $dictionary->resolve('eng');
        $this->assertEquals('en', $resolved);
    }

    public function testResolveThreeCharCodeFail()
    {
        $dictionary = new AudioLanguageDictionaries();
        $resolved = $dictionary->resolve('yyx');
        $this->assertEquals('ud', $resolved);
    }

    public function testResolveName()
    {
        $dictionary = new AudioLanguageDictionaries();
        $resolved = $dictionary->resolve('English');
        $this->assertEquals('en', $resolved);
    }

    public function testResolveDefaults()
    {
        $dictionary = new AudioLanguageDictionaries();
        $resolved = $dictionary->resolve('Polsk');
        $this->assertEquals('ud', $resolved);
    }

    public function testProperties()
    {
        $dictionary = new AudioLanguageDictionaries();
        $this->assertEquals('ud', $dictionary->key_default);
        $this->assertNotEquals('uu', $dictionary->key_default);

        $this->assertIsArray($dictionary->key_iso_639_1);
        $this->assertIsNotString($dictionary->key_iso_639_1);

        $this->assertIsArray($dictionary->key_iso_639_2_B);
        $this->assertIsNotString($dictionary->key_iso_639_2_B);

        $this->assertIsArray($dictionary->key_iso_639_3);
        $this->assertIsNotString($dictionary->key_iso_639_3);

        $this->assertIsArray($dictionary->nameFromKey);
        $this->assertIsNotString($dictionary->nameFromKey);
    }
}
