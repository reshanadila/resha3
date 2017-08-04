@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lupa Password</div>
                <div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email')}}">
</form>
{!! Form::open(['url'=>'/password/email', 'class'=>'form-horizontal']) !!}

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
{!! Form::label('email', 'Alamat Email',['class'=>'col-md-4 control-label']) !!}
<div class="col-md-6"> 
{!! Form::email('email', null, ['class'=>'form-control'])!!}
{!! $errors->first('email','<p class="help-block">:messege</p>')!!}
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
<i class="fa fa-btn fa-envelope-in"></i> Kirim Link reset password
</button>
</div>
</div>