<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 14/08/2020
 * Time: 13:24
 */

namespace NepAudioLanguage;

use NepAudioLanguage\AudioLanguageDictionaries;

class AudioLanguage
{
    public $name;

    public $iso639_1;

    public $iso639_3;


    public function __construct($code = null)
    {
        if ($code) {
            $this->createObject($code);
        } else {
            $this->createObject('und');
        }
    }

    public function createObject($code)
    {
        $dictionary = new AudioLanguageDictionaries();
        $alpha2 = $dictionary->resolve($code);
        $this->setIso639_1($alpha2);
        $this->setIso639_3($dictionary->key_iso_639_1[$alpha2]);
        $this->setName($dictionary->nameFromKey[$alpha2]);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setIso639_1($iso_1)
    {
        $this->iso639_1 = $iso_1;
    }

    public function getIso639_1()
    {
        return $this->iso639_1;
    }

    public function setIso639_3($iso_3)
    {
        $this->iso639_3 = $iso_3;
    }

    public function getIso639_3()
    {
        return $this->iso639_3;
    }

}
