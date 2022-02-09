<?php
$user = "root";
$pass = "";
$pdo = new PDO("mysql:host=localhost;dbname=sotusei",$user,$pass);
$sql= "SELECT * FROM 神話  ORDER BY name,id ASC;";
$res = $pdo->query($sql); 
$id = array();
$name = array();
$can = 0;
$aft = array();
foreach($res as $row){
  $id[] = $row['id'];
  $name[] = $row['name'];
  $can += 1;
}
for($i=2;$i<=8;$i++){
  $aft[] =$i;
}
for($i=2;$i<=8;$i++){
  $aft[] =$i;
}
for($i=2;$i<=8;$i++){
  $aft[] =$i;
}
for($i=2;$i<=8;$i++){
  $aft[] =$i;
}
for($i=2;$i<=8;$i++){
  $aft[] =$i;
}
for($i=2;$i<=8;$i++){
  $aft[] =$i;
}
for($i=2;$i<=8;$i++){
  $aft[] =$i;
}

?>
  
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="1_00a.css">
    <body>
    <div class="wrap">
<form action="1_00Po.php" method="POST">
 <input type="search" name="search" placeholder="キーワードを入力">
 <input type="submit" name="submit" value="検索">
</form>
aaaaaaa
    </div>
        <table class = "table_back">
          <tr>
          <td class = "tr_back">
            <?php
          for($i = 0; $i < $can; $i++){
          echo '<a href="book1/Sbook_',$id[$i],'.php">';
          echo '<TABLE class="bookTable',$aft[$i], '"BORDER=1 CELLSPACING=10 align="left" >';
          echo  ' <TR>';
          echo ' <TD class="tategaki" height = 180px;>', $name[$i],'</TD>';
          echo  ' </TR>';
          echo  '    <TR>';
          echo  '    </TR>';
          echo '</TABLE>';
          echo '</a>';
        }
          ?>
          
        </tr>
      </td>
<!-- /table上-->
<!-- table下-->
  <tr>
</tr>
</td>
    </body>
</table>

ジャンル別　ア行か行
