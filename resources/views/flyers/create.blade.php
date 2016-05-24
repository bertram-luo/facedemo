@extends('layouts.app')
@section('content')
<div class="container">
   <h1> Selling your home</h1>
   <hr>
   <form method="POST" enctype="multipart/form-data" action="/flyers">
       @include ('flyers.form')
       @if(count($errors) > 0 )
           <div class="alert alert-danger">
               <ul>
          		   @foreach($errors->all() as $error)
                       <li> {{ $error }} </li>
                   @endforeach
               </ul>
           </div>
       @endif
   </form>
</div>
@stop
