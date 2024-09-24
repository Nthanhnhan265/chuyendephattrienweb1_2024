<?php

declare(strict_types=1);
include('i.php');
include('c.php');
include('a.php');
include('b.php');

class Demo
{
    // public function typeXReturnY: Y () { 
    //     echo __FUNCTION__."<br>"; 
    //     return new Y; 
    // }
    //Type A, Return Y (A,B,C,I,null)
    public function typeAReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeAReturnB(): A
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeAReturnC(): A
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeAReturnI(): A
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeAReturnNull(): A
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //Type B, Return Y (A,B,C,I,null)
    public function typeBReturnA(): B
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeBReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeBReturnC(): B
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeBReturnI(): B
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeBReturnNull(): B
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Type C, Return Y (A, B, C,  I, null)
    public function typeCReturnA(): C
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeCReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeCReturnI(): C
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeCReturnNull(): C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Type I, Return Y (A, B, C, I, null)
    public function typeIReturnA(): I
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB(): I
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC(): I
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeIReturnNull(): I
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Type Null, Return Y (A, B, C, I, null)
    public function typeNullReturnA(): null
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeNullReturnB(): null
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeNullReturnC(): null
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNullReturnI(): null
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeNullReturnNull(): null
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

//tạo đối tượng mới
$demo = new Demo(); 
//thử 25 phương thức
// Type A
$demo->typeAReturnA();
$demo->typeAReturnB();
$demo->typeAReturnC();
$demo->typeAReturnI();
$demo->typeAReturnNull();

// Type B
$demo->typeBReturnA();
$demo->typeBReturnB();
$demo->typeBReturnC();
$demo->typeBReturnI();
$demo->typeBReturnNull();

// Type C
$demo->typeCReturnA();
$demo->typeCReturnB();
$demo->typeCReturnC();
$demo->typeCReturnI();
$demo->typeCReturnNull();

// Type I
$demo->typeIReturnA();
$demo->typeIReturnB();
$demo->typeIReturnC();
$demo->typeIReturnI();
$demo->typeIReturnNull();

// Type Null
$demo->typeNullReturnA();
$demo->typeNullReturnB();
$demo->typeNullReturnC();
$demo->typeNullReturnI();
$demo->typeNullReturnNull();

