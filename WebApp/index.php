<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="./style.css">
</head>

<body id="target">
    <header>
        <img src="http://www.i-scream.co.kr/asset/serviceFront/images/common/logo_beta.png" alt="연습" />
        <h1><a href="http://localhost/webapp">JavaScript</a></h1>

    </header>
    <nav>
        <ol>
          <?php
            echo file_get_contents("list.txt");
          ?>

        </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" id="white_btn" />
      <input type="button" value="black" id="black_btn" />
    </div>
    <script src="./script.js" charset="utf-8"></script>
    <article>
      <?php
        if(empty($_GET['id'])==false){
          echo file_get_contents($_GET['id'].".txt");
      }
       ?>

    </article>

</body>
</html>
