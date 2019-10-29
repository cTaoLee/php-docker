<?php

# 数据库连接方式
echo "测试连接数据库", "<br>";
$pdo = new PDO("mysql:host=mysql;dbname=mysql","root","root");
echo "连接成功", "<br>";

# 验证 php.ini 配置
echo "session 过期时间为", ini_get('session.gc_maxlifetime'), "秒", "<br>";

