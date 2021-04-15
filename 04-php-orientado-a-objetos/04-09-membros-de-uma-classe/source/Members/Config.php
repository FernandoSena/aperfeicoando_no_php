<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 10:32
 */

namespace Source\Members;


class Config
{
    public const COMPANY = "Softhubo";
    protected const DOMAIN = "http://www.google.com";
    private const SECTOR = "Educação";

    public static $company;
    public static $domain;
    public static $sector;

    public static function setConfig($company, $domain, $sector)
    {
        self::$company = $company;
        self::$domain = $domain;
        self::$sector = $sector;
    }
}