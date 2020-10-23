<?php
        $host = '172.30.61.113';//db서버 ip
        $user = 'root';
        $pw = 'test123';
        $dbName = 'mariadb-1-8r6t6';
        $mysqli = new mysqli($host, $user, $pw, $dbName);

        if($mysqli){
                echo "MYSQL 접속 성공";
        }else{
                echo "MYSQL 접속 실패";
        }

?>
