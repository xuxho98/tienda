
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">

                    @foreach ($product)

                        <div class="col">
                            <input type="text" name="" id="">{{$product->name}}
                        </div>


                        <div class="col">
                            <input type="text" name="" id="">
                        </div>


                        <div class="col">
                            <input type="text" name="" id="">
                        </div>


                        <div class="col">
                            <input type="text" name="" id="">
                        </div>
                    @endforeach

                </div>
                <div class="coll">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
