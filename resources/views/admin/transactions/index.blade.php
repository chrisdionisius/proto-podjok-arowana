@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Products</h2>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>#</th>
                                <th>SKU</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>    
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->status }}</td>
                                        <td>
                                            <a href="{{ url('admin/products/'. $product->id .'/edit') }}" class="btn btn-warning btn-sm">Barang Masuk</a>
                                            <a href="{{ url('admin/products/'. $product->id .'/edit') }}" class="btn btn-warning btn-sm">Barang Keluar</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection