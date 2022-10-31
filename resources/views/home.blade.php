@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <button class="btn btn-primary" onclick="contoh()">Klik disini</button>
                    <a href="{{ route('Dashboard') }}" class="btn btn-primary">Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function contoh() {

       swal({

            title: "Berhasil!",

            text: "Pop-up berhasil ditampilkan",

            icon: "success",

            button: true

        });

    }

</script>
@endsection
