<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login | Ludiflex</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background-color: green;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.box{
    display: flex;
    flex-direction: row;
    position: relative;
    padding: 60px 20px 30px 20px;
    height: 620px;
    width: 350px;
    background-color: white ;
    border-radius: 30px;
    -webkit-backdrop-filter: blur(15px);
    backdrop-filter: blur(15px);
    border: 3px solid rgba(255, 255, 255, 0.2);
    overflow: hidden;

}
.box-login{
    position: absolute;
    width: 85%;
    left: 27px;
    transition: .5s ease-in-out; 
}
.box-register{
    position: absolute;
    width: 85%;
    right: -350px;
    transition: .5s ease-in-out; 
}
.top-header{
    text-align: center;
    margin: 30px 0;
}
.top-header h3{
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 8px
}
.input-group{
    width: 100%;
}
.input-field{
    margin: 12px 0;
    position: relative;
}
.input-box{
    width: 100%;
    height: 50px;
    font-size: 15px;
    color: #040404;
    border: none;
    border-radius: 10px;
    padding: 7px 45px 0 20px;
    background: rgba(224, 223, 223, 0.6);
    backdrop-filter: blur(2px);
    outline: none;
}
.input-field label{
    position: absolute;
    left: 20px;
    top: 15px;
    font-size: 15px;
    transition: .3s ease-in-out;
}
.input-box:focus ~ label,.input-box:valid ~ label{
    top: 2px;
    font-size: 10px;
    color: #c12828;
    font-weight: 500;
}

.eye-area{
    position: absolute;
    top: 25px;
    right: 25px;
}
.eye-box{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
i{
    position: absolute;
    color: #444444;
    cursor: pointer;
}
#eye,#eye-2{
    opacity: 1;
}
#eye-slash,#eye-slash-2{
    opacity: 0;
}

.remember{
    display: flex;
    font-size: 13px;
    margin: 12px 0 30px 0;
    color: #000;
}
.check{
    margin-right: 8px;
    width: 14px;
}
.input-submit{
    width: 100%;
    height: 50px;
    font-size: 15px;
    font-weight: 500;
    border: none;
    border-radius: 10px;
    background: #bc6202;
    color: #fff;
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.145);
    cursor: pointer;
    transition: .4s;
}
.input-submit:hover{
    background: #db3e00;
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.32);
}
.forgot{
    text-align: center;
    font-size: 13px;
    font: 500;
    margin-top: 40px;
}
.forgot a{
    text-decoration: none;
    color: #000;
}
.switch{
    display: flex;
    position: absolute;
    bottom: 50px;
    left: 25px;
    width: 85%;
    height: 50px;
    background: rgba(255, 255, 255, 0.16);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.switch a{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    font-weight: 500;
    color: #000;
    text-decoration: none;
    width: 50%;
    border-radius: 10px;
    z-index: 10;
}
#btn{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 145px;
    height: 50px;
    background: #cccccd;
    border-radius: 10px;
    box-shadow: 2px 0px 12px rgba(0, 0, 0, 0.1);
    transition: .5s ease-in-out;
}
</style>
<body>
    
 <div class="container">
    <div class="box">
        <!------------------ Login Box --------------------->
        <div class="box-login" id="login">

            <div class="top-header">
                <h3>Hello, Again</h3>
                <small>We are happy to have you back.</small>
            </div>
            <div class="input-group">
                <div class="input-field">
                    <input type="text" class="input-box" id="logEmail" required>
                    <label for="logEmail">Email address</label>
                </div>
                <div class="input-field">
                    <input type="password" class="input-box" id="logPassword" required>
                    <label for="logPassword">Password</label>
                     <div class="eye-area">
                            <div class="eye-box" onclick="myLogPassword()">
                                <i class="fa-regular fa-eye" id="eye"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                            </div>
                     </div>
                </div>
                <div class="remember">
                    <input type="checkbox" id="formCheck" class="check">
                    <label for="formCheck"> Remember Me</label>
                </div>
                <div class="input-field">
                    <input type="submit" class="input-submit" value="Sign In">
                </div>
                <div class="forgot">
                    <a href="#">Forgot password?</a>
                </div>
            </div>

        </div>

     <!-------------------- Register --------------------------->
      
     <div class="box-register" id="register">

        <div class="top-header">
            <h3>Sign Up, Now</h3>
            <small>We are happy to have you with us.</small>
        </div>
        <div class="input-group">
            <div class="input-field">
                <input type="text" class="input-box" id="regUser" required>
                <label for="regUser">Username</label>
            </div>
            <div class="input-field">
                <input type="text" class="input-box" id="regEmail" required>
                <label for="regEmail">Email address</label>
            </div>
            <div class="input-field">
                <input type="password" class="input-box" id="regPassword" required>
                <label for="regPassword">Password</label>
                 <div class="eye-area">
                        <div class="eye-box" onclick="myRegPassword()">
                            <i class="fa-regular fa-eye" id="eye-2"></i>
                            <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                        </div>
                 </div>
            </div>
            <div class="remember">
                <input type="checkbox" id="formCheck-2" class="check">
                <label for="formCheck-2"> Remember Me</label>
            </div>
            <div class="input-field">
                <input type="submit" class="input-submit" value="Sign In">
            </div>
            
        </div>

    </div>

    <!------------------------ Switch -------------------------->
      
    <div class="switch">
        <a href="#" class="login" onclick="login()">Login</a>
        <a href="#" class="register" onclick="register()">Register</a>
        <div class="btn-active" id="btn"></div>
    </div>

    </div>
 </div>
 <div class="form-item form-type-radios form-item-type-acc">
                                            <label for="edit-type-acc">Loại tài khoản <span class="form-required" title="This field is required.">*</span></label>
                                            <div id="edit-type-acc" class="form-radios">
                                                <div class="form-item form-type-radio form-item-type-acc">
                                                    <input type="radio" id="edit-type-acc-1" name="type_acc" value="2" class="form-radio"> <label class="option" for="edit-type-acc-1">Gia sư </label>
                                                </div>
                                                <div class="form-item form-type-radio form-item-type-acc">
                                                    <input type="radio" id="edit-type-acc-0" name="type_acc" value="3" class="form-radio"> <label class="option" for="edit-type-acc-0">Học viên </label>
                                                </div>
                                                <div class="errTypeAcc" style="color: red;"></div>
                                            </div>
                                        </div>
<script>

     var x = document.getElementById('login');
     var y = document.getElementById('register');
     var z = document.getElementById('btn');
 
     function login(){
        x.style.left = "27px";
        y.style.right = "-350px";
        z.style.left = "0px";
     }
     function register(){
        x.style.left = "-350px";
        y.style.right = "25px";
        z.style.left = "150px";
     }

   // view password codes
   
   
   function myLogPassword(){

    var a = document.getElementById('logPassword');
    var b = document.getElementById('eye');
    var c = document.getElementById('eye-slash');

    if(a.type === "password"){
        a.type = "text"
        b.style.opacity = "0";
        c.style.opacity = "1";

    }else{    
        a.type = "password"
        b.style.opacity = "1";
        c.style.opacity = "0";

    }

   }
   
   
   function myRegPassword(){

var d = document.getElementById('regPassword');
var b = document.getElementById("eye-2");
var c = document.getElementById("eye-slash-2");

if(d.type === "password"){
    d.type = "text"
    b.style.opacity = "0";
    c.style.opacity = "1";

}else{    
    d.type = "password"
    b.style.opacity = "1";
    c.style.opacity = "0";

}

}
</script>
</body>
</html>