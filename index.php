<html>
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action ="login.php" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <button type="submit" name="button-submit" value="login">Login</button>
                  <button type="submit" name="button-submit" value="signup">Daftar</button>
               </form>
					<div><?php 
               $message = '';
               if (isset($_GET['error'])) {
                  if ($_GET['error'] == true) {
                     if (isset($_GET['form_null']) && $_GET['form_null'] == true) {
                        $message = "Form masih kosong";
                     }

                     if (isset($_GET['login']) && $_GET['login'] == false) {
                        $message = "Login gagal, silahkan ulangi";
                     }

                     if (isset($_GET['signup']) && $_GET['signup'] == false) {
                        $message = "Pendaftaran gagal, silahkan ulangi";
                     }
                  } else {
                     if (isset($_GET['signup']) && $_GET['signup'] == true) {
                        $message = "Pendaftaran berhasil, silahkan login";
                     }
                  } 
               }

               echo $message;
               ?></div>
            </div>
				
         </div>
			
      </div>

   </body>