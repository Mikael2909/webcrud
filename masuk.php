<?php 

require_once("config.php");

if(isset($_POST['daftar'])){

  //filter data
  $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
  //enkripsi password
  $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
  $password=password_hash($_POST["password"],PASSWORD_DEFAULT);


//Menyiapkan query
$sql="INSERT INTO register_login (username,email,password)VALUES(:username,:email,:password)";

$stmt=$db->prepare($sql);

//bind parameter ke query
$params=array(
":username" => $username,
":password" => $password,
":email" => $email
);

$saved=$stmt->execute($params);
if($saved) header("location:masuk.php");
}
?>

<?php 
session_start();
if(isset($_SESSION["masuk"])){
	header("Location:index.php");
	exit;
}

require_once("config.php");

if(isset($_POST['masuk'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM register_login WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            $_SESSION["masuk"]=true;
            // login sukses, alihkan ke halaman timeline
            header("Location: index.php");
            exit;
        }
    }
    $error=true;
}

?>


<html lang="en"><head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>Halaman Masuk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesome-bootstrap-checkbox/0.3.7/awesome-bootstrap-checkbox.min.css">
  
<style>
@import url(https://fonts.googleapis.com/css?family=Varela);
.login{

}
html {
  height: 100%;
}
body {
  font-family: 'Varela', sans-serif;
  font-size: 14px;
  line-height: 1.5;
  color: #333;
  min-height: 100%;
  position: relative;
  width:100%;
	height:100%;
	overflow:hidden;
}
label {
  margin-bottom: 0;
}

a {
  color: #e1e1e1;
}

a:focus,
a:hover {
  color: #008080;
}

.checkbox-inline+.checkbox-inline,
.radio-inline+.radio-inline {
  margin-top: 6px;
}

body.login {
  background: rgba(255, 255, 255, 1);
}

.relative {
  position: relative;
}
.switcher{
  margin-bottom:70px;
}
ul.switcher li{
	list-style-type: none;
	width:50%;
  position:absolute;
  top:0;
}
.first{
  left:0;
}
.second{
  right:0;
}
.login-container-wrapper {
  max-width: 400px;
  margin: 2% auto 5%;
  padding: 40px;
  box-sizing: border-box;
  background: rgba(57, 89, 116, 0.8);
  position: relative;
  box-shadow: 0px 30px 60px -5px #000;
  background-image:url('https://images.unsplash.com/photo-1610208311724-72e7baf69795?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
  background-size:cover;
  background-blend-mode:saturation;
}
.login-container-wrapper .logo,
.login-container-wrapper .welcome {
  font-size: 16px;
  letter-spacing: 1px;
}
.login-container-wrapper li {
  text-align: center;
  padding:0 15px;
  background-color: #283443;
  height:50px;
  line-height:50px;
  box-shadow: inset 0 -2px 0 0 #ccc;
  cursor:pointer;
}
.login-container-wrapper li a{
   color:#fff;
}
.login-container-wrapper li a:hover{
  color:#ccc;
  text-decoration:none;
}

.login-container-wrapper li a:active,
.login-container-wrapper li a:focus{
  color:#fff;
  text-decoration:none;
}
.login-container-wrapper li.active{
  background-color:transparent;
  box-shadow:none;
}
.login-container-wrapper li.active a{
  border-bottom:2px solid #fff;
  padding-bottom:5px;
}

.login input:focus + .fa{
  color:#25a08d;
}
.login-form .form-group {
  margin-right: 0;
  margin-left: 0;
}

.login-form i {
  position: absolute;
  top: 0;
  left: 19px;
  line-height:52px;
  color: rgba(40, 52, 67, 1);
  z-index:100;
  font-size:16px;
}

.login-form .input-lg {
  font-size: 16px;
  height: 52px;
  padding: 10px 25px;
  border-radius: 0;
}

.login input[type="username"],
.login input[type="email"],
.login input[type="password"],
.login input:focus {
  background-color: rgba(40, 52, 67, 0.75);
  border: 0px solid #4a525f;
  color: #eee;
  border-left: 45px solid #93a5ab;
  border-radius:40px;
}

.login input:focus {
  border-left: 45px solid #eee;
}

input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
  background-color: rgba(40, 52, 67, 0.75)!important;
  background-image: none;
  color: rgb(0, 0, 0);
  border-color: #FAFFBD;
}

.login .checkbox label,
.login .checkbox a {
  color: #ddd;
  vertical-align: top;
}
input[type="checkbox"]:checked + label::before,
.checkbox-success input[type="radio"]:checked + label::before {
    background-color: #25a08d !important;
}
.btn-success {
  background-color: #25a08d;
  background-image: none;
  padding: 8px 50px;
  margin-top:20px;
  border-radius: 40px;
  border: 1px solid #25a08d;
  -webkit-transition: all ease 0.8s;
  -moz-transition: all ease 0.8s;
  transition: all ease 0.8s;
}

.btn-success:focus,
.btn-success:hover,
.btn-success.active,
.btn-success.active:hover,
.btn-success:active:hover,
.btn-success:active:focus,
.btn-success:active {
  background-color: #25a08d;
  border-color: #25a08d;
  box-shadow: 0px 5px 35px -5px #25a08d;
  text-shadow:0 0 8px #fff;
  color: #FFF;
  outline:none;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


<script async="" src="/cdn-cgi/bm/cv/669835187/api.js"></script></head>

<body translate="no" class="login">
  
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<ul class="switcher clearfix">
				<li class="first logo active" data-tab="login">					
						<a>Login</a>			
				</li>
				<li class="second logo" data-tab="sign_up">
						<a>Sign Up</a>	
				</li>
			</ul>
  
			<div class="tab-content">
				<div class="tab-pane active" id="login">
					<form class="form-horizontal login-form" method="post">
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_username" placeholder="username" required="" type="username" name="username"> <i class="fa fa-user"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_password" placeholder="Password" required="" type="password" name="password"> <i class="fa fa-lock"></i>
						</div>
						<div class="form-group">
							<button class="btn btn-success btn-lg btn-block" type="submit" name="masuk">MASUK</button>
						</div>
						
					</form>
				</div>
				<div class="tab-pane" id="sign_up">
					<form class="form-horizontal login-form" method="post">
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_username" placeholder="username" required="" type="username" name="username"> <i class="fa fa-user"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_password" placeholder="Password" required="" type="password" name="password"> <i class="fa fa-lock"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" id="email" placeholder="E-mail" required="" type="email" name="email"> <i class="fas fa-envelope"></i>
						</div>
						<div class="form-group">
							<button class="btn btn-success btn-lg btn-block" type="submit" name="daftar">DAFTAR</button>
						</div>
					
					</form>
        
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">(function(){window['__CF$cv$params']={r:'6199a86069e422f0',m:'abdf6799f4d3cc6d9509fb70c66c50c0e114ea77-1611993611-1800-AVDU2fx4YLoj8ft0O0z8qL0LWFVRtS7v/ssHLHP60V1I2n+YwGYEBQ+XE7tDWDvWtjFGZVCuJ7OtQSEj74nTx1ixumWtSC+wTj34kt87QZk3UukzYPf7JRp0zcpdIi4GRYt2fQPWFyqvothLrrHpy4A=',s:[0xfd130a1f11,0x606370b0e5],}})();</script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script id="rendered-js">
$(document).ready(function () {

  $('ul.switcher li').click(function () {
    var tab_id = $(this).attr('data-tab');

    $('li').removeClass('active');
    $('div.tab-pane').removeClass('active');

    $(this).addClass('active');
    $("#" + tab_id).addClass('active');
  });

});
//# sourceURL=pen.js
    </script>
    <script>
    $('.alert').alert();
    </script>
  <?php 
if(isset($error)):
?>
<div class="alert alert-danger text-center" role="alert">
 Username/password salah
</div>
<?php endif;?>
  




 
</body></html>