<?php
$user = "root";
$pass = "";
$pdo = new PDO("mysql:host=localhost;dbname=sotusei",$user,$pass);
$saki_id = array();
$saki_name = array();
$saki_can = 0;
$ato_id = array();
$ato_name = array();
$ato_can = 0;
$aft = array();
$ato = array();
$saki = array();
$sql= "SELECT * FROM 童話  ORDER BY name,id ASC;";
$res = $pdo->query($sql); 
if(@$_POST["search"]!=""){
  echo $_POST["search"];
  $search = $_POST["search"];
  $afth = "SELECT * FROM 童話  WHERE name LIKE '$search%';";
  echo $afth;
      $sql1=$pdo->query($afth);
}
$key = "";
if(count($sql1) != 0){
  foreach ($sql1 as $row1) {
    $key = $row1['name'];
    break;
  }
}

//----------------------処理
$p = 0; 
$nam_ato=0;
$nam_saki=0;
foreach ($res as $row) {
  // var_dump($row['name']);
  // var_dump($key);
  
  if($row['name'] == $key){
    $p = 1;
  }
  if($p == 0){
    array_push($ato_name, $row['name']);
    array_push($ato_id, $row['id']);
    $nam_ato += 1;
  }
  else if($p == 1){
    array_push($saki_name, $row['name']);
    array_push($saki_id, $row['id']);
    $nam_saki += 1;
  }
}
      // print_r($nam_ato);
      // print_r($nam_saki);

for($i=0; $i<$nam_saki; $i++){
  $saki_id[] = $row['id'];
  $saki_name[] = $row['name'];
  $saki_can += 1;
}
// print_r ($saki_name);
// print_r ($saki_can);

for($i=0; $i<$nam_ato; $i++){
  $ato_id[] = $row['id'];
  $ato_name[] = $row['name'];
  $ato_can += 1;
}
// print_r ($ato_name);
// print_r ($ato_can);

for($i=8;$i>=2;$i--){
  $aft1[] =$i;
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
// チェックボックス処理
$chec_arr = $_POST["Dchec"];
echo $chec_arr;
$count = count($chec_arr);
echo $count;

if($count = 0; && $count = 3){
  //そのまま
  $res
  if($count = 1){
    $
  }
}
//SELECT * FROM `童話` WHERE Genre="グリム童話" OR Genre="アンデルセン童話";
?>
?>
  
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="1_00a.css">
    <body>
    <div class="wrap">

<!-- 検索機能 -->
<form action="test2Po.php" method="POST">
 <input type="search" name="search" placeholder="キーワードを入力">
 <input type="submit" name="submit" value="検索">
</form>
aaaaaa
    </div>
        <table class = "table_back">
          <tr>
          <td class = "tr_back">
            <?php

            for($i = 0; $i < $saki_can; $i++){
              echo '<a href="book1/Sbook_',$saki_id[$i],'.php">';
              echo '<TABLE class="bookTable',$aft[$i], '"BORDER=1 CELLSPACING=10 align="left" >';
              echo  ' <TR>';
              echo ' <TD class="tategaki" height = 180px;>', $saki_name[$i],'</TD>';
              echo  ' </TR>';
              echo  '    <TR>';
              echo  '    </TR>';
              echo '</TABLE>';
              echo '</a>';
            }
            for($i = 0; $i < $ato_can; $i++){
              echo '<a href="book1/Sbook_',$ato_id[$i],'.php">';
              echo '<TABLE class="bookTable',$aft[$i], '"BORDER=1 CELLSPACING=10 align="left" >';
              echo  ' <TR>';
              echo ' <TD class="tategaki" height = 180px;>', $ato_name[$i],'</TD>';
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