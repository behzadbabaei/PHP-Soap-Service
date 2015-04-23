<?php

function TestAdd()
{
    $num1=30;
    $num2=24;
    $client = new SoapClient("http://localhost/webservices/simple/test.wsdl",array('soap_version' => SOAP_1_2,'trace' => 1 ));
    $res=$client->__soapCall( "SumData", array("sumnum1"=>$num1,"sumnum2"=>$num2));
    $res1=$client->__soapCall("MulData", array("mulnum1"=>$num1,"mulnum2"=>$num2));
    $res2=$client->__soapCall("DivData", array("divnum1"=>$num1,"divnum2"=>$num2));
    $res3=$client->__soapCall("SubData", array("subnum1"=>$num1,"subnum2"=>$num2));

    echo "this is sum: ".$res."<br>";
    echo "this is mul: ".$res1."<br>";
    echo "this is div: ".$res2."<br>";
    echo "this is sub: ".$res3."<br>";

}

TestAdd();

?>