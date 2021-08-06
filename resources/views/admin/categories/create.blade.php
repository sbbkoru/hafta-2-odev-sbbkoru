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
<form class="form form-vertical" method="POST" action="{{route('Categories.store')}}">
    @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title" >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="slug" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                    <h6>Status</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="status">
                                            <option value="a" >Active</option>
                                            <option value="p" >Passive</option>
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
