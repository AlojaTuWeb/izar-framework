@extends('layouts/app')

@section('content')
    <div style="padding: 15px;">
        <h2>
            Home Page {{ env('APP_NAME', 'Izar-framework') }}
        </h2>
        @foreach ($users as $user)
            <pre>
                {{ $user->first_name }} {{ $user->last_name }} {{ $user->password }}
            </pre>
        @endforeach
    </div>
@stop