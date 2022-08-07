<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Blog</title>
    <style>
        @import url("font-awesome/css/fontawesome-all.min.css");
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}
:root {
    --main-Color: rgb(0, 153, 255);
}
body {
    font-family: 'Open Sans', sans-serif;
}
.perant {
    position: absolute;
    top: calc(50% - 296px);
    left: calc(50% - 175px);
    width: 350px;
    min-height: 450px;
    border: 1px solid #777;
    padding: 4px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
}
.child {
    /* position: absolute; */
    width: 100%;
    height: 100%;
    border: 25px solid var(--main-Color);
    padding: 20px;
    display: flex;
    flex-direction: column;
    /* flex-wrap: nowrap; */
    align-items: center;
    border-radius: 5px;
    -webkit-border-radius: 5px;
}
.child h2 {
    font-size: 25px;
    font-weight: 600;
    color: #333;
    text-transform: capitalize;
    margin-bottom: 30px;
}
.child form {
    width: 90%;
    display: flex;
    flex-direction: column;
}
.input {
    /* border-bottom: 1px solid #cac9c9; */
    position: relative;
    margin-bottom: 25px;
    padding-bottom: 12px;
}
.input:not(:last-child) {
    border-bottom: 1px solid #cac9c9;
}
.input:nth-last-child(2) {
    margin-bottom: 15px;
}
.input:last-child {
    margin-bottom: 10px;
}
.child form input {
    border: 0;
    width: 100%;
    font-size: 15px;
    text-transform: capitalize;
    outline: none;
    padding-left: 25px;
}

/* .child form input::placeholder {
    padding-left: 25px;
} */
.child form .input:not(:last-child):before {
    font-family: 'Font Awesome 6 free';
    content: "\f023";
    font-weight: 900;
    position: absolute;
    color: #777;
    top: 3px;
    font-size: 15px;
}
.child form .input:nth-child(1)::before {
    content: "\f007";
}
.child form .input:nth-child(2)::before {
    content: "\f2b6";
}
.child form .input:focus-within::before  {
    display: none;
    /* visibility: hidden;  */
}
.child form input[type="submit"]{
    padding: 12px;
    background-color: var(--main-Color);
    color: white;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
}
.child .account {
    font-size: 13px;
    color: #444;
    color: rgb(59, 59, 59);
    border-bottom: 2px #cac9c9;
    border-bottom-style: dotted;
    width: 100%;
    text-align: center;
    margin-bottom: 25px;
    padding-bottom: 25px;
}
.child .account button.login {
    padding: 5px;
    border: 0px;
    background-color: white;
    font-weight: bold;
    text-transform: capitalize;
    /* color: var(--main-Color); */
}
.child .account button.login a {
    text-decoration: none;
    color: var(--main-Color);
}
.register-with {
    color: rgb(59, 59, 59);
    font-weight: bold;
    text-transform: capitalize;
    font-size: 14px;
}
ul.social {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}
ul.social a {
    margin-right: 15px;
    font-size: 30px;
}
i.fa-brands.fa-twitter-square {
    color: var(--main-Color);
}
i.fa-brands.fa-google-plus {
    color: rgb(204, 0, 0);
}
    </style>
</head>
<body>
<div class="perant">
        <div class="child">
            <h2>sign up</h2>
            <form action="signup-store" method='post'>
                @csrf
                <div class="input">
                    <input type="text" name="name" placeholder="name * " id="cutomer-name" value="">
                </div>
                <div class="input">
                    <input type="email" name="email" placeholder="email * ">
                </div>
                <div class="input">
                    <input type="password" name="password" placeholder="password * ">
                </div>
              
                <div class="input">
                    <input type="submit" value="Signup">
                </div>
            </form>
            <div class="account">
                have account?
                <button class="login"><a href="login">login here</a></button>
            </div>
            <div class="register-with">
                or register with
                <ul class="social">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                    <a href=""><i class="fa-brands fa-google-plus"></i></a>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>