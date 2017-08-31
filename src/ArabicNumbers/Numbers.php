<?php
namespace ArabicNumbers;

class Numbers
{
    /**
     * Converts Latin numerals to Arabic numerals
     * @var $number integer
     * @return string
     **/
    public static function latinToArabic($number)
    {
        return self::convert('latin', 'arabic', $number);

    }
    
    /**
     * Converts Arabic numerals to Latin numerals
     * @var $number string
     * @return string
     **/
    public static function arabicToLatin($number)
    {
        return self::convert('arabic', 'latin', $number);

    }

    /**
     * Converts Arabic numerals to their HTML equivalent
     * @var $number string
     * @return string
     **/
    public static function arabicToHtml($number)
    {
        return self::convert('arabic', 'html', $number);

    }

    /**
     * Does the actual conversions between arabic and latin
     * @var $from string 'arabic' or 'latin'
     * @var $to string 'arabic' or 'latin' or 'html'
     * @var $number string
     * @return string
     **/ 
    private static function convert($from, $to, $number)
    {
        $number = (string) $number;
        foreach (self::getArabicNumerals() as $latin => $arr) {
            $number = str_replace($arr[$from], $arr[$to], $number);
        }

        return $number;
                
    }

    /**
     * Returns an array of arabic and latin numerals and the arabic html equivalent
     **/
    public static function getArabicNumerals()
    {
        return [
            '0' =>
                 [
                     'arabic' => '٠',
                     'latin' => '0',
                     'html' => '&#1632;'
             ],
             '1' =>
                 [
                     'arabic' => '١',
                     'latin' => '1',
                     'html' => '&#1633;'
             ],
            '2' =>
                 [
                     'arabic' => '٢',
                     'latin' => '2',
                     'html' => '&#1634;'
                 ],
            '3' =>
                 [
                     'arabic' => '٣',
                     'latin' => '3',
                     'html' => '&#1635;'
                 ],
            '4' =>
                 [
                     'arabic' => '٤',
                     'latin' => '4',
                     'html' => '&#1636;'
                 ],
            '5' =>
                 [
                     'arabic' => '٥',
                     'latin' => '5',
                     'html' => '&#1637;'
                 ],
            '6' =>
                 [
                     'arabic' => '٦',
                     'latin' => '6',
                     'html' => '&#1638;'
                 ],
            '7' =>
                 [
                     'arabic' => '٧',
                     'latin' => '7',
                     'html' => '&#1639;'
                 ],
            '8' =>
                 [
                     'arabic' => '٨',
                     'latin' => '8',
                     'html' => '&#1640;'
                 ],
            '9' =>
                 [
                     'arabic' => '٩',
                     'latin' => '9',
                     'html' => '&#1641;'
                 ],

            ];
    }
}
