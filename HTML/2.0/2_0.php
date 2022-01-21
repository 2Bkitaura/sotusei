<!DOCTYPE html>

<?php
$user = "root";
$pass = "";
$pdo = new PDO("mysql:host=localhost;dbname=sotusei",$user,$pass);
$sql= "SELECT * FROM 童話 ORDER BY id ASC;";
$res = $pdo->query($sql); 
$id = array();
$name = array();
$can = 0;
foreach($res as $row){
  $id[] = $row['id'];
  $name[] = $row['name'];
  $can += 1;
}
for($i=0;$i<$can;$i++){
  $rand[$i]=rand(2,8);
  }
?>
 
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="2_0a.css">

    <title>Wedサイト</title>
  </head>
  <body>
    <header class="parallax-bg">
      <div id="navArea">
        <nav>
          <div class="inner">
            <ul class = "innnn">
              <li><a href="http://localhost/HTML/1.0/1_0.php">神話</a></li>
              <li><a href="2_0.php">童話</a></li>
            </ul>
          </div>
        </nav>
      
        <div class="toggle_btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
        </div>
        <h1><a href ="2_0.php">童話だよ</a></h1>
        <nav　class = "nav">
          <ul>
              <li><a href="index.html">童話とは</a></li>
              <li><a href="index.html#about">作品</a></li>
              <li><a href="index.html#menu">人物</a></li>
          </ul> 
        </nav>
      </header>
        <div id="mask"></div>
      </div>
      <main>
        <div class="wrapper">
        <article>
          <div class="content">
            <p>メインコンテンツ</p>
<iframe name = "main" class="yaa" src="2_00.php" frameborder="0" scrolling="yes"width="1200" height="700"></iframe>
        </tr>
        </tr>
      </td>
  <tr>
</tr>
</td>
</table>
          </div>
          
        </div>
        </article>

      </main>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
      <script src="2_0a.js"></script> 
  </body>
</html>