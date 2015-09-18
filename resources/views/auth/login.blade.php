<!DOCTYPE html>
<html>
<head>
{!! Html::script('js/jquery-1.11.3.min.js') !!}   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="{!! url('css/login.css') !!}"> 
<title></title>
</head>
<body>
<head>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<div class="wrapper">
  <div class="background" >
 <img src="{!! url('images/login.jpg') !!}" height="100%" width="100%" >
  </div>
  <div class="auth opa">
    <div class="image-size" >
        <img src="{!! url('images/s.png') !!}" alt="" style="width:250px;height:200px;">
    </div>
    <div class="login-title">

        <h6 style="text-align:center"> <strong>Ingresar al Sistema</strong> </h6>

    </div>
    <form class="inputWrapper" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="user-icon"><i class="fa fa-user"></i></div>
        <input type="text" class="username" name="usuario" placeholder="Usuario"/>
      <div class="user-icon"><i class="fa fa-key"></i></div>
        <input type="password" class="password" name="password" placeholder="Clave"/>
        <button type="submit" class="btn btn-login" value="Login">Entrar</button>
     
    </form>
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