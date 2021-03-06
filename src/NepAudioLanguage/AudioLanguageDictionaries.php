<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 14/08/2020
 * Time: 13:22
 */

namespace NepAudioLanguage;


class AudioLanguageDictionaries
{
    /*
     * All returnables from key_iso_639_1
     * nameFromKey return name from iso 639-1 as key
     * iso 639 B and T (all in -3) are included for reference and lookup if Alpha 3 code
     * is not present in the 639-3 dictionary
     *
     * Method resolve return alpha2 (iso639_1) code from input
     * but defaults to UN, Undefined
     */
    public $key_default = 'ud';

    public $key_iso_639_1 = [
        'aa' => 'aar',
        'ab' => 'abk',
        'af' => 'afr',
        'ax' => 'ala',
        'al' => 'alb',
        'dz' => 'dzo',
        'as' => 'asm',
        'ad' => 'and',
        'ak' => 'aka',
        'ao' => 'ago',
        'ai' => 'aia',
        'aq' => 'ata',
        'ag' => 'atg',
        'ar' => 'ara',
        'am' => 'amh',
        'aw' => 'abw',
        'au' => 'aus',
        'at' => 'aut',
        'av' => 'ava',
        'ay' => 'aym',
        'az' => 'aze',
        'bs' => 'bos',
        'bh' => 'bih',
        'bd' => 'bgd',
        'bb' => 'brb',
        'by' => 'blr',
        'be' => 'bel',
        'bz' => 'blz',
        // 'bj' => 'ben',
        'bm' => 'bam',
        'bn' => 'ben',
        'bt' => 'btn',
        'bo' => 'bod',
        'ba' => 'bak',
        'bw' => 'bwa',
        'bv' => 'bvt',
        'br' => 'bre',
        'vg' => 'vgb',
        'io' => 'ido',
        // 'bn' => 'brn',
        'bg' => 'bul',
        'bf' => 'bfa',
        'bi' => 'bis',
        'cm' => 'cmr',
        'ca' => 'cat',
        'ce' => 'che',
        'cv' => 'chv',
        'ky' => 'kir',
        'cf' => 'caf',
        'td' => 'tcd',
        'cl' => 'chl',
        'cn' => 'chn',
        'cs' => 'ces',
        'hk' => 'hkg',
        'mo' => 'cnr',
        'cx' => 'cxr',
        'cc' => 'cck',
        'co' => 'cos',
        'kk' => 'kaz',
        'ks' => 'kas',
        'cg' => 'cog',
        'cd' => 'cod',
        'ck' => 'cok',
        'cr' => 'cre',
        'ci' => 'civ',
        'hr' => 'hrv',
        'cu' => 'chu',
        'cy' => 'cym',
        'cz' => 'cze',
        'da' => 'dan',
        'dk' => 'dnk',
        'dj' => 'dji',
        'dm' => 'dma',
        'do' => 'dom',
        'dv' => 'div',
        'ec' => 'ecu',
        'eg' => 'egy',
        'en' => 'eng',
        'el' => 'ell',
        'eo' => 'epo',
        'eu' => 'eus',
        'sv' => 'swe',
        'gq' => 'gnq',
        'er' => 'eri',
        'ee' => 'ewe',
        'et' => 'est',
        'fa' => 'fas',
        'ff' => 'ful',
        'fk' => 'flk',
        'fo' => 'fao',
        'fj' => 'fij',
        'fi' => 'fin',
        'fr' => 'fra',
        'fy' => 'fry',
        'gf' => 'guf',
        'pf' => 'pyf',
        'tf' => 'atf',
        'ga' => 'gle',
        'gm' => 'gmb',
        'ge' => 'geo',
        'de' => 'deu',
        'gh' => 'gha',
        'gi' => 'gib',
        'gr' => 'grc',
        'gl' => 'glg',
        'gd' => 'gla',
        'gp' => 'glp',
        'gu' => 'guj',
        'gt' => 'gtm',
        'gg' => 'ggy',
        'gn' => 'grn',
        'gv' => 'glv',
        'gw' => 'gnb',
        'gy' => 'guy',
        'ha' => 'hau',
        'he' => 'heb',
        'hi' => 'hin',
        'ht' => 'hat',
        'hm' => 'hmd',
        'ho' => 'hmo',
        'hy' => 'hye',
        'hz' => 'her',
        'va' => 'vat',
        'hn' => 'hnd',
        'hu' => 'hun',
        'is' => 'isl',
        'ia' => 'ina',
        'id' => 'ind',
        'ii' => 'iii',
        'ig' => 'ibo',
        'ik' => 'ipk',
        'ir' => 'irn',
        'iq' => 'irq',
        'iu' => 'iku',
        'ie' => 'ile',
        'im' => 'imn',
        'il' => 'isr',
        'it' => 'ita',
        'ja' => 'jpn',
        'jm' => 'jam',
        'jp' => 'jpn',
        'je' => 'jey',
        'jo' => 'jor',
        'jv' => 'jav',
        'ka' => 'kat',
        'kz' => 'kaz',
        'ke' => 'ken',
        'ki' => 'kik',
        'kj' => 'kua',
        'km' => 'khm',
        'ko' => 'kor',
        'kp' => 'prk',
        'kr' => 'kau',
        'ku' => 'kur',
        'kv' => 'kpv',
        'kw' => 'cor',
        'kg' => 'kgz',
        'kl' => 'kal',
        'kx' => 'yue',
        'la' => 'lat',
        'lg' => 'lug',
        'ln' => 'lin',
        'lo' => 'lao',
        'lv' => 'lav',
        'lb' => 'ltz',
        'ls' => 'lso',
        'lr' => 'lbr',
        'ly' => 'lby',
        'li' => 'lim',
        'lt' => 'lit',
        'lu' => 'lub',
        'mi' => 'mri',
        'mk' => 'mkd',
        'mg' => 'mlg',
        'mw' => 'mwi',
        'my' => 'mya',
        'mv' => 'mdv',
        'ml' => 'mal',
        'mt' => 'mlt',
        'mh' => 'mah',
        'mq' => 'mtq',
        'mu' => 'mus',
        'yt' => 'myt',
        'mx' => 'mex',
        'fm' => 'fsm',
        'md' => 'mda',
        'mc' => 'mco',
        'mn' => 'mon',
        'me' => 'mne',
        'mr' => 'mar',
        'ms' => 'msa',
        'ma' => 'mar',
        'mz' => 'moz',
        'mm' => 'mmr',
        'na' => 'nau',
        'nr' => 'nbl',
        'np' => 'npl',
        'nl' => 'nld',
        'an' => 'arg',
        'nc' => 'ncl',
        'nz' => 'nzl',
        'ni' => 'nic',
        'nd' => 'nde',
        'ne' => 'nep',
        'ng' => 'ndo',
        'nu' => 'niu',
        'nf' => 'nfk',
        'mp' => 'mnp',
        'no' => 'nor',
        'nb' => 'nob',
        'nn' => 'nno',
        'nv' => 'nav',
        'ny' => 'nya',
        'oc' => 'oci',
        'oj' => 'oji',
        'om' => 'orm',
        'or' => 'ori',
        'os' => 'oss',
        'pk' => 'pak',
        'pw' => 'plw',
        'ps' => 'pus',
        'pa' => 'pan',
        'pg' => 'png',
        'py' => 'pry',
        'pe' => 'per',
        'ph' => 'phl',
        'pi' => 'pli',
        'pn' => 'pcn',
        'pl' => 'pol',
        'pt' => 'por',
        'pr' => 'pri',
        'qa' => 'qat',
        'qu' => 'que',
        're' => 'reu',
        'rm' => 'roh',
        'rn' => 'run',
        'ro' => 'ron',
        'ru' => 'rus',
        'rw' => 'kin',
        'bl' => 'blm',
        'sh' => 'shn',
        'kn' => 'kan',
        'lc' => 'lca',
        'mf' => 'maf',
        'pm' => 'spm',
        'vc' => 'vct',
        'ws' => 'wsm',
        'sm' => 'smo',
        'sq' => 'sqi',
        'st' => 'sot',
        'su' => 'sun',
        'sa' => 'san',
        'sn' => 'sna',
        'rs' => 'srb',
        'sc' => 'srd',
        'sl' => 'slv',
        'sg' => 'sag',
        'sk' => 'slk',
        'si' => 'sin',
        'sb' => 'slb',
        'so' => 'som',
        'za' => 'zha',
        'gs' => 'sgs',
        'ss' => 'ssw',
        'es' => 'spa',
        'lk' => 'lka',
        'sd' => 'snd',
        'sr' => 'srp',
        'sj' => 'sjm',
        'sw' => 'swa',
        'sz' => 'gsw',
        'se' => 'sme',
        'ch' => 'cha',
        'sy' => 'syr',
        'ta' => 'tam',
        'te' => 'tel',
        'ti' => 'tir',
        'tw' => 'twi',
        'tj' => 'tjk',
        'tz' => 'tza',
        'th' => 'tha',
        'tl' => 'tgl',
        'tg' => 'tgk',
        'tk' => 'tuk',
        'to' => 'ton',
        'ts' => 'tso',
        'tt' => 'tat',
        'tn' => 'tsn',
        'tr' => 'tur',
        'tm' => 'tkm',
        'tc' => 'tca',
        'tv' => 'tuv',
        'ty' => 'tah',
        'ug' => 'uig',
        'ae' => 'ave',
        'gb' => 'gbr',
        'us' => 'usa',
        'uk' => 'ukr',
        'um' => 'umi',
        'ur' => 'urd',
        'uy' => 'ury',
        'uz' => 'uzb',
        'vu' => 'vut',
        've' => 'ven',
        'vn' => 'vnm',
        'vo' => 'vol',
        'vi' => 'vie',
        'wa' => 'wln',
        'wo' => 'wol',
        'wf' => 'wlf',
        'eh' => 'esh',
        'ry' => 'rom',
        'ye' => 'yem',
        'zh' => 'cmn',
        'yi' => 'yid',
        'yo' => 'yor',
        'zm' => 'zmb',
        'zu' => 'zul',
        'zw' => 'zwe',
        'zx' => 'zxx',
        'ud' => 'und',
        'xh' => 'xho'
    ];

