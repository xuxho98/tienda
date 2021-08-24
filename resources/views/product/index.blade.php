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
                    <div>

                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <table id="Table" class="table table-striped table-bordered" style="width:100%">
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
                                        class="card-img-top" width="100" height="100"
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
                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                        <button type="button" class="btn btn-outline-info">Info</button
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
