@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset')}}">
</form>
{!! Form::open(['url'=>'/password/reset', 'class'=>'form-horizontal']) !!}

<input type="hidden" name="token" value="{{ $token }}">


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
{!! Form::label('email', 'Alamat Email',['class'=>'col-md-4 control-label']) !!}
<div class="col-md-6"> 
{!! Form::email('email', null, ['class'=>'form-control'])!!}
{!! $errors->first('email','<p class="help-block">:messege</p>')!!}
</div>
</div>

<div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
{!! Form::label('password','Password',['class'=>'col-md-4 control-label'])!!}
<div class="col-md-6">
{!! Form::password('password', ['class'=>'form-control'])!!}
{!! $errors->first('password','<p class="help-block">:messege</p>')!!}
</div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
{!! Form::label('password_confirmation','konfirmasi password',['class'=>'col-md-4 control\-label'])!!}
<div class="col-md-6">
{!! Form::password('password_confirmation',['class'=>'form-control'])!!}
{!! $errors->first('password_comfirmation','<p class="help-block">:message</p>')!!}
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
<i class="fa fa-btn fa-refresh"></i> Reset password
</button>
</div>
</div>
{!! Form::close() !!}