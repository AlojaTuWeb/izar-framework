@extends('layouts/app')

@section('content')
    <div style="padding: 15px;">
        <h2>
            Home Page {{ env('APP_NAME', 'Izar-framework') }}
        </h2>
        <p>Name {{ $user->first_name }}</p>
        <p>Email {{ $user->email }}</p>
    </div>
@stop