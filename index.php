<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="stylesheet1.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>General Voting System</h1>  
            </div>
            <hr>
          <div class="wrapper">
             <div id="loginSection">
                <div id="login">
                    <h2>Login</h2><br>
                </div>
                <form action="login.php" method="POST">
                   <div class="input-box">    
                      <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                </div> 
                <div class="input-box"> 
                <input type="password" name="pass" placeholder="Enter password" required><br><br>
                </div>

                <button type="button" class="fbtn" type="button" id="captureFace" onclick="window.open('https://error404haha.pythonanywhere.com/', '_blank')">Face Capture</button><br><br><br>

                <div class="input-box">    
                    <select name="role" style="width: 50%; border: none; outline:none; border-radius: 20px; background:white ; font-size: 15px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select><br><br> 
                </div>                 
                    <button class="rbtn" id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    <div id="new-user">New user? <a href="register(1).php">Register here</a></div>
                </form>
             
            </div>
          </div>
            </center> 
    </body>
</html>