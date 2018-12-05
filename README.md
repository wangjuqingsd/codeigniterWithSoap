# codeigniterWithSoap
build a soap webservice with codeigniter

view wsdl:
host/wsdl/wsdl.php?wsdl

create your SOAP Server:
edit wsdl/YTGCode.php, add your webservice api in YTGCode Class with public function 

notice:  All your service api must be public function, and your params must re-edit in YTGCode->doCi function  about line:158

test:
host/client.php

查看wsdl:
host/wsdl/wsdl.php?wsdl

创建SOAP服务接口：
修改wsdl/YTGCode.php 将接口写在YTGCode 类中，并标示为public function

注意，这里的参数我没有做修改，只是测试成功后发布到GitHub，你需要做的是在大概158行附近的$params 进行修改，将这个参数根据你的项目实际优化到代码中
注意：CI的数据库配置我已经删除，需要自己重新配置下

测试:
host/client.php
