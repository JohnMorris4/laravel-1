@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <h1>Home</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores aspernatur consequuntur dicta, explicabo facilis iure minima, natus nostrum perferendis quos reprehenderit voluptatibus voluptatum. Animi expedita illo minima quidem voluptas?</p>
    </div>

@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection