<?php
/**
 * Created by PhpStorm.
 * User: Tioncico
 * Date: 2019/9/12 0012
 * Time: 10:06
 */

namespace LogicAssert;


class Assert
{
    static function assertEquals($expected, $actual, string $message, $contrastType = false, $ignoreCase = false)
    {
        $result = self::equals($expected, $actual, $contrastType, $ignoreCase);
        self::throwException($result, $message);
    }

    static function assertNotEquals($expected, $actual, string $message  , $contrastType = false, $ignoreCase = false)
    {
        $result = self::equals($expected, $actual, $contrastType, $ignoreCase);
        self::throwException(!$result, $message);
    }

    static function assertTrue($condition, string $message)
    {
        self::throwException($condition===true, $message);
    }

    static function assertFalse($condition, string $message)
    {
        self::throwException($condition===false, $message);
    }

    static function assertGreaterThan($expected, $actual, string $message){
        $result = $actual>$expected;
        self::throwException($result, $message);
    }

    static function assertLessThan($expected, $actual, string $message){
        $result = $actual<$expected;
        self::throwException($result, $message);
    }

    static function assertEmpty($expected,  string $message){
        self::throwException(empty($expected), $message);
    }

    static function assertNotEmpty($expected,  string $message){
        self::throwException(!empty($expected), $message);
    }

    static function equals($expected, $actual, $contrastType = false, $ignoreCase = false)
    {
        if ($contrastType === true) {
            return $expected === $actual;
        }
        if ($ignoreCase === true) {
            return strcmp($expected, $actual);
        }
        return $expected == $actual;
    }


    static function throwException($bool, $message)
    {
        if ($bool === false) {
            throw new LogicAssertException($message);
        }
    }
}