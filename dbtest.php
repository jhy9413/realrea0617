<?php
        $host = '172.30.61.113';//db서버 ip
        $port = '3306';
        $user = 'root';
        $pw = '';
        $dbName = 'mariadb';
        $conn = new mysqli($host, $port, $user, $pw, $dbName);

        if($conn){
                echo "MYSQL 접속 성공";
        }else{
                echo "MYSQL 접속 실패";
        }

?>
