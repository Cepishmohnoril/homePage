<?php

namespace homePage\util;

class Config
{
    private static $host   = "localhost";
    private static $dbName = "homePage";
    private static $dbUser = "root";
    private static $dbPass = "1234";

    public static function getDbName ()
    {
        return self::$dbName;
    }

    public static function getDbPass ()
    {
        return self::$dbPass;
    }

    public static function getDbHost ()
    {
        return self::$host;
    }

    public static function getDbUser ()
    {
        return self::$dbUser;
    }
}
