<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
margin:0;
padding: 0;
    box-sizing: border-box;
}
p {
    font-size:14px;
}
html{
height: 100%;
}
body{
    font-family: 'Segoe UI', sans-serif;;
    font-size: 1rem;
    line-height: 1.6;
height: 100%;
}
.wrap {
width: 100%;
height: 100%;
display: flex;
    justify-content: center;
    align-items: center;
background: #fafafa;
}
.login-form{
width: 550px;
margin: 0 auto;
border: 1px solid #ddd;
padding: 2rem;
background: #ffffff;
}
.form-input{
background: #fafafa;
border: 1px solid #eeeeee;
padding: 12px;
width: 100%;
}
.form-group{
    margin-bottom: 1rem;
}
.form-button{
background: #07132e;
border: 1px solid #ddd;
color: #ffffff;
padding: 10px;
border-radius:5px;
width: 100%;
    text-transform: uppercase;
}
.form-button:hover{
background: #000000;
}
.form-header{
    text-align: center;
    margin-bottom : 2rem;
}
.form-footer{
    text-align: center;
}
</style>
</head>
<body>


<div class="wrap">
<form class="login-form" action = "authenticate.php" method = "post">
<div class="form-header">
<p>Welcome to the Plus Health Portal.</p>
</div>
<!--Email Input-->
<div class="form-group">
<input type="text" class="form-input" placeholder="Username"  name="username" required>
</div>
<!--Password Input-->
<div class="form-group">
<input type="password" class="form-input" placeholder="Password" name="password" required>
</div>
<div class="form-group">
<p> Already have an account?  <a href="login.php">Sign Up<a/> </p>
</div>
<!--Login Button-->
<div class="form-group">
<button class="form-button" type="submit">Login</button>
</div>
<div class="form-footer">
</div>
</form>
</div><!--/.wrap-->
</body>
</html>
