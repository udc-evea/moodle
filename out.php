<?php header_remove('X-Frame-Options');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" >
	<head profile="http://purl.org/NET/erdf/profile">
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<link rel="schema.dc" href="http://purl.org/dc/elements/1.1/" />
		<link rel="schema.foaf" href="http://xmlns.com/foaf/0.1/" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Aula Virtual - Universidad del Chubut</title>
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
      div.navbar {
          opacity: 0.9; /* opacity [0-1] */
          -moz-opacity: 0.9; /* opacity [0-1] */
          -webkit-opacity: 0.9; /* opacity [0-1] */
      }
    </style>
    <script src="/jquery/js/jquery.min.js" type="text/javascript"></script>
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">
      var x=location.href.split('?'); u='';
      if(x.length>1){
        x.shift();
        u=x.join('?');
      }
    </script>
	</head>
	<body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
            <p class="navbar-text pull-left">Estás visitando el <strong>Aula Central</strong>. Por motivos de seguridad, puede que te solicitemos ingresar nuevamente tu usuario y contraseña.</p>
            <div class="btn-group pull-right">
              <a href="/moodle" id="volver_local" data-toggle="tooltip" data-placement="bottom" class="btn show-tooltip" title="Volver al aula local"><i class="icon icon-home"></i></a>
              <a href="#" id="cerrar_aviso" data-toggle="tooltip" data-placement="bottom" class="btn show-tooltip" title="Cerrar aviso"><i class="icon icon-remove"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <iframe id="external" src="about:blank" frameborder="0" width="100%"></iframe>
          <script type="text/javascript">
            if(u){
              document.getElementById('external').src=u;
            }else{
              location.href='/moodle';
            }
            $(window).bind('resize',function(){
              var f=document.getElementsByTagName('iframe')[0];
              f.style.height=(document.documentElement.clientHeight - f.offsetTop)+'px'});
              $(window).trigger('resize')
            
            $(function(){
              $("a#cerrar_aviso").on("click", function(){
               location.href=$("#external").attr("src"); 
              });
              
              $("a.show-tooltip").tooltip();
            });
          </script>
        </div>
      </div>
    </div>
	</body>
</html>
