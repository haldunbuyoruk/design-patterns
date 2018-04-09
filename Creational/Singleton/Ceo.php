<?php
namespace Creational\Singleton;

final class Ceo
{
    private static $instance;

    //Birden fazla instance oluşturulmasını önlemek için dışarıdan çağrı yapılmasına izin verilmez,
    private function __construct()
    {

    }

    public static function getInstance(): CEO
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
        //disable cloning
    }

    private function __wakeup()
    {
        //disable unserialize
    }
}