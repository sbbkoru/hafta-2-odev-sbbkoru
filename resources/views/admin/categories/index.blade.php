@php
use App\Models\Categories;
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
                                        <th>STATUS</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>SLUG</th>
                                        <th>CREATED_AT</th>
                                        <th>UPDATED_AT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($categories as $category)
                                   <tr>
                                        <td class="text-bold-500">{!! Categories::statusIndicator($category->status) !!}</td>
                                        <td class="text-bold-500">{{ $category->title }}</td>
                                        <td class="text-bold-500">{{ $category->description }}</td>
                                        <td class="text-bold-500">{{ $category->slug }}</td>
                                        <td class="text-bold-500">{{ $category->created_at }}</td>
                                        <td class="text-bold-500">{{ $category->updated_at }}</td>
                                     <td><a href="{{ route('adminCategoriesEdit', $category->id) }}" class="btn btn-outline-primary">Düzenle</a>
                                     <a href="{{ route('adminCategoriesDelete', $category->id) }}" class="btn btn-outline-danger">Sil</a></td>


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