    public $key_iso_639_2_B = [
        'abk' => 'ab',
        'aar' => 'aa',
        'afr' => 'af',
        'aka' => 'ak',
        'sqi' => 'sq',
        'amh' => 'am',
        'ara' => 'ar',
        'arg' => 'an',
        'hye' => 'hy',
        'asm' => 'as',
        'ava' => 'av',
        'ave' => 'ae',
        'aym' => 'ay',
        'aze' => 'az',
        'bam' => 'bm',
        'bak' => 'ba',
        'eus' => 'eu',
        'bel' => 'be',
        'ben' => 'bn',
        'bis' => 'bi',
        'bos' => 'bs',
        'bre' => 'br',
        'bul' => 'bg',
        'mya' => 'my',
        'cat' => 'ca',
        'cha' => 'ch',
        'che' => 'ce',
        'nya' => 'ny',
        'cmn' => 'zh',
        'chv' => 'cv',
        'cor' => 'kw',
        'cos' => 'co',
        'cre' => 'cr',
        'hrv' => 'hr',
        'ces' => 'cs',
        'dan' => 'da',
        'div' => 'dv',
        'dut' => 'nl',
        'dzo' => 'dz',
        'eng' => 'en',
        'epo' => 'eo',
        'est' => 'et',
        'ewe' => 'ee',
        'fao' => 'fo',
        'fij' => 'fj',
        'fin' => 'fi',
        'fre' => 'fr',
        'ful' => 'ff',
        'glg' => 'gl',
        'kat' => 'ka',
        'ger' => 'de',
        'ell' => 'el',
        'grn' => 'gn',
        'guj' => 'gu',
        'hat' => 'ht',
        'hau' => 'ha',
        'heb' => 'he',
        'her' => 'hz',
        'hin' => 'hi',
        'hmo' => 'ho',
        'hun' => 'hu',
        'ina' => 'ia',
        'ind' => 'id',
        'ile' => 'ie',
        'gle' => 'ga',
        'ibo' => 'ig',
        'ipk' => 'ik',
        'ido' => 'io',
        'ice' => 'is',
        'ita' => 'it',
        'iku' => 'iu',
        'jpn' => 'ja',
        'jav' => 'jv',
        'kal' => 'kl',
        'kan' => 'kn',
        'kor' => 'ko',
        'kas' => 'ks',
        'kaz' => 'kk',
        'khm' => 'km',
        'kik' => 'ki',
        'kin' => 'rw',
        'kir' => 'ky',
        'kpv' => 'kv',
        'kon' => 'kg',
        'kur' => 'ku',
        'kua' => 'kj',
        'lat' => 'la',
        'ltz' => 'lb',
        'lug' => 'lg',
        'lim' => 'li',
        'lin' => 'ln',
        'lao' => 'lo',
        'lit' => 'lt',
        'lub' => 'lu',
        'lav' => 'lv',
        'glv' => 'gv',
        'mac' => 'mk',
        'mlg' => 'mg',
        'msa' => 'ms',
        'mal' => 'ml',
        'mlt' => 'mt',
        'mri' => 'mi',
        'mar' => 'mr',
        'mah' => 'mh',
        'mon' => 'mn',
        'nau' => 'na',
        'nav' => 'nv',
        'nde' => 'nd',
        'nep' => 'ne',
        'ndo' => 'ng',
        'nob' => 'nb',
        'nno' => 'nn',
        'nor' => 'no',
        'iii' => 'ii',
        'nbl' => 'nr',
        'oci' => 'oc',
        'oji' => 'oj',
        'chu' => 'cu',
        'orm' => 'om',
        'ori' => 'or',
        'oss' => 'os',
        'pan' => 'pa',
        'pli' => 'pi',
        'fas' => 'fa',
        'pol' => 'pl',
        'pus' => 'ps',
        'por' => 'pt',
        'que' => 'qu',
        'roh' => 'rm',
        'rom' => 'ry',
        'run' => 'rn',
        'ron' => 'ro',
        'rus' => 'ru',
        'san' => 'sa',
        'srd' => 'sc',
        'snd' => 'sd',
        'sme' => 'se',
        'smo' => 'sm',
        'sag' => 'sg',
        'srp' => 'sr',
        'gla' => 'gd',
        'sna' => 'sn',
        'sin' => 'si',
        'slk' => 'sk',
        'slv' => 'sl',
        'som' => 'so',
        'sot' => 'st',
        'spa' => 'es',
        'sun' => 'su',
        'swa' => 'sw',
        'ssw' => 'ss',
        'swe' => 'sv',
        'tam' => 'ta',
        'tel' => 'te',
        'tgk' => 'tg',
        'tha' => 'th',
        'tir' => 'ti',
        'bod' => 'bo',
        'tuk' => 'tk',
        'tgl' => 'tl',
        'tsn' => 'tn',
        'ton' => 'to',
        'tur' => 'tr',
        'tso' => 'ts',
        'tat' => 'tt',
        'twi' => 'tw',
        'tah' => 'ty',
        'uig' => 'ug',
        'ukr' => 'uk',
        'urd' => 'ur',
        'uzb' => 'uz',
        'ven' => 've',
        'vie' => 'vi',
        'vol' => 'vo',
        'wln' => 'wa',
        'cym' => 'cy',
        'wol' => 'wo',
        'fry' => 'fy',
        'xho' => 'xh',
        'yid' => 'yi',
        'yor' => 'yo',
        'yue' => 'kx',
        'zha' => 'za',
        'zul' => 'zu',
        'und' => 'ud',
        'zxx' => 'zx'
    ];

    public $key_iso_639_3 = [
        'abk' => 'ab',
        'aar' => 'aa',
        'afr' => 'af',
        'aka' => 'ak',
        'sqi' => 'sq',
        'amh' => 'am',
        'ara' => 'ar',
        'arg' => 'an',
        'hye' => 'hy',
        'asm' => 'as',
        'ava' => 'av',
        'ave' => 'ae',
        'aym' => 'ay',
        'aze' => 'az',
        'bam' => 'bm',
        'bak' => 'ba',
        'eus' => 'eu',
        'bel' => 'be',
        'ben' => 'bn',
        'bih' => 'bh',
        'bis' => 'bi',
        'bos' => 'bs',
        'bre' => 'br',
        'bul' => 'bg',
        'mya' => 'my',
        'cat' => 'ca',
        'cha' => 'ch',
        'che' => 'ce',
        'nya' => 'ny',
        'chv' => 'cv',
        'cor' => 'kw',
        'cos' => 'co',
        'cre' => 'cr',
        'hrv' => 'hr',
        'ces' => 'cs',
        'dan' => 'da',
        'div' => 'dv',
        'nld' => 'nl',
        'dzo' => 'dz',
        'eng' => 'en',
        'epo' => 'eo',
        'est' => 'et',
        'ewe' => 'ee',
        'fao' => 'fo',
        'fij' => 'fj',
        'fin' => 'fi',
        'fra' => 'fr',
        'ful' => 'ff',
        'glg' => 'gl',
        'kat' => 'ka',
        'deu' => 'de',
        'ell' => 'el',
        'grn' => 'gn',
        'guj' => 'gu',
        'hat' => 'ht',
        'hau' => 'ha',
        'heb' => 'he',
        'her' => 'hz',
        'hin' => 'hi',
        'hmo' => 'ho',
        'hun' => 'hu',
        'ina' => 'ia',
        'ind' => 'id',
        'ile' => 'ie',
        'gle' => 'ga',
        'ibo' => 'ig',
        'ipk' => 'ik',
        'ido' => 'io',
        'isl' => 'is',
        'ita' => 'it',
        'iku' => 'iu',
        'jpn' => 'ja',
        'jav' => 'jv',
        'kal' => 'kl',
        'kan' => 'kn',
        'kau' => 'kr',
        'kas' => 'ks',
        'kaz' => 'kk',
        'khm' => 'km',
        'kik' => 'ki',
        'kin' => 'rw',
        'kir' => 'ky',
        'kpv' => 'kv',
        'kon' => 'kg',
        'kor' => 'ko',
        'kur' => 'ku',
        'kua' => 'kj',
        'lat' => 'la',
        'ltz' => 'lb',
        'lug' => 'lg',
        'lim' => 'li',
        'lin' => 'ln',
        'lao' => 'lo',
        'lit' => 'lt',
        'lub' => 'lu',
        'lav' => 'lv',
        'glv' => 'gv',
        'mkd' => 'mk',
        'mlg' => 'mg',
        'msa' => 'ms',
        'mal' => 'ml',
        'mlt' => 'mt',
        'mri' => 'mi',
        'mar' => 'mr',
        'mah' => 'mh',
        'mon' => 'mn',
        'nau' => 'na',
        'nav' => 'nv',
        'nde' => 'nd',
        'nep' => 'ne',
        'ndo' => 'ng',
        'nob' => 'nb',
        'nno' => 'nn',
        'nor' => 'no',
        'iii' => 'ii',
        'nbl' => 'nr',
        'oci' => 'oc',
        'oji' => 'oj',
        'chu' => 'cu',
        'orm' => 'om',
        'ori' => 'or',
        'oss' => 'os',
        'pan' => 'pa',
        'pli' => 'pi',
        'fas' => 'fa',
        'pol' => 'pl',
        'pus' => 'ps',
        'por' => 'pt',
        'que' => 'qu',
        'roh' => 'rm',
        'run' => 'rn',
        'ron' => 'ro',
        'rus' => 'ru',
        'san' => 'sa',
        'srd' => 'sc',
        'snd' => 'sd',
        'sme' => 'se',
        'smo' => 'sm',
        'sag' => 'sg',
        'srp' => 'sr',
        'gla' => 'gd',
        'sna' => 'sn',
        'sin' => 'si',
        'slk' => 'sk',
        'slv' => 'sl',
        'som' => 'so',
        'sot' => 'st',
        'spa' => 'es',
        'sun' => 'su',
        'swa' => 'sw',
        'ssw' => 'ss',
        'swe' => 'sv',
        'tam' => 'ta',
        'tel' => 'te',
        'tgk' => 'tg',
        'tha' => 'th',
        'tir' => 'ti',
        'bod' => 'bo',
        'tuk' => 'tk',
        'tgl' => 'tl',
        'tsn' => 'tn',
        'ton' => 'to',
        'tur' => 'tr',
        'tso' => 'ts',
        'tat' => 'tt',
        'twi' => 'tw',
        'tah' => 'ty',
        'uig' => 'ug',
        'ukr' => 'uk',
        'urd' => 'ur',
        'uzb' => 'uz',
        'ven' => 've',
        'vie' => 'vi',
        'vol' => 'vo',
        'wln' => 'wa',
        'cym' => 'cy',
        'wol' => 'wo',
        'fry' => 'fy',
        'xho' => 'xh',
        'yid' => 'yi',
        'yor' => 'yo',
        'zha' => 'za',
        'zul' => 'zu',
        'und' => 'ud',
        'zxx' => 'zx',
        // added  by uefa
        'yue' => 'kx', // exitst for Kantonese in 639-3
        'cmn' => 'zh', // Mandarin
        'cnr' => 'mo', // Montenegrin
        'rom' => 'ry', // romany Macrolanguage are we sure?
        'gsw' => 'sz', // Alemannic, Alsatian, Swiss German
    ];

