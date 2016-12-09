<!DOCTYPE html>
<!--
***************************************session/cookies将用户数据进行加解密********************************
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
session_start();
$userinfo = array(
    'uid'=>100,
    'name'=>'LX',
    'email'=>'593866511@qq.com',
    'sex'=>'女',
    'age'=>'21'
    
);
//用户信息保存到session中
$_SESSION['uid']=$userinfo['uid'];
$_SESSION['name']=$userinfo['name'];
$_SESSION['useinfo']=$userinfo;

$secureKey = '75395184260'; //cookies中的加密密钥
$str=  serialize($userinfo);//用户信息序列化
$str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));//加密
setcookie('userinfo',$str);//用户信息加密后，将加密后的用户数据存储到cookies中

//当需要时进行解密
$str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), base64_decode($str), MCRYPT_MODE_ECB);//解密
$uinfo=  unserialize($str);
        echo "解密后的用户信息：<br>";
        print_r($uinfo);

        ?>
    </body>
</html>
