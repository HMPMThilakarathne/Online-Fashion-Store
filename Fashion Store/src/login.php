<?php
	include_once "config.php";
	
?>
<?php
		session_start();
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			$UN = $_POST["un"];
			$pw = $_POST["pw"];
			
			$u = "SELECT user_name , password FROM customer_details";
			$result1 = $conn->query($u);
			while($P = $result1->fetch_assoc()){
				$x = $P["username"];
				$y = $P["password"];

				if($UN == $x && $pw == $y){
					$_SESSION['logged_user'] = $UN;
					header("Location:a.php");
				}
				else {"<script>alert('username or password is incorrect') </script>";
				}
				}
			}
		
?>
<!DOCTYPE html> 
<html>
<head>
	<script src = "js/userprof.js"></script>
	<title>SHADES:My profile</title>
	<link rel = "stylesheet" type ="text/css" href = "style/n.css">
</head>
<body>

<div class = "main1">
	<div id = "main">
	<div class = "grid1">
		<div class = "gridsub1">
			<img src = "Images/logoo.png">
		</div>

		<div class = "gridsub2">
			<div class = "position">
				<div class = "topnavi">
						<a href = "#">Home</a>
						<a href = "#">About Us</a>
						<a href = "#">Contact Us</a>
						<a href = "#">Career</a>
						<a href = "#">Vision</a>
				</div>
			</div>			
		</div>
		<div class = "gridsub3">
				<div class = "topnavi">
					<a href = "#" class = "log">Log-Out</a>
				</div>
		</div>
	</div></br></br>	
	<div class = "grid2">
		<div class = "gridsub4">
			<span onclick="openside()" style="color:aliceblue;font-size:30px;cursor:pointer">&#9776;</span>

		</div>
		<div class = "gridsub5">
			<input type = " text " id ="ser-box" placeholder="Search thigs , Brands & more">
			<input type = "submit" class= "topnavi" id = "submitbut" value ="Search">
		</div>
	</div>
	</div>
</div>
	
		

	<div class = "sidenavi" id = "myside">
		<a href="javascript:void(0)" class="closebt" onclick="closenavi()">&times;</a>
		<a href="#">Men</a><br/><br/><br/>
		<a href = "#">Women</a><br/><br/><br/>
		<a href ="#">Kids</a><br/><br/><br/>
		<a href = "#">Others</a><br/><br/><br/>
				
	</div>
                    <hr>
                    <div class="grid" width="50px">
                        <div class="grid-box" >
                
                            <h2>New to Shades</h2>
                            <p>If you are a new SHADES Online Customer please fill the following form with your own correct details.By creating an account with SHADES you can now shop faster and easier.Track the status of your shopping cart and be entitled to be a fabulous account holder benifits.
                            </p>
                            <br><br>
                            <input type="button" class="sign" value="Sign Up"> 
                        </div>
                        <div class="grid-box">
                            <form method="POST" action="" onsubmit="return enableButton()">
                                <h3>Registered Customer</h3>
                                <p>If you have already registered as an SHADES online Customer,please log in:</p>
                                <p></p>
                                <label for ="mail" class ="txt" >Email</label><input type="email" class="margin" id="eml" name = "un" placeholder="abc@gmail@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                <br><br>
                                <lable for="password" class="txt">Password</lable><input type="password" class="margin" id="pwd" name = "pw" pattern=".*[a-z])(?=.*[A-Z]).{8,}" required>
                                <br><br><br><br>
                                <input type ="submit" class="sign" value="Sign-in"  id="submitBtn">
                                <a href="password.html">
                                <span class="psw">Forgot password? </a></span>
                                </a>
                
                            </form>
                        </div>
                
                    </div>
                    <footer>
				
                        <div class = "ftr">
                            <div class = "ftr1">
                                    <div>
                                    <h2 class = "Follow">Follow us on</h2>
                                    </div>
                                    <div class = wrap-sub>
                                        <div class = "wbox1">
                                                <a href = "https://www.facebook.com">
                                                <img src = "../IWT project/Images/fb.png" class = "imglogo">
                                                </a>
                                        </div>
                
                                        <div class = "wbox2">
                                                <a href = "https://www.instagram.com">
                                                <img src = "Images/insta.png" class = "imglogo">
                                                </a>
                                        </div>
                
                                        <div class = "wbox3">
                                                <a href = "https://twitter.com">
                                                <img src = "Images/twit.png" class = "imglogo">
                                                </a>
                                        </div>
                
                                        <div class = "wbox4">
                                                <a href = "https://www.youtube.com">
                                                <img src = "Images/utube.png"class = "imglogo">
                                                </a>
                                                
                                        </div>
                                        <br/>
                                        
                                    </div>
                                </div>
                            </div><br/>
                            </div>
                            <div>
                                <p class = "cpy">Copyright 2019@SHADES</p>z
                            </div>
                        </div>
                    </footer>
                </div>
            
                
            </body>
            </html>