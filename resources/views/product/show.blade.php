
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">

                    <center>
                        <div class="card" style="width: 25rem;">
                            <img src="{{ asset('images/'.$product->image_path) }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Product info</h5>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label>Produc name</label>
                                                        <input class="form-control"  readonly=»readonly»  type="text" disabled="disabled" value="{{$product->name}}">
                                                    </div>
                                                    <div class="col-12">
                                                        <label>price to the public</label>
                                                        <input class="form-control"  readonly=»readonly»  type=»text» disabled=»disabled»  value="{{$product->price}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label>stock</label>
                                                        <input class="form-control"  readonly=»readonly»  type=»text» disabled=»disabled»  value="{{$product->stock}}">
                                                    </div>
                                                    <div class="col-12">
                                                        <label>purchase price</label>
                                                        <input class="form-control"  readonly=»readonly»  type=»text» disabled=»disabled»  value="{{$product->shipping_cost}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label>category</label>
                                                        <input class="form-control"  readonly=»readonly»  type=»text» disabled=»disabled»  value="{{$product->category_id}}">
                                                    </div>
                                                    <div class="col-6">
                                                        <label>code</label>
                                                        <input class="form-control"  readonly=»readonly»  type=»text» disabled=»disabled»  value="{{$product->code}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div  class="btn-group btn-group-toggle col-sm">
                                    <a href="{{route('product.edit',$product->id)}}" type="button" class="btn btn-warning btn-sm">Edit<i class="fa fa-pencil-square-o"></i></a>

                                    <form action="{{ route('product.remove', $product->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                            <button type="submit" name="submit" class="btn btn-danger btn-sm"  onclick="return confirm('¿Estas seguro que quieres Eliminar el Registro?')"><i class="fa fa-trash"></i><br> Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
