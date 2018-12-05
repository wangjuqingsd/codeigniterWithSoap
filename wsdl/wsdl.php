<?php

require_once './YTGCode.php';
ini_set('soap.wsdl_cache_enabled','0');    //关闭WSDL缓存

    //打开WSDL
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST') {
    $url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['PHP_SELF'].'?wsdl';
    $servidorSoap = new SoapServer($url);
    $servidorSoap->setClass('YTGCode');
    $servidorSoap->handle();
}else{
    require_once './SoapDiscovery.class.php';
    // 创建WSDL
    $disco = new SoapDiscovery('YTGCode','Ytport_YTGCode');
        header("Content-type: text/xml");
    if (isset($_SERVER['QUERY_STRING']) && strcasecmp($_SERVER['QUERY_STRING'],'wsdl')==0) {
        echo $disco->getWSDL();
    }else {
        echo $disco->returnWSDL();
    }
}

?>