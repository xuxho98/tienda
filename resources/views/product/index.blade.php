@extends('layouts.app1')
@section('content')
    <div class="container" style="margin-top: 80px">

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Products In Our Store</h4>
                    </div>
                </div>
                <div class="center">
                    <a type="button" href="{{route('product.create')}}" class="btn btn-outline-primary">
                        <i class="fa fa-plus"></i> <br> Create
                    </a>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <table id="Table" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" >
                            <thead>
                                <tr>
                                    <th width="100">Image</th>
                                    <th>code</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Acction</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $pro)
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/'.$pro->image_path) }}"
                                        class="img-fluid"
                                        alt="{{ $pro->image_path }}">
                                    </td>
                                    <td>
                                        {{ $pro->code }}
                                    </td>
                                    <td>
                                        {{ $pro->name }}
                                    </td>
                                    <td>
                                        {{ $pro->price }}
                                    </td>
                                    <td>
                                        {{ $pro->stock }}
                                    </td>
                                    <td>
                                        <a href="{{route('product.edit',$pro->id)}}" type="button" class="btn btn-outline-warning"><i class="fa fa-pencil-square-o"></i><br> Edit</a>
                                        <a href="{{route('product.info',$pro->id)}}" type="button" class="btn btn-outline-info"><i class="fa fa-info-circle"></i> <br> Detail</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
