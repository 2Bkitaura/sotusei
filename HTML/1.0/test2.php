<!DOCTYPE html>

<?php
$user = "root";
$pass = "";
$pdo = new PDO("mysql:host=localhost;dbname=sotusei",$user,$pass);
$sql= "SELECT * FROM 神話 ORDER BY id DESC;";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/9-6-1/css/9-6-1.css"> 
    <link rel="stylesheet" href="test2.css">
    

    <title>Wedサイト</title>
  </head>
  <body>
    <header class="parallax-bg">
      <div id="navArea">
        <nav>
          <div class="inner">
            <ul class = "innnn">
              <li><a href="1_0.php">神話</a></li>
              <li><a href="http://localhost/HTML/2.0/2_0.php">童話</a></li>
            </ul>
          </div>
        </nav>
      
        <div class="toggle_btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
        </div>
        <h1><a href ="1_0.php">神話だよ</a></h1>
        <nav　class = "nav">
          <ul>
            <li><a href="#info" class="modal-open">ヘルプ</a></li>
              <li><a href="http://localhost/HTML/2.0/1_0.php">神話とは</a></li>
              <li><a href="#">作品</a></li>
              <li><a href="#">人物</a></li>
          </ul> 
        </nav>
      </header>
        <div id="mask"></div>
      </div>
      <main>
<!-- モーダルウィンドウ -->
      <section id="info">
      <h2>ヘルプ</h2>

      <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

            <p>左上のメニューを押すと切り替えられるよ</p>
            <img src="../img/ダウンロード.gif">
            </div>

            <div class="swiper-slide">
                    aaaaaaaaaaaaaa
                    <!-- <img src="//into-the-program.com/demo/images/sample002.jpg" alt=""> -->
            </div>

            <div class="swiper-slide">
              bbbbbbbbbbbbbbbbb
                    <!-- <img src="//into-the-program.com/demo/images/sample003.jpg" alt=""> -->
            </div>
            </div>
          <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      </section>
<!-- おわ-->

<iframe name = "main" class="yaa" src="1_00.php" frameborder="0" scrolling="yes"width="1200" height="700"></iframe>
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
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
      <script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
      <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/9-6-1/js/9-6-1.js"></script>
      <script src="test2.js"></script> 
  </body>
</html>