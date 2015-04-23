<?php

//www.facebook.com/behzad.babaei.568
//behzadbabaei69@gmail.com

class TestClass
{
	function hello($someone) 
	{
		return "Hello " . $someone . " Welcome To Soap servers world!";
	}
	function SumData($a,$b) 
	{

		return $a+$b;
	}
    function SubData($a,$b)
    {

        return $a - $b;
    }
    function MulData($a,$b)
    {

        return $a * $b;
    }

    function DivData($a,$b)
    {

        return $a / $b;
    }
}
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("http://localhost/webservices/simple/test.wsdl",array('soap_version' => SOAP_1_2));
   $server->setClass('TestClass');
   $server->handle(); 
?>
