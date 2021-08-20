@php
use App\Models\Products;
@endphp

@extends('layout.admin');

@section('title', $title)

@section('breadcrumb')

<li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
@endsection

@section('content')
<section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PRICE</th>
                                        <th>CREATED_AT</th>
                                        <th>UPDATED_AT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($products as $product)
                                   <tr>
                                        <td class="text-bold-500">{{ $product->category->title }}</td>
                                        <td class="text-bold-500">{{ $product->title }}</td>
                                        <td class="text-bold-500">{{ $product->description }}</td>
                                        <td class="text-bold-500">{{ $product->showPrice() }}</td>
                                        <td class="text-bold-500">{{ $product->created_at }}</td>
                                        <td class="text-bold-500">{{ $product->updated_at }}</td>
                                     <td><a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-outline-primary">Düzenle</a>
                                     <a href="{{ route('admin.products.destroy', $product->id) }}" class="btn btn-outline-danger">Sil</a></td>


                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
