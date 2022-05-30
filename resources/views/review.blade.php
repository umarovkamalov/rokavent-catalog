@extends('layout')

@section('title')Отзыв@endsection

@section('main_content')
    <div class="btn-outline-warning"><h1>Отзыв</h1></div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/review/check" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите Email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите Отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите текст" cols="30" rows="10"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

    <h1>Все отзывы</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{$el->subject}}</h3>
            <b>{{$el->email}}</b>
            <b>{{$el->message}}</b>
        </div>
    @endforeach

@endsection