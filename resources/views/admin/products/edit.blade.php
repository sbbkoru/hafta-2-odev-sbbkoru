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
<form class="form form-vertical" method="POST" action="{{route('admin.products.update', $product->id)}}">
    @csrf
    @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                    <h6>Category</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" name="categories_id">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"  @if ($category->id == $product->categories_id) selected @endif >{{ $category->title }}</option>
                                            @endforeach

                                        </select>
                                    </fieldset>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title" value="{{$product->title}}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" >{{$product->description}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="prc" value="{{$product->prc}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                        <div class="col-12">
                                        <fieldset class="form-group">
                                        <select class="form-select" name="cid">
                                            @foreach (Products::currency(null) as $cid => $currency)
                                            <option value="{{ $cid }}"  @if ($cid == $product->cid) selected @endif >{{ $currency['name'] }}</option>
                                            @endforeach

                                        </select>
                                    </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Producer</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="info_json[producer]" value="{{$product->info_json['producer']}}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Production Year</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="info_json[year]" value="{{$product->info_json['year']}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">

                                </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Temizle</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
    </section>
@endsection
