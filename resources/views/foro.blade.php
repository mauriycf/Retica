@extends('layouts.principal')

@section('content')

<section id="banner">

</section>

<div class="content">
    <div class="col">
        <div class="row">
            <h3><a href="">Oportunidades de Estudio</a></h3>
            <p><a href="">Lorem ipsum dolor sit amet, .</a></p>
        </div>
        <div class="row">
            <h3><a href="">Lorem ipsum dolor.</a></h3>
            <p><a href="">Lorem ipsum dolor sit amet.</a></p>
        </div>
        <div class="row">
            <h3><a href="">Lorem ipsum dolor.</a></h3>
            <p><a href="">Lorem ipsum dolor sit amet, consectetur.</a></p>
        </div>
        <div class="row">
            <h3><a href="">Lorem ipsum dolor.</a></h3>
            <p><a href="">Lorem ipsum dolor sit amet, consectetur.</a></p>
        </div>
        <div class="row">
            <h3><a href="">Lorem ipsum dolor.</a></h3>
            <p><a href="">Lorem ipsum dolor sit amet, consectetur.</a></p>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div id="c-slider">
                <div id="slider">
                    <section>
                        <img src="images/image1.jpg" alt="">
                    </section>
                    <section>
                        <img src="images/images2.jpg" alt="">
                    </section>
                    <section>
                        <img src="images/images3.jpg" alt="">
                    </section>
                    <section>
                        <img src="images/images4.jpg" alt="">
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="main-container">
  <div class="row">
    <div class="post">
      <article class="post clearfix">
        <div class="cintillo"></div>
  		<div class="header-info">
  		@include('alerts.errors')
			<h1>Inicia Sesion</h1>
			{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
			<div class="form-group">
				{!!Form::label('correo','Correo:')!!}	
				{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
			</div>
				<div class="form-group">
					{!!Form::label('contrasena','Contraseña:')!!}	
					{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
				</div>
				{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</div>
      </article>
    </div>
        <div class="col">
      <aside id="aside">
        <div class="cintillo-aside"></div>
          <h3>Categorias</h3>
          <div class="grupo">
            <ul>
              <li><a href="#">Olvidaste tu contraseña?</a></li>
              <li><a href="#">Información sobre el foro</a></li>
              <li><a href="#">Comunidad del foro</a></li>
              <li><a href="#">Ir a index</a></li>
            </ul>
          </div>
      </aside>
    </div>
  </div>
</section>



@stop