<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>javascript</h1>
  <ul>
  <script type="text/javascript">
    list = new Array("최진혁","최유빈","한이람","한이은","이고잉");
    i=0;
    while(i<list.length){
      document.write("<li>" + list[i] + "</li>");
      i=i+1;
    }
  </script>
  </ul>
  <h1>php</h1>
  <ul>
  <?php
    $list = Array("최진혁","최유빈","한이람","한이은","이고잉");
    $i=0;
    while($i<count($list)){
      echo "<li>".$list[$i]."</li>";
      $i=$i+1;
    }
  ?>
  </ul>
</body>
</html>
