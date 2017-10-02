<?php

namespace LasseRafn;

class StringScript
{
	CONST REGEX_COMMON              = '/\p{Common}/u';
	CONST REGEX_ARABIC              = '/\p{Arabic}/u';
	CONST REGEX_ARMENIAN            = '/\p{Armenian}/u';
	CONST REGEX_BENGALI             = '/\p{Bengali}/u';
	CONST REGEX_BOPOMOFO            = '/\p{Bopomofo}/u';
	CONST REGEX_BRAILLE             = '/\p{Braille}/u';
	CONST REGEX_BUHID               = '/\p{Buhid}/u';
	CONST REGEX_CANADIAN_ABORIGINAL = '/\p{Canadian_Aboriginal}/u';
	CONST REGEX_CHEROKEE            = '/\p{Cherokee}/u';
	CONST REGEX_CYRILLIC            = '/\p{Cyrillic}/u';
	CONST REGEX_DEVANAGARI          = '/\p{Devanagari}/u';
	CONST REGEX_ETHIOPIC            = '/\p{Ethiopic}/u';
	CONST REGEX_GEORGIAN            = '/\p{Georgian}/u';
	CONST REGEX_GREEK               = '/\p{Greek}/u';
	CONST REGEX_GUJARATI            = '/\p{Gujarati}/u';
	CONST REGEX_GURMUKHI            = '/\p{Gurmukhi}/u';
	CONST REGEX_HAN                 = '/\p{Han}/u';
	CONST REGEX_HANGUL              = '/\p{Hangul}/u';
	CONST REGEX_HANUNOO             = '/\p{Hanunoo}/u';
	CONST REGEX_HEBREW              = '/\p{Hebrew}/u';
	CONST REGEX_HIRAGANA            = '/\p{Hiragana}/u';
	CONST REGEX_INHERITED           = '/\p{Inherited}/u';
	CONST REGEX_KANNADA             = '/\p{Kannada}/u';
	CONST REGEX_KATAKANA            = '/\p{Katakana}/u';
	CONST REGEX_KHMER               = '/\p{Khmer}/u';
	CONST REGEX_LAO                 = '/\p{Lao}/u';
	CONST REGEX_LATIN               = '/\p{Latin}/u';
	CONST REGEX_LIMBU               = '/\p{Limbu}/u';
	CONST REGEX_MALAYALAM           = '/\p{Malayalam}/u';
	CONST REGEX_MONGOLIAN           = '/\p{Mongolian}/u';
	CONST REGEX_MYANMAR             = '/\p{Myanmar}/u';
	CONST REGEX_OGHAM               = '/\p{Ogham}/u';
	CONST REGEX_ORIYA               = '/\p{Oriya}/u';
	CONST REGEX_RUNIC               = '/\p{Runic}/u';
	CONST REGEX_SINHALA             = '/\p{Sinhala}/u';
	CONST REGEX_SYRIAC              = '/\p{Syriac}/u';
	CONST REGEX_TAGALOG             = '/\p{Tagalog}/u';
	CONST REGEX_TAGBANWA            = '/\p{Tagbanwa}/u';
	CONST REGEX_TAILE               = '/\p{TaiLe}/u';
	CONST REGEX_TAMIL               = '/\p{Tamil}/u';
	CONST REGEX_TELUGU              = '/\p{Telugu}/u';
	CONST REGEX_THAANA              = '/\p{Thaana}/u';
	CONST REGEX_THAI                = '/\p{Thai}/u';
	CONST REGEX_TIBETAN             = '/\p{Tibetan}/u';
	CONST REGEX_YI                  = '/\p{Yi}/u';

