@extends('layout')
@section('content')
<nav class="navbar bg-dark navbar-expand-sm">
        <div class="container">
        <i href="" class="navbar-brand" style="color:white;padding-left:33rem">SITE ÉPICO</i>
            <div class="collapse navbar-collapse">
            <div class="navbar-nav">
             </div>
            </div>
        </div>
</nav>

<div class="row">
 <div class="col-md-6 col-sm-6 text-center imagem">
 <a href="#" class="img-thumbnail logo">
 <img class="img-fluid"  src="{{asset('storage/imagem/num.jpg')}}"/>
 </a>
 </div>
</div>

<div class ="col-md-6 col-sm-6 text-center imagem">
   <div class="jumbotron" style="Background-color:black">
  <h1 class="display-4"></h1>
  <p class="lead" style="color:white">Quiz silmarrillion</p>
  <hr class="my-4">
  <p style="color:white">O melhor quiz do site!!!!!!!</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Comece seu quiz</a>
</div>
</div>

 @endsection