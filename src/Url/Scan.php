<?php
namespace Composer\Share\Url;

class Scan{
    protected  $httpClient;
    public function __construct(){

    }
    public static function test(){
        echo __CLASS__.';'.__NAMESPACE__;
    }
}