<?php
    $client = new SoapClient("http://127.0.0.1/Soap/Wsdl/wsdl.php?wsdl",array('soap_version'=> SOAP_1_2));
    try{
        $result = $client->getAllGhItem1();
        echo $result;
    }catch (SoapFault $f){
        echo "Error Message: {$f->getMessage()}";
    }
?>