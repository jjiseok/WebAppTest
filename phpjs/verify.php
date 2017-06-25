<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    $password=$_POST["password"];
    $password=hash('sha512', $password);
    $password=strtoupper($password);
    $enc_password="33275A8AA48EA918BD53A9181AA975F15AB0D0645398F5918A006D08675C1CB27D5C645DBD084EEE56E675E25BA4019F2ECEA37CA9E2995B49FCB12C096A032E";

    if($password==$enc_password){
      echo "주인님 안녕하세요?";
    }else{
      echo "뉘신지?";
    }
   ?>
</body>
</html>
