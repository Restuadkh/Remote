@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card m-1">  
                <div class="card-body"> 
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card m-1">
                <div class="card-body">{{ __('2') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
