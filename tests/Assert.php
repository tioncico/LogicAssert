<?php
namespace LogicAssert\Test;
use LogicAssert\LogicAssertException;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: Tioncico
 * Date: 2019/9/12 0012
 * Time: 15:12
 */
class Assert extends TestCase {

    /**
     * @dataProvider additionProvider
     * testAssertEquals
     * @param $a
     * @param $b
     * @author Tioncico
     * Time: 15:25
     */
    function testAssertEquals(){
        try{
            $a=1;
            \LogicAssert\Assert::assertEquals('1',1,'fail');
            \LogicAssert\Assert::assertEquals('1','1','fail');
            \LogicAssert\Assert::assertEquals('a','A','fail',false,true);
            \LogicAssert\Assert::assertEquals(1,1,'fail',true);
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);
    }

    function testAssertNotEquals(){
        try{
            $a=1;
            \LogicAssert\Assert::assertNotEquals('1',1,'fail',true);
            \LogicAssert\Assert::assertNotEquals('1','2','fail');
            \LogicAssert\Assert::assertNotEquals('a','A','fail',false,false);
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);
    }

    function testAssertTrue(){
        try{
            $a=1;
            \LogicAssert\Assert::assertTrue(true,'fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);

        try{
            $a=1;
            \LogicAssert\Assert::assertTrue(false,'fail');
            \LogicAssert\Assert::assertTrue(1,'fail');
            \LogicAssert\Assert::assertTrue('0','fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(2,$a);
    }
    function testAssertFalse(){
        try{
            $a=1;
            \LogicAssert\Assert::assertFalse(false,'fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);


        try{
            $a=1;
            \LogicAssert\Assert::assertFalse(true,'fail');
            \LogicAssert\Assert::assertFalse(1,'fail');
            \LogicAssert\Assert::assertFalse(2,'fail');
            \LogicAssert\Assert::assertFalse('false','fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(2,$a);
    }
    function testAssertGreaterThan(){
        try{
            $a=1;
            \LogicAssert\Assert::assertGreaterThan(0,1,'fail');
            \LogicAssert\Assert::assertGreaterThan(0,'2','fail');
            \LogicAssert\Assert::assertGreaterThan(-111,10000,'fail');
            \LogicAssert\Assert::assertGreaterThan('-1',1,'fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);
        
        
        try{
            $a=1;
            \LogicAssert\Assert::assertGreaterThan(0,0,'fail');
            \LogicAssert\Assert::assertGreaterThan(1,0,'fail');
            \LogicAssert\Assert::assertGreaterThan('2',0,'fail');
            \LogicAssert\Assert::assertGreaterThan(10000,-111,'fail');
            \LogicAssert\Assert::assertGreaterThan(1,'-1','fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(2,$a);
    }
    function testAssertLessThan(){
        try{
            $a=1;
            \LogicAssert\Assert::assertLessThan(1,0,'fail');
            \LogicAssert\Assert::assertLessThan('2',0,'fail');
            \LogicAssert\Assert::assertLessThan(10000,-111,'fail');
            \LogicAssert\Assert::assertLessThan(1,'-1','fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);


        try{
            $a=1;
            \LogicAssert\Assert::assertLessThan(0,0,'fail');
            \LogicAssert\Assert::assertLessThan(0,1,'fail');
            \LogicAssert\Assert::assertLessThan(0,'2','fail');
            \LogicAssert\Assert::assertLessThan(-111,10000,'fail');
            \LogicAssert\Assert::assertLessThan('-1',1,'fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(2,$a);
    }
    function testAssertEmpty(){

        try{
            $a=1;
            \LogicAssert\Assert::assertEmpty('','fail');
            \LogicAssert\Assert::assertEmpty('0','fail');
            \LogicAssert\Assert::assertEmpty(null,'fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);

    }
    function testAssertNotEmpty(){

        try{
            $a=1;
            \LogicAssert\Assert::assertNotEmpty('1','fail');
        }catch (LogicAssertException $exception){
            $a= 2;
        }
        $this->assertEquals(1,$a);
        
    }

}