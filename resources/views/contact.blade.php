@extends('layouts.app')


@section('content')
<h1>Contact Us</h1>

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name','',  ['class' => 'form-control', 'placeholder' => 'Your Name']) }}
    </div>
    <div class="form-group">
       {{ Form::label('email', 'E-Mail Address') }}
       {{ Form::text('email', '',['class' => 'form-control', 'placeholder' => 'example@gmail.com']) }}
    </div>
    <div class="form-group">
        {{ Form::label('message', 'Message') }}
        {{ Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter Your Message']) }}
    </div>

    {{ Form::submit('Contact Us', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection