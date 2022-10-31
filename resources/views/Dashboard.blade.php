@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-sm col-md col-xl">
                <div class="p-4 m-1 shadow-sm bg-white rounded">
                    <h3>{{ __('Add Server') }}</h3>
                    <form action="{{ url('Server') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Name" class="form-label">Nama Server</label>
                            <input type="Name" class="form-control" id="Name" name="identify" aria-describedby="NameHelp" placeholder="Linux X">
                            <div id="NameHelp" class="form-text">Ubuntu 16.x, Centos 6, RedHat x</div>
                        </div>
                        <div class="mb-3">
                            <label for="ip" class="form-label">IP Address</label>
                            <select class="form-select" aria-label="Default select example" name="os" >
                                <option value="Centos">Centos</option>
                                <option value="Ubuntu">Ubuntu</option>
                                <option value="Linux">Linux</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ip" class="form-label">IP Address</label>
                            <input type="text" class="form-control" id="ip" name="ip"  aria-describedby="IpHelp" placeholder="192.168.0.1" > 
                            <div id="IpHelp" class="form-text">10.x, 172.x, 192.x</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="username" aria-label="username"> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-sm col-md col-xl">
                <div class="p-4 m-1 shadow-sm bg-white rounded"> 
                </div>
            </div>
        </div>
    </div>
@endsection
