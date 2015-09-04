<!DOCTYPE html>
<html>
<head>
{!! Html::script('js/jquery-1.11.3.min.js') !!}   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="/css/login.css"> 
<title></title>
</head>
<body>
<head>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<div class="wrapper">
  <div class="background"></div>
  <div class="auth opa">
     <div class="image-size" >
     <img src="/images/s.png" alt="" style="width:250px;height:200px;">
    </div>
    <div class="login-title">
    </br>
      <h3> <strong>SysTransbarca - Bienvenido(a)</strong> </h3>
    </div>
    <div class="inputWrapper" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="user-icon">
      <i class="fa fa-user"></i>
      </div>
      <input type="text" class="username" name="usuario" placeholder="Ingrese su Usuario"/>
      <div class="user-icon">
      <i class="fa fa-key"></i>
      </div>
      <input type="password" class="password" name="password" placeholder="Ingrese su Contraseña"/>
      <button type="submit" class="btn btn-login" value="Login">Entrar</button>
      <div class="forget">
        <p style="color:white"><input type="checkbox" name="remember"> Recordarme</p>
        <p><span><a href="{{ url('changepassword') }}">Recuperar Contraseña</a></span></p>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
   $(document).ready(function() {
        
    var $auth = $('.auth');
    var $loginButton = $('.btn');
    var $backButton = $('.bottom-button');
    $loginButton.click(function(){      
        $(this).toggleClass('loading');       
        $auth.removeClass('opa');      
        $backButton.removeClass('back');                         
  setTimeout(function() {
          location.href='home';
    $menu.fadeIn(200);
    $('.diamond').fadeIn(200);
   },1000);                                
  });
  
  var $s = $('.s');
    var $line = $('.line');
  var $menu = $('.menu');


  $backButton.click(function() {
    $(this).addClass('back');
    $s.removeClass('spread');
    $line.removeClass('open');
    
    $auth.addClass('opa');   
    $auth.removeClass('close'); 
    $loginButton.removeClass('loading');
    $('.nav-menu').removeClass('open');
  });
  
  
  $menu.click(function() {
    $line.toggleClass('open');
    $s.toggleClass('spread');
    $('.nav-menu').toggleClass('open');
  });
});

</script>
</html>