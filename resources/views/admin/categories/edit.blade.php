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
<form class="form form-vertical" method="POST" action="{{route('Categories.update', $category->id)}}">
    @csrf
    @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title" value="{{$category->title}}">
                                            </div>
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" >{{$category->description}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="slug" value="{{$category->slug}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                    <h6>Status</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" name="status">
                                            <option value="a"  @if ($category->status == 'a') selected @endif >Active</option>
                                            <option value="p"  @if ($category->status == 'p') selected @endif >Passive</option>
                                        </select>
                                    </fieldset>
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
