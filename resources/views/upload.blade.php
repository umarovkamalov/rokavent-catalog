@extends('layout')

@section('title')Загрузка Картины@endsection

@section('main_content')
    <div class="btn-outline-warning"><h1>Загрузка Картины</h1></div>

    <div class="container">
        <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <input type="file" name="image">
            </div>

            <button class="btn">Загрузить</button>
        </form>

        @isset($path)
        <img src="{{asset('/storage/'. $path)}}" class="img-fulid" alt="">
        @endisset
    </div>
@endsection