    public $nameFromKey = [
        'ab' => 'Abkhazian',
        'aa' => 'Afar',
        'af' => 'Afrikaans',
        'ak' => 'Akan',
        'sq' => 'Albanian',
        'am' => 'Amharic',
        'ar' => 'Arabic',
        'an' => 'Aragonese',
        'hy' => 'Armenian',
        'as' => 'Assamese',
        'av' => 'Avaric',
        'ae' => 'Avestan',
        'ay' => 'Aymara',
        'az' => 'Azerbaijani',
        'bm' => 'Bambara',
        'ba' => 'Bashkir',
        'eu' => 'Basque',
        'be' => 'Belarusian',
        'bn' => 'Bengali',
        'bh' => 'Bihari languages',
        'bi' => 'Bislama',
        'bs' => 'Bosnian',
        'br' => 'Breton',
        'bg' => 'Bulgarian',
        'my' => 'Burmese',
        'ca' => 'Catalan',
        'ch' => 'Chamorro',
        'ce' => 'Chechen',
        'ny' => 'Chichewa',
        'zh' => 'Chinese (Mandarin)',
        'kx' => 'Chinese (Cantonese)',
        'cv' => 'Chuvash',
        'kw' => 'Cornish',
        'co' => 'Corsican',
        'cr' => 'Cree',
        'hr' => 'Croatian',
        'cs' => 'Czech',
        'da' => 'Danish',
        'de' => 'German',
        'dv' => 'Divehi',
        'nl' => 'Dutch',
        'dz' => 'Dzongkha',
        'en' => 'English',
        'eo' => 'Esperanto',
        'et' => 'Estonian',
        'ee' => 'Ewe',
        'fo' => 'Faroese',
        'fj' => 'Fijian',
        'fi' => 'Finnish',
        'fr' => 'French',
        'ff' => 'Fulah',
        'gl' => 'Galician',
        'ka' => 'Georgian',
        'el' => 'Greek',
        'gn' => 'Guarani',
        'gu' => 'Gujarati',
        'ht' => 'Haitian',
        'ha' => 'Hausa',
        'he' => 'Hebrew',
        'hz' => 'Herero',
        'hi' => 'Hindi',
        'ho' => 'Hiri Motu',
        'hu' => 'Hungarian',
        'ia' => 'Interlingua',
        'id' => 'Indonesian',
        'ie' => 'Interlingue',
        'ga' => 'Irish',
        'ig' => 'Igbo',
        'ik' => 'Inupiaq',
        'io' => 'Ido',
        'is' => 'Icelandic',
        'it' => 'Italian',
        'iu' => 'Inuktitut',
        'ja' => 'Japanese',
        'jv' => 'Javanese',
        'kl' => 'Greenlandic',
        'kn' => 'Kannada',
        'kr' => 'Kanuri',
        'ks' => 'Kashmiri',
        'kk' => 'Kazakh',
        'km' => 'Khmer',
        'ki' => 'Kikuyu',
        'rw' => 'Kinyarwanda',
        'ky' => 'Kirghiz',
        'kv' => 'Komi',
        'ko' => 'Korean',
        'ku' => 'Kurdish',
        'kj' => 'Kuanyama',
        'la' => 'Latin',
        'lb' => 'Luxembourgish',
        'lg' => 'Ganda',
        'li' => 'Limburgish',
        'ln' => 'Lingala',
        'lo' => 'Lao',
        'lt' => 'Lithuanian',
        'lu' => 'Luba-Katanga',
        'lv' => 'Latvian',
        'gv' => 'Manx',
        'mk' => 'Macedonian',
        'mg' => 'Malagasy',
        'ms' => 'Malay',
        'ml' => 'Malayalam',
        'mt' => 'Maltese',
        'mi' => 'Maori',
        'mr' => 'Marathi',
        'mh' => 'Marshallese',
        'mo' => 'Montenegrin',
        'mn' => 'Mongolian',
        'na' => 'Nauru',
        'nv' => 'Navajo',
        'nd' => 'Ndebele',
        'ne' => 'Nepali',
        'ng' => 'Ndonga',
        'nb' => 'Norwegian, Bokmål',
        'nn' => 'Norwegian, Nynorsk',
        'no' => 'Norwegian',
        'ii' => 'Sichuan Yi',
        'nr' => 'South Ndebele',
        'oc' => 'Occitan',
        'oj' => 'Ojibwa',
        'cu' => 'Church Slavic',
        'om' => 'Oromo',
        'or' => 'Oriya',
        'os' => 'Ossetian',
        'pa' => 'Punjabi',
        'pi' => 'Pali',
        'fa' => 'Persian',
        'pl' => 'Polish',
        'ps' => 'Pushto',
        'pt' => 'Portuguese',
        'qu' => 'Quechua',
        'rm' => 'Romansh',
        'rn' => 'Rundi',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'ry' => 'Romany',
        'sa' => 'Sanskrit',
        'sc' => 'Sardinian',
        'sd' => 'Sindhi',
        'se' => 'Northern Sami',
        'sm' => 'Samoan',
        'sg' => 'Sango',
        'sr' => 'Serbian',
        'gd' => 'Gaelic',
        'sn' => 'Shona',
        'si' => 'Sinhalese',
        'sk' => 'Slovak',
        'sl' => 'Slovenian',
        'so' => 'Somali',
        'st' => 'Sotho',
        'es' => 'Spanish',
        'su' => 'Sudanese',
        'sw' => 'Swahili',
        'ss' => 'Swasi',
        'sv' => 'Swedish',
        'sz' => 'Swiss German',
        'ta' => 'Tamil',
        'te' => 'Telugu',
        'tg' => 'Tajik',
        'th' => 'Thai',
        'ti' => 'Tigrinya',
        'bo' => 'Tibetan',
        'tk' => 'Turkmen',
        'tl' => 'Tagalog',
        'tn' => 'Tswana',
        'to' => 'Tonga',
        'tr' => 'Turkish',
        'ts' => 'Tsonga',
        'tt' => 'Tatar',
        'tw' => 'Twi',
        'ty' => 'Tahitian',
        'ug' => 'Uighur',
        'uk' => 'Ukrainian',
        'ur' => 'Urdu',
        'uz' => 'Uzbek',
        've' => 'Venda',
        'vi' => 'Vietnamese',
        'vo' => 'Volapük',
        'wa' => 'Waloon',
        'cy' => 'Welsh',
        'wo' => 'Wolof',
        'fy' => 'Western Frisian',
        'xh' => 'Xhosa',
        'yi' => 'Yiddish',
        'yo' => 'Yoruba',
        'za' => 'Zhuang',
        'zu' => 'Zulu',
        'zx' => 'Non-linguistic content',
        'ud' => 'Undetermined'
    ];

    /**
     * @param $code
     * @return false|int|mixed|string
     */
    public function resolve($code)
    {
        if ( strlen($code) === 2
            && array_key_exists($code, $this->key_iso_639_1)) {

            return $code;
        } elseif ( strlen($code) === 3
            && in_array($code, $this->key_iso_639_1)) {

            return array_search($code, $this->key_iso_639_1);
        } elseif ( strlen($code) === 3
            && array_key_exists($code, $this->key_iso_639_2_B)) {

            return $this->key_iso_639_2_B[$code];
        } elseif ( strlen($code) > 3
            && in_array($code, $this->nameFromKey)) {

            return array_search($code, $this->nameFromKey);
        } else {

            return $this->key_default;
        }
    }

    public function listIsoDashThree()
    {
        $list =  [];
        foreach ($this->nameFromKey as $key => $value)
        {
            $list[$value] = array_search($key, $this->key_iso_639_3);
        }
        return $list;
    }

    public function listIsoDashOne()
    {
        return array_flip($this->nameFromKey);
    }
}
