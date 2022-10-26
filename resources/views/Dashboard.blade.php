@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="p-3 mb-5 shadow-sm bg-white rounded">   
                {{ __('You are logged in!') }} 
            </div>
        </div>
        <div class="col-md">
            <div class="p-3 mb-5 shadow-sm bg-white rounded">
                {{ __('2') }}
            </div>
        </div>
    </div>
</div>
@endsection
