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
                    <h2>Admin Login</h2><br>
                </div>
                <form action="admlogin.php" method="POST">
                   <div class="input-box">    
                      <input type="number" name="mobile1" placeholder="Enter mobile" required><br><br>
                </div> 
                <div class="input-box">
                       <input  type="text" name="aadhaar1" placeholder="Aadhaar No." required><br><br>
                    </div>
                <div class="input-box"> 
                <input type="password" name="password1" placeholder="Enter password" required><br><br>
                </div>



                               
                    <button class="rbtn" id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    <div id="new-user">back?<a href="register(1).php">Register here</a></div>
                </form>
             
            </div>
          </div>
            </center> 
    </body>
</html>