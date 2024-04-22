
<html>
    <head>
        <title>General voting system - Registratrion</title>
        <link rel="stylesheet" href="stylesheet1.css">
        <script>
        function redirectToExternalSite() {
            window.location.href = 'https://error404haha.pythonanywhere.com/' ,'_blank';
        }
    </script>
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>General Voting System</h1>  
            </div>
            <hr>
            <div class="wrapper">
                <div id="Registration">
                <h2>Registration</h2>
                </div>
                <form action="register.php" method="POST" enctype="multipart/form-data">
                    <div class="input-box">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    </div>
                    <div class="input-box">
                      <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    </div>
                    <div class="input-box">
                       <input type="password" name="pass" placeholder="Password" required>&nbsp
                    </div>
                    <div class="input-box">
                       <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    </div>
                    <div class="input-box">
                       <input  type="text" name="add" placeholder="Aadhaar No." required><br><br>
                    </div>
                        
                        Upload Candidate Symbol: <input type="file" id="profile" name="image" >
                    <br><br><br>

                    <button type="button" class="fbtn" type="button" id="captureFace" onclick="window.open('https://error404haha.pythonanywhere.com/', '_blank')">Face Capture</button><br><br><br>
                    
                    <div class="input-box">
                        Select your role:<br><br>
                        <select name="role" style="width: 50%; border: none; outline:none; border-radius: 20px; background:white ; font-size: 15px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                        </select><br>                   
                    </div><br>
                    <button  class ="rbtn" id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    <div id="new-user">Already user? <a href="index.php">Login here</a></div>
                </form>
            </div>
            </center>
    </body>
</html>
