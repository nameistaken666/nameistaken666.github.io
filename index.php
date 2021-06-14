<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Home | Haxxors</title>
    <link href="home.css" rel="stylesheet" type="text/css" />
  </head>
    <?php
 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 

 
$fh = fopen('log.txt', 'a');
fwrite($fh, 'IPA: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);
?>
<body>
    <div class="bg"></div>
    <div class="bg1"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
   <header>
     <img src="/imgs/haxxors.png" alt="haxXors">
     <nav>
       <ul>
         <li><a href="/">home</a></li>
         <li><a href="repl">repls</a></li>
         <li><a href="aboutus">about us</a></li>
       </ul>
     </nav>
   </header>
   <div class="updates">
     <h4>News</h4>
     <ul>
       <li>Home page in development</li>
       <li>i10, Nameistaken666, and carterbuncle joined</li>
       <li>Team created</li>
     </ul>
   </div>
   <div class="active">
      <h1>Active Project: None</h1>  
   </div>
   <div class="members">
      <h1>members</h1>
      <div id="stat_wrap">
      <div class="mUser">
        <img src="https://storage.googleapis.com/replit/images/1617751249209_027e00f01bd74c9f854125480f42428e.gif" alt="User Profile">
        <a href="https://replit.com/@i10/" target="_blank">i10</a>
      </div>
      <div class="mUser">
        <img src="https://storage.googleapis.com/replit/images/1613481500375_a0d488a9f1e668eb32f681934cd305ef.gif" alt="User Profile">
        <a href="https://replit.com/@nameistaken666/" target="_blank">Nameistaken666</a>
      </div>
      <div class="mUser">
        <img src="https://storage.googleapis.com/replit/images/1615340543733_670096caebd6a56319a70f4a14e575b8.jpeg" alt="User Profile">
        <a href="https://replit.com/@carterbuncle/" target="_blank">carterbuncle</a>
      </div>
    </div>
  </div>
 </body>
</html>