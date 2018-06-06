<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body><

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<p>
    {{ $errors->first('name') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('name', 'Nom') }}
    {{ Form::text('name', Input::old('name'), array('placeholder' => 'Dupont')) }}
</p>

<p>
    {{ Form::label('password', 'Mot De Passe') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Connexion') }}</p>
{{ Form::close() }}
