@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('productos')
                    @include('carrito')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript"> 
    window.onload = function() {
        window.onload=
        $('#carrito').hide(),
        $('#btnInicio').hide()
    };

   

</script>
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
