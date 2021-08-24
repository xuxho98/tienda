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
                    <a href="{{route('shop')}}"><button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> <br> Shop</button></a>

                    <a href="{{route('producto')}}"><button type="button" class="btn btn-secondary"><i class="fa fa-shopping-cart"></i> <br>Add Product</button></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
