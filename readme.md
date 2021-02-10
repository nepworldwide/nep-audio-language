# Audio Language

## Install

If you are starting a blank project from a clean composer.json
```angular2html

{
   "require":{
      "nepworldwide/nep-audio-language":"0.1"
   },
   "repositories":[
      {
         "type":"vcs",
         "url":"git@github.com:nepworldwide/nep-audio-language.git"
      }
   ]
}
```

Run
```angular2html
composer require nepworldwide/nep-audio-language
```
## Usage

#### Usage example
```php
use NepAudioLanguage\AudioLanguage;

// $code could be any ISO 639-1, ISO 639-2 or ISO 639-3 code
// ISO 639-2 might not be 100% for both the B and T range 
// unsupported will return as Undetermined
// if the input is the name like in the example below shoul be avoided 
// as the chance of error is high

$code = 'Swedish'; // or sv or swe

$language = new AudioLanguage($code);
var_dump(json_encode($language)); // or whatever


```
