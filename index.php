<?php
        require_once './db.php';
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>
<div id="board_area">
  <h1>자유게시판</h1>
  <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">날짜</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
            mysqli_query($connection, 'set session character_set_connection=utf8;');
            mysqli_query($connection, 'set session character_set_results=utf8;');
            mysqli_query($connection, 'set session character_set_client=utf8;');

          $sql = "SELECT * FROM board";
          $result = mysqli_query($connection, $sql);
          while($a=mysqli_fetch_assoc($result)) {
        ?>
      <tbody>
        <tr>
                <td><?php echo $a['idx'] ?></td>
                <td><?php echo $a['title'] ?></td>
                <td><?php echo $a['name'] ?></td>
                <td><?php echo $a['date'] ?></td>
                <td><?php echo $a['hit'] ?></td>

        </tr> <?php } ?>
      </tbody>
    </table>
    <div id="write_btn">
      <a href="/write.php"><button>글쓰기</button></a>
    </div>
  </div>
</body>
</html>
