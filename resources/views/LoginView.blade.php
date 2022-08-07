<style>
    *, *::before, *::after { box-sizing: border-box; } body { margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: 400; color: #666666; background: #eaeff4; } .wrapper { margin: 0 auto; width: 100%; max-width: 1140px; min-height: 100vh; display: flex; align-items: center; justify-content: center; flex-direction: column; } .container { position: relative; width: 100%; max-width: 600px; height: auto; display: flex; } .credit { position: relative; margin: 25px auto 0 auto; width: 100%; text-align: center; color: #666666; font-size: 16px; font-weight: 400; } .credit a { color: #222222; font-size: 16px; font-weight: 600; } /* * * * * Login CSS * * * * */ h2 { position: relative; margin: 0 0 15px 0; padding-bottom: 10px; font-size: 22px; font-weight: 700; } h2::after { position: absolute; content: ""; left: 0; bottom: 0; width: 30px; height: 2px; background: #666666; } p { margin: 0 0 20px 0; text-align: left; color: #666666; font-size: 15px; } p:last-child { margin: 0; } p a { color: #44c7f5; font-size: 14px; text-decoration: none; } .col-left, .col-right { position: relative; width: calc(50% - 1px); padding: 45px; display: flex; } .col-left { margin-right: 2px; background: #ffffff; -webkit-clip-path: polygon(0 0, 100% 5%, 100% 100%, 5% 95%); clip-path: polygon(0 0, 100% 5%, 100% 100%, 5% 95%); } .col-right { background: #ffffff; -webkit-clip-path: polygon(0 5%, 100% 0, 95% 95%, 0 100%); clip-path: polygon(0 5%, 100% 0, 95% 95%, 0 100%); } @media(max-width: 575.98px) { .container { flex-direction: column; } .col-left, .col-right { width: 100%; margin: 0; padding: 30px; -webkit-clip-path: none; clip-path: none; } .col-right { padding-top: 0; } } .login-form, .login-social { position: relative; width: 100%; } .login-form input { display: block; width: 100%; height: 35px; padding: 0; outline: none; border-bottom: 1px solid; border-color: transparent transparent #44c7f5 transparent; font-size: 16px; } .login-form input:focus { border-color: transparent transparent #ff574e transparent; } .btn { position: relative; display: inline-block; width: 100%; margin-bottom: 15px; padding: 15px 0; text-align: center; color: #ffffff; font-size: 16px; font-weight: 600; letter-spacing: 1px; text-decoration: none; background: #44c7f5; border: none; border-radius: 0; cursor: pointer;; transition: .3s; -webkit-transition: .3s; } .btn:hover { box-shadow: 0 0 10px rgba(0, 0, 0, .5); } .btn.btn-go { background: #CF2C1F; } .btn.btn-fb { background: #4064AC; } .btn.btn-tw { background: #1C9CEB; }
</style>
<link rel = "icon" href = "https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type = "image/x-icon">
<title>My-Blog</title>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-form">
        <h2>Login</h2>
        <form action="login-Auth" method='post'>
          @csrf
          <p>
            <input type="email" name='email' placeholder="Email" required>
          </p>
          <p>
            <input type="password" name='password' placeholder="Password" required>
          </p>
          <p>
            <input class="btn" type="submit" value="Sing In" />
          </p>
          <p>
            <a href="">Forget Password?</a>
          </p>
        </form>
      </div>
    </div>
    <div class="col-right">
      <div class="login-social">
        <h2>Login with</h2>
        <a class="btn btn-go" href="login-With-Google">Google</a>
        <a class="btn btn-fb" href="facebook-login">Facebook</a>
        <a class="btn btn-tw" href="">Twitter</a>
      </div>
    </div>
  </div>
  <div class="credit">
    Login Panel <a href="https://htmlcodex.com">My-Blog</a>
  </div>
</div>