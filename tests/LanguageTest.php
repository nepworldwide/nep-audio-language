<?php


use NepAudioLanguage\AudioLanguage;
use NepAudioLanguage\AudioLanguageDictionaries;
use PHPUnit\Framework\TestCase;


class LanguageTest extends TestCase
{
    /**
     * @coversNothing
     */
    public function testConsistencyInAudioLanguageDictionary()
    {
        $dict = new AudioLanguageDictionaries();
        $languageList = $dict->listIsoDashThree();
        foreach ($languageList as $listedLanguage  => $code )  {
            $language = new AudioLanguage($code);
            $this->assertEquals($code, $language->iso_639_3);
        }
    }
    /**
     * @coversNothing
     */
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
