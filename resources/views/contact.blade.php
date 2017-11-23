@extends('layout.app')
@section('content')
<h2>Contact us</h2>
{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">
    {{Form::label('Name', 'Name')}}
    {{ Form::text('username','',['class'=>'form-control','placeholder'=>'Enter name'])}}
   
</div>
<div class="form-group">
  
    {{Form::label('Email', 'Email')}}
    {{ Form::email('useremail','',['class'=>'form-control','placeholder'=>'Enter Email'])}}
</div>
<div class="form-group">
  
    {{Form::label('message', 'Message')}}
    {{ Form::textarea('usermessage','',['class'=>'form-control','placeholder'=>'Enter Message'])}}
</div>
<div class="">
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection