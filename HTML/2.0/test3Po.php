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
$sql= "SELECT * FROM 童話  ORDER BY Hiragana ASC;";
$res = $pdo->query($sql); 
if(@$_POST["search"]!=""){
  echo $_POST["search"];
  $search = $_POST["search"];
  $afth = "SELECT * FROM 童話  WHERE name LIKE '$search%';";
  echo $afth;
      $sql1=$pdo->query($afth);
}
$key = "";
// if(count($sql1) != 0){
  foreach ($sql1 as $row1) {
    $key = $row1['name'];
    break;
  }
// }

//----------------------処理
$p = 0; 
$nam_ato=0;
$nam_saki=0;
foreach ($res as $row) {
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
for($i=0; $i<$nam_saki; $i++){
  $saki_id[] = $row['id'];
  $saki_name[] = $row['name'];
  $saki_can += 1;
}

for($i=0; $i<$nam_ato; $i++){
  $ato_id[] = $row['id'];
  $ato_name[] = $row['name'];
  $ato_can += 1;
}

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
// チェックボックス処理--------------------------------------------
  $chec_arr = $_POST['Dchec'];
  $count = count($chec_arr);
  
//チェックボックスの中身取得


if (isset($_POST['Dchec']) && is_array($_POST['Dchec'])) {
  $Dchec = implode("、", $_POST["Dchec"]);
  //var_dump($_POST["Dchec"]);
}
$d = 0;
for($i = 0; $i<$Dchec; $i++){
  $Dchec[$i] = $Dchec[$i];
  
}
echo $_POST["Dchec"];

$inClause = substr(str_repeat(',?', count($_POST["Dchec"])), 1);

$stmt = $pdo->prepare(sprintf('SELECT * FROM `童話` WHERE Genre in (%s) AND name LIKE "い%" ORDER BY Hiragana ASC', $inClause));
$stmt->execute($_POST["Dchec"]);

foreach($stmt as $loop){
      //結果を表示
      echo "name = ".$loop['name'].PHP_EOL;
  }

?>
  
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="test3a.css">
    <body>
    <div class="wrap">

<!-- 検索機能 -->
      <form action="test2Po.php" method="POST">
        <input type="search" name="search" placeholder="キーワードを入力"><br>
        <p></p>
        <label class="checbox1"><input type="checkbox" name="Dchec" value=1 checked>グリム童話</label>
        <label class="checbox1"><input type="checkbox" name="Dchec" value=2 checked>アンデルセン童話</label>
        <label class="checbox1"><input type="checkbox" name="Dchec" value=3 checked>イソップ寓話</label>
        <input type="submit" name="submit" value="検索">
      </form>  
aaaaaa
    </div>
        <table class = "table_back">
          <tr>
          <td class = "tr_back">
            <?php

            for($i = 0; $i < $saki_can; $i++){
              echo '<a href="book2/Dbook_',$saki_id[$i],'.php">';
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
              echo '<a href="book2/Dbook_',$ato_id[$i],'.php">';
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