	public static function isCommon($string) { return preg_match(self::REGEX_COMMON, $string) > 0; }
	public static function isArabic($string) { return preg_match(self::REGEX_ARABIC, $string) > 0; }
	public static function isArmenian($string) { return preg_match(self::REGEX_ARMENIAN, $string) > 0; }
	public static function isBengali($string) { return preg_match(self::REGEX_BENGALI, $string) > 0; }
	public static function isBopomofo($string) { return preg_match(self::REGEX_BOPOMOFO, $string) > 0; }
	public static function isBraille($string) { return preg_match(self::REGEX_BRAILLE, $string) > 0; }
	public static function isBuhid($string) { return preg_match(self::REGEX_BUHID, $string) > 0; }
	public static function isCanadian_Aboriginal($string) { return preg_match(self::REGEX_CANADIAN_ABORIGINAL, $string) > 0; }
	public static function isCherokee($string) { return preg_match(self::REGEX_CHEROKEE, $string) > 0; }
	public static function isCyrillic($string) { return preg_match(self::REGEX_CYRILLIC, $string) > 0; }
	public static function isDevanagari($string) { return preg_match(self::REGEX_DEVANAGARI, $string) > 0; }
	public static function isEthiopic($string) { return preg_match(self::REGEX_ETHIOPIC, $string) > 0; }
	public static function isGeorgian($string) { return preg_match(self::REGEX_GEORGIAN, $string) > 0; }
	public static function isGreek($string) { return preg_match(self::REGEX_GREEK, $string) > 0; }
	public static function isGujarati($string) { return preg_match(self::REGEX_GUJARATI, $string) > 0; }
	public static function isGurmukhi($string) { return preg_match(self::REGEX_GURMUKHI, $string) > 0; }
	public static function isHan($string) { return preg_match(self::REGEX_HAN, $string) > 0; }
	public static function isHangul($string) { return preg_match(self::REGEX_HANGUL, $string) > 0; }
	public static function isHanunoo($string) { return preg_match(self::REGEX_HANUNOO, $string) > 0; }
	public static function isHebrew($string) { return preg_match(self::REGEX_HEBREW, $string) > 0; }
	public static function isHiragana($string) { return preg_match(self::REGEX_HIRAGANA, $string) > 0; }
	public static function isInherited($string) { return preg_match(self::REGEX_INHERITED, $string) > 0; }
	public static function isKannada($string) { return preg_match(self::REGEX_KANNADA, $string) > 0; }
	public static function isKatakana($string) { return preg_match(self::REGEX_KATAKANA, $string) > 0; }
	public static function isKhmer($string) { return preg_match(self::REGEX_KHMER, $string) > 0; }
	public static function isLao($string) { return preg_match(self::REGEX_LAO, $string) > 0; }
	public static function isLatin($string) { return preg_match(self::REGEX_LATIN, $string) > 0; }
	public static function isLimbu($string) { return preg_match(self::REGEX_LIMBU, $string) > 0; }
	public static function isMalayalam($string) { return preg_match(self::REGEX_MALAYALAM, $string) > 0; }
	public static function isMongolian($string) { return preg_match(self::REGEX_MONGOLIAN, $string) > 0; }
	public static function isMyanmar($string) { return preg_match(self::REGEX_MYANMAR, $string) > 0; }
	public static function isOgham($string) { return preg_match(self::REGEX_OGHAM, $string) > 0; }
	public static function isOriya($string) { return preg_match(self::REGEX_ORIYA, $string) > 0; }
	public static function isRunic($string) { return preg_match(self::REGEX_RUNIC, $string) > 0; }
	public static function isSinhala($string) { return preg_match(self::REGEX_SINHALA, $string) > 0; }
	public static function isSyriac($string) { return preg_match(self::REGEX_SYRIAC, $string) > 0; }
	public static function isTagalog($string) { return preg_match(self::REGEX_TAGALOG, $string) > 0; }
	public static function isTagbanwa($string) { return preg_match(self::REGEX_TAGBANWA, $string) > 0; }
	public static function isTaiLe($string) { return preg_match(self::REGEX_TAILE, $string) > 0; }
	public static function isTamil($string) { return preg_match(self::REGEX_TAMIL, $string) > 0; }
	public static function isTelugu($string) { return preg_match(self::REGEX_TELUGU, $string) > 0; }
	public static function isThaana($string) { return preg_match(self::REGEX_THAANA, $string) > 0; }
	public static function isThai($string) { return preg_match(self::REGEX_THAI, $string) > 0; }
	public static function isTibetan($string) { return preg_match(self::REGEX_TIBETAN, $string) > 0; }
	public static function isYi($string) { return preg_match(self::REGEX_YI, $string) > 0; }

	/* --------------------------------------------------------
	 * Proxies for the common person
	 * ----------------------------------------------------- */
	public static function isChinese($string) { return self::isHan($string); }
	public static function isJapanese($string) { return self::isHiragana($string) || self::isKatakana($string); }
}
