<?php
namespace Arabic;

class Numbers
{
    public static function latinToArabic($number)
    {
        $number = (string) $number;
        foreach (self::getArabicNumerals() as $latin => $arr) {
            $number = str_replace($latin, $arr['arabic'], $number);
        }

        return $number;

    }

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
