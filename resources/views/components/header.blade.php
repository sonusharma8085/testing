<div>
<!DOCTYPE html>
<html>
<head>
    <title>My-Blog</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body{
  margin: 0;
  background-color: #303030;
  font-family: 'Scada', 'Sans-serif';
  font-weight: 400;
}
.header{
  border: 1px solid black;
  background-color: #008080;
  margin: 0;
}
  
.inner-header{
  width: 85%;
  margin: 0 auto;
}
.header::after{
  clear: both;
  display: table;
  content: '';
}



/* Logo */
.logo{
  float: left;
  padding: 5px 0;
}
.logo img{
  float: left;
}





/* Nav*/
.nav{
  float: right;
}

.nav ul{
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.nav li{
  position: relative;
  display: inline-block;
  margin-left: 60px;
  padding: 30px 0px 30px 0px;
  width: 90px;
  text-align: center;
}

.nav li a {
  text-decoration: none;
  color: #303030; 
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}

.nav li a:hover{
  color: #000000;
}

.nav li a:before{
  content: '';
  display: block;
  width: 0%;
  height: 5px;
  background-color: #000000;
  position: absolute;
  top: 0;
  transition: .3s;
}

.nav li a:hover::before{
  width: 100%;
}

.nav li a:after{
  content: '';
  display: block;
  width: 0%;
  height: 2px;
  background-color: #000000;
  position: absolute;
  bottom: 0;
  transition: .3s;
  right: 0;
}
.nav li a:hover::after{
  width: 100%; 
}



 
</style>
</head>
<body>

<div class="header">
    <div class="inner-header">
    <div class="logo">
      <img src="http://dhullumahto.com/wp-content/uploads/2017/08/web-logo-md.png" width="70px" height="70px">
    </div>

    <div class="nav">
      <ul>
        <li><a href="home">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li nowrap><a href="{{url('post')}}" >Posts</a></li>
        <li><a href="{{url('file-upload')}}">Uploads</a></li>
        @if(!Auth::user()->name == "")

          <li><a href="{{'logout'}}">Logout</a></li>
        @else
          <li><a href="{{'login'}}">Login</a></li>

        @endif

      </ul>
    </div>
    </div>
  </div>

</div>