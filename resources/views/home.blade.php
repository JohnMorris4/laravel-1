@extends('layouts.app')


@section('content')
<h1>Homepage</h1>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection