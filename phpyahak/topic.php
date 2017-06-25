<html>
<head>
  <title>
  </title>
</head>
<body>
<ul>


<?php
  $data=scandir('data');
  foreach ($data as $file) {
    if($file===".")
      continue;
    if($file==="..")
      continue;
?>
  <li>
    <a href="topic.php?id=<?=$file?>"> <?=$file?> </a>
  </li>
<?php
  }
 ?>
</ul>

<!-- <ul>
  <li><a href="topic.php?id=html">html</a></li>
  <li><a href="topic.php?id=javascript">javascript</a></li>
  <li><a href="topic.php?id=php">php</a></li>
  <li><a href="topic.php?id=css">css</a>
  </li>
</ul> -->




<h1>
안녕하세요
<?php
 print($_GET['id']);
 ?>
님
<?php

 //print("data/{$_GET['id']}");
 //include("data/{$_GET['id']}.php");
 print(file_get_contents("data/{$_GET['id']}"));
 ?>

</h1>

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://zeroplus1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</body>
</html>
