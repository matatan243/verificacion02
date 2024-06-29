<!DOCTYPE html>
          <html lang="en">
          <head>
 <style>

          .loader {
            border: 6px solid #f3f3f3; /* Light grey */
            border-top: 6px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            margin: 20px auto;
          }

          @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
          }
           *
           {
              font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           box-sizing: 0 ; margin: 0; padding: 0;
           }
          </style>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Bienvenida!!</title>


           <script type="text/javascript">


              var tiempo=3;
                var url="vlog.html";

              function updateReloj()
              {
                  document.getElementById('contador').innerHTML = " "+tiempo+" ";

                  if(tiempo==0)
                  {
                      window.location=url;

                  }else{
                      tiempo-=1;
                      setTimeout("updateReloj()",1000);
                  }
              }
             window.onload=updateReloj;
          </script>
          </head>
          <body>

          <center>
          <img width="20%" src="imdd/log-msu3.jpg" alt=""><br>
          <hr>
          <p style="font-size: 15pt; background-color: #038de8; color: white;">
              Bienvenidos, a la plataforma de validacion, a continuacion valida!</p>

              <div class="loader">

              </div>
          <div>
               <p style="color: rgb(0, 98, 255); font-size: 14pt;">A continuacion espera<font style="color: blue;" id="contador" style=" font-size:28px;"> </font></strong> 
                  segundos. </p> </div>  <br><br>
          <div>
              <img width="100%" src="imdd/nnerou.jpg" alt="">
          </div>
          </center>


        
</body>
          </html>