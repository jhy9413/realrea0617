<?php
        $host = '172.30.61.113';//db서버 ip
        $port = '3306';
        $user = 'root';
        $pw = '';
        $dbName = 'dog';
        $mysqli = new mysqli($host, $user, $pw, $dbName);

        if($mysqli){
                echo "MYSQL 접속 성공";
        }else{
                echo "MYSQL 접속 실패";
        }

?>
