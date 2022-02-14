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
  // echo $_POST["search"];
  $search = $_POST["search"];
  $afth = "SELECT * FROM 童話  WHERE Hiragana LIKE '$search%' ORDER BY Hiragana ASC;";
  // echo $afth;
      $sql1=$pdo->query($afth);
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
// チェックボックス処理
if(empty($_POST["Dchec"])){
  $Post_Dchec=array('グリム童話','アンデルセン童話','イソップ寓話');
  $inClause = substr(str_repeat(',?', count($Post_Dchec)), 1);
  
  //ここで表示させる処理----------------------------------
  $key = "";
  // if(count($sql1) != 0){
  foreach ($res as $res1) {
  $key = $res1['name'];
  break;
  }

  $p = 0; 
  $nam_ato=0;
  $nam_saki=0;
  foreach ($res as $res1) {
    if($res1['name'] == $key){
      $p = 1;
    }
    if($p == 0){
      array_push($ato_name, $res1['name']);
      array_push($ato_id, $res1['id']);
      $nam_ato += 1;
    }else if($p == 1){
      array_push($saki_name, $res1['name']);
      array_push($saki_id, $res1['id']);
      $nam_saki += 1;
    }
  }
  for($i=0; $i<$nam_saki; $i++){
    $saki_id[] = $res1['id'];
    $saki_name[] = $res1['name'];
    $saki_can += 1;
  }
  for($i=0; $i<$nam_ato; $i++){
    $ato_id[] = $res1['id'];
    $ato_name[] = $res1['name'];
    $ato_can += 1;
  }

///---------------------------------------------------------------------------------------------------------------
}else{
  $inClause = substr(str_repeat(',?', count($_POST["Dchec"])), 1);
  if(empty($search)){
    $stmt = $pdo->prepare(sprintf("SELECT * FROM `童話` WHERE Genre in (%s) ORDER BY Hiragana ASC", $inClause,));
    }else{
      $liker = $search.'%';
      $stmt = $pdo->prepare(sprintf("SELECT * FROM `童話` WHERE Genre in (%s) AND Hiragana LIKE '%s' ORDER BY Hiragana ASC", $inClause, $liker));
    }

  $STMT = $pdo->prepare(sprintf("SELECT * FROM `童話` WHERE Genre in (%s) ORDER BY Hiragana ASC", $inClause));
  $stmt->execute($_POST["Dchec"]);
  $STMT->execute($_POST["Dchec"]);
    
  $key = "";
  // if(count($sql1) != 0){
  foreach ($stmt as $stmt1) {
    $key = $stmt1['name'];
    break;
  }
  //順番処理--------------------------------------
  $p = 0; 
  $nam_ato=0;
  $nam_saki=0;
  foreach ($STMT as $stmt) {
    if($stmt['name'] == $key){
      $p = 1;
    }
    if($p == 0){
      array_push($ato_name, $stmt['name']);
      array_push($ato_id, $stmt['id']);
      $nam_ato += 1;
    }
    else if($p == 1){
      array_push($saki_name, $stmt['name']);
      array_push($saki_id, $stmt['id']);
      $nam_saki += 1;
    }
  }
    for($i=0; $i<$nam_saki; $i++){
      $saki_id[] = $stmt['id'];
      $saki_name[] = $stmt['name'];
      $saki_can += 1;
    }
    for($i=0; $i<$nam_ato; $i++){
      $ato_id[] = $stmt['id'];
      $ato_name[] = $stmt['name'];
      $ato_can += 1;
    }
}
//-------------------------------------------------

?>
  
<meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="2_00abc.css">
  <body>
  <div class="wrap">

  <!-- 検索機能 -->
  <form action="2_00Po2.php" method="POST">
    <input type="search" name="search" placeholder="キーワードを入力"><br>
    <p></p>
    <?php
    if(empty($_POST["Dchec"])){
      $checkd[0]="";
      $checkd[1]="";
      $checkd[2]="";
      foreach($Post_Dchec as $check){
        if($check == 'グリム童話'){
          $checkd[0]="checked";
        }
        if($check == 'アンデルセン童話'){
          $checkd[1]="checked";
        }
        if($check == 'イソップ寓話'){
          $checkd[2]="checked";
        }
      }
      echo '<form action="2_00Po.php" method="POST">';
      echo '<label class="checbox1"><input type="checkbox" name="Dchec[]" value="グリム童話" ',$checkd[0],'>グリム童話</label>';
      echo '<label class="checbox1"><input type="checkbox" name="Dchec[]" value="アンデルセン童話" ',$checkd[1],'>アンデルセン童話</label>';
      echo '<label class="checbox1"><input type="checkbox" name="Dchec[]" value="イソップ寓話" ',$checkd[2],'>イソップ寓話</label>';
      echo '<input type="submit" name="submit" value="検索">';
      echo '</form>';

    }else{
      $data = $_POST["Dchec"];
      $checkd[0]="";
      $checkd[1]="";
      $checkd[2]="";
      foreach($data as $check){
        if($check == 'グリム童話'){
          $checkd[0]="checked";
        }
        if($check == 'アンデルセン童話'){
          $checkd[1]="checked";
        }
        if($check == 'イソップ寓話'){
          $checkd[2]="checked";
        }
      }
      echo '<form action="2_00Po.php" method="POST">';
      echo '<label class="checbox1"><input type="checkbox" name="Dchec[]" value="グリム童話" ',$checkd[0],'>グリム童話</label>';
      echo '<label class="checbox1"><input type="checkbox" name="Dchec[]" value="アンデルセン童話" ',$checkd[1],'>アンデルセン童話</label>';
      echo '<label class="checbox1"><input type="checkbox" name="Dchec[]" value="イソップ寓話" ',$checkd[2],'>イソップ寓話</label>';
      echo '<input type="submit" name="submit" value="検索">';
      echo '</form>';
}
  
    ?>
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
    <tr>
    </tr>
    </td>
    </table>
  </body>