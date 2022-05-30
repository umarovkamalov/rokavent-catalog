@extends('layout')

@section('title'){{$page->title}}@endsection
@section('keywords'){{$page->meta_keywords}}@endsection


@section('main_content')
    <div class="int_about_page_title int_dark_about_title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_bread_crumbs">
                        <h1>{{ $page->title }}</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_home_crumbs">
                        <ul>
                            <li><a href="/">Домой // </a><span>    {{$page->title}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <h1>This is user {{ $page->title }}</h1>
        <h5>This is user {{ $page->excerpt }}</h5>
        <p>This is user {{ $page->body}}</p>
        <img src="{{ Storage::url($page->image) }}" alt="{{ $page->meta_description }}">
        <p>This is user {{ $page->meta_keywords}}</p>
        <p>This is user {{ $page->status}}</p>
        <p>This is user {{ $page->created_at}}</p>
        <p>This is user {{ $page->updated_at}}</p>
    </div>
@endsection