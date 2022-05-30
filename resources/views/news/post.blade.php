@extends('layout')

@section('title'){{__('messages.news_list')}}@endsection
@section('keywords'){{__('messages.news_list')}}@endsection

@section('main_content')


    <div class="int_about_page_title int_dark_about_title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_bread_crumbs">
                        <h1>{{__('messages.news_category')}}</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_home_crumbs">
                        <ul>
                            <li><a href="/">Домой // </a><span>    Список новостей</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="int_blog_category int_blog_dark_version">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">


                    {{--Item--}}
                    @if (count($post) > 0)
                        @foreach($post as $posts)
                        <div class="int_blog_box">
                            <div class="int_blog_post">
                                <img src="{{ Storage::url($posts->image) }}" class="img-fluid" alt="{{ $posts->meta_description }}">
                                <div class="int_blog_user">
                                    <ul>
                                        <li><a href="{{ url('/postsingle/'. $posts->slug) }}"><i class="far fa-calendar-alt"></i><span>{{$posts->created_at}}</span></a></li>
                                        <li><a href="{{ url('/postsingle/'. $posts->slug) }}">
                                                <svg xmlns="../../../../www.w3.org/2000/svg.html" width="14px" height="14px">
                                                    <path fill-rule="evenodd" fill="#c6a47e" d="M11.950,9.049 C11.187,8.287 10.280,7.723 9.290,7.381 C10.350,6.651 11.047,5.428 11.047,4.046 C11.047,1.814 9.231,-0.001 7.000,-0.001 C4.769,-0.001 2.953,1.814 2.953,4.046 C2.953,5.428 3.650,6.651 4.710,7.381 C3.720,7.723 2.813,8.287 2.050,9.049 C0.728,10.372 -0.000,12.129 -0.000,13.999 L1.094,13.999 C1.094,10.743 3.743,8.093 7.000,8.093 C10.257,8.093 12.906,10.743 12.906,13.999 L14.000,13.999 C14.000,12.129 13.272,10.372 11.950,9.049 ZM7.000,6.999 C5.372,6.999 4.047,5.674 4.047,4.046 C4.047,2.418 5.372,1.093 7.000,1.093 C8.628,1.093 9.953,2.418 9.953,4.046 C9.953,5.674 8.628,6.999 7.000,6.999 Z"></path>
                                                </svg>
                                                <span>{{$posts->author_id}}</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <h2><a href="{{ url('/postsingle/'. $posts->slug) }}">{{$posts->title}}</a></h2>
                                <p>{{$posts->excert}}</p>
                                <a href="{{ url('/postsingle/'. $posts->slug) }}" class="int_btn">Подробнее <span class="btn_caret"><i class="fas fa-caret-right"></i></span></a>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <h1>Постов пока нет!</h1>
                    @endif
                    {{--Item END--}}

                    <div class="int_blog_pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="javascript:;"><i class="fas fa-chevron-left"></i> Older</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:;">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">...</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">12</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">13</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">14</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">Newer <i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="int_blog_sidebar">
                        {{--<div class="int_sidebar_box">
                            <h4>search</h4>
                            <div class="int_search_btn">
                                <div class="input-group">
                                    <input type="text" placeholder="Search Here...">
                                    <div class="input-group-append">
                                        <button type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.239 30.239" width="18" height="18"><g><g>
                                                        <path d="M20.194,3.46c-4.613-4.613-12.121-4.613-16.734,0c-4.612,4.614-4.612,12.121,0,16.735   c4.108,4.107,10.506,4.547,15.116,1.34c0.097,0.459,0.319,0.897,0.676,1.254l6.718,6.718c0.979,0.977,2.561,0.977,3.535,0   c0.978-0.978,0.978-2.56,0-3.535l-6.718-6.72c-0.355-0.354-0.794-0.577-1.253-0.674C24.743,13.967,24.303,7.57,20.194,3.46z    M18.073,18.074c-3.444,3.444-9.049,3.444-12.492,0c-3.442-3.444-3.442-9.048,0-12.492c3.443-3.443,9.048-3.443,12.492,0   C21.517,9.026,21.517,14.63,18.073,18.074z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path></g></g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="int_sidebar_box recent_blog_one">
                            <h4>Recent Post</h4>
                            <div class="int_recent_blog_post">

                                {{--Tsikl--}}
                                @foreach($randompost as $news)
                                    <div class="int_recent_post">
                                        <div class="int_img_post">
                                            <a href="javascript:;">
                                                <img width="125" src="{{ Storage::url($news->image) }}" class="img-fluid" alt="{{$news->title}}"/>
                                            </a>
                                        </div>
                                        <div class="int_post_title">
                                            <a href="{{ url('/postsingle/'. $news->slug) }}">{{$news->title}} </a>
                                            <p>{{$news->created_at}}</p>
                                        </div>
                                    </div>
                                @endforeach
                                {{--Tsikl--}}

                            </div>
                        </div>
                        <div class="int_sidebar_box recent_blog_one">
                            <h4>Категория</h4>
                            <div class="int_blog_category_mini">
                                <ul>
                                    @foreach(\TCG\Voyager\Models\Category::all() as $category)
                                    <li>
                                        <a href="{{ $category->id }}"@if(isset($dataTypeContent->category_id) && $dataTypeContent->category_id == $category->id) selected="selected"@endif>
                                            <svg xmlns="../../../../www.w3.org/2000/svg.html" width="12px" height="8px">
                                                <path fill-rule="evenodd" fill="#c6a47e" d="M0.038,4.720 L6.164,4.710 C6.558,4.710 6.878,4.392 6.878,3.999 L6.878,2.016 L9.967,3.999 L5.777,6.688 C5.445,6.901 5.349,7.342 5.563,7.673 C5.777,8.004 6.219,8.099 6.551,7.886 L11.673,4.597 C11.877,4.466 12.000,4.241 12.000,3.999 C12.000,3.756 11.877,3.531 11.673,3.400 L6.551,0.112 C6.331,-0.030 6.051,-0.040 5.822,0.085 C5.592,0.210 5.449,0.449 5.449,0.710 L5.449,3.286 L0.000,3.286 "></path>
                                            </svg>
                                            {{ $category->name }} </a>{{--<span>( 1 )</span>--}}
                                    </li>
                                    @endforeach
                                   </ul>
                            </div>
                        </div>
                       <div class="int_sidebar_box">
                            <img src="/images/blog_add_img2.jpg" class="img-fluid" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection