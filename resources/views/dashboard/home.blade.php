@extends('layouts/app')

@section('content')
    <div style="padding: 15px;">
        <h2>
            Dashboard Page {{ env('NON_EXISTING_ENV_VALUE', 'Value Default To Me!!') }}
        </h2>
    </div>
@stop