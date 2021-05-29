@extends('layouts/app')

@section('content')
    <div class="bt-white shadow-md hover:shadow-xl rounded-lg border-2 w-1/2 p-4 mt-10 ml-80">
        <h1 class="flex justify-center text-6xl text-gray-800 font-semibold">
            {{ env('APP_NAME') }}
        </h1>
        <h2 class="2xl flex justify-center">
            Izar-framework is other PHP framework MVC based in Slim framework.
        </h2>
    </div>
@stop