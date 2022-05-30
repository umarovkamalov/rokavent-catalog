@extends('layout')

@section('title')@endsection
@section('keywords'){{__('messages.pages')}}@endsection

@section('main_content')
    <div class="int_about_page_title int_dark_about_title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_bread_crumbs">
                        <h1>Все Страницы</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_home_crumbs">
                        <ul>
                            <li><a href="/">Домой // </a><span>    </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row">
            @foreach($allpage as $page)
                <p> {{$page->title}}</p>
                <a href="{{ url('/page/'. $page->slug) }}">{{$page->title}}</a>
                <code>{{$page->body}}</code>
            @endforeach
        </div>
    </div>


@endsection

