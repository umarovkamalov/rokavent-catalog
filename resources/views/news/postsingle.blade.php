<?
    use Illuminate\Database\Eloquent\Collection;
?>
@extends('layout')

@section('title'){{$postsingle->title}}@endsection
@section('keywords'){{$postsingle->meta_keywords}}@endsection

@section('main_content')

    <!--===Index1 Dark Page Title start===-->
<div class="int_about_page_title int_dark_about_title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                <div class="int_bread_crumbs">
                    <h1>Подробнее</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                <div class="int_home_crumbs">
                    <ul>
                        <li><a href="/">Главное // </a><span> {{$postsingle->title}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===Index1 Dark Page Title End===-->
<!--===Start Blog Category Dark Section===-->
<div class="int_blog_category int_blog_dark_version">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="int_blog_box int_blog_single_dark">
                    <div class="int_blog_post">
                        <img src="{{ Storage::url($postsingle->image) }}" class="img-fluid" alt="{{ $postsingle->seo_title }}"/>
                        <div class="int_blog_user">
                            <ul>
                                <li><a href="/"><i class="far fa-calendar-alt"></i><span>{{ $postsingle->created_at }}</span></a></li>
                            </ul>
                        </div>
                        <h2>{{ $postsingle->title }}</h2>
                        <p>{!! $postsingle->body !!}</p>
                        {{--<div class="int_blg_img_post">
                            <ul>
                                <li><a href="javascript:;"><img src="/images/blog_single_img1.jpg" class="img-fluid" alt="image"/></a></li>
                                <li><a href="javascript:;"><img src="/images/blog_single_img2.jpg" class="img-fluid" alt="image"/></a></li>
                                <li><a href="javascript:;"><img src="/images/blog_single_img3.jpg" class="img-fluid" alt="image"/></a></li>
                            </ul>
                        </div>--}}
                        <div class="int_social_blog_pst">
                            <div class="int_select_tag">
                                <ul>
                                    <li><a href="javascript:;"><i class="fas fa-tags"></i></a></li>
                                    @foreach(\TCG\Voyager\Models\Category::all() as $category)
                                        <li>
                                            <a href="{{ $category->id }}"@if(isset($dataTypeContent->category_id) && $dataTypeContent->category_id == $category->id) selected="selected"@endif>

                                                {{ $category->name }} </a> |
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="int_select_social">
                                <ul>
                                    {{--<li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="int_auther_box">
                            <div class="int_auther_img">
                                <img src="/images/blog_auther.jpg" class="img-fluid" alt="Image"/>
                            </div>
                            <div class="int_auther_content">
                                <h5>David Parker <span>about author</span></h5>
                                <p>Eripuit eligendi est, in iracundia signiferumque quo. Erant appareat corrumpit ei vel. At quo ceteerrerro fastidii. Usu ex ornatus corpora sententiae vocibus deleniti ut nec Uu eerx orernatus corererefdpoererra sententiae, vocibus a deleniti ut neclear. Ut enim eripuit.</p>
                            </div>
                        </div>
                    </div>
                    {{--<div class="int_blog_comment_box">
                        <h1>5 Comments</h1>
                        <ul>
                            <li>
                                <div class="int_profile_box">
                                    <div class="int_user_profile">
                                        <img src="/images/blog_cmnt_img1.jpg" class="img-fluid" alt="Image"/>
                                    </div>
                                    <div class="int_user_text">
                                        <h5>Rachel Ruth <span>
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.212">
													<g>
														<path d="M60.652,75.816V15.163C60.652,6.781,67.433,0,75.817,0c8.38,0,15.161,6.781,15.161,15.163v60.653
														c0,8.38-6.781,15.161-15.161,15.161C67.433,90.978,60.652,84.196,60.652,75.816z M318.424,90.978
														c8.378,0,15.163-6.781,15.163-15.161V15.163C333.587,6.781,326.802,0,318.424,0c-8.382,0-15.168,6.781-15.168,15.163v60.653
														C303.256,84.196,310.042,90.978,318.424,90.978z M485.212,363.906c0,66.996-54.312,121.307-121.303,121.307
														c-66.986,0-121.302-54.311-121.302-121.307c0-66.986,54.315-121.3,121.302-121.3C430.9,242.606,485.212,296.919,485.212,363.906z
														 M454.89,363.906c0-50.161-40.81-90.976-90.98-90.976c-50.166,0-90.976,40.814-90.976,90.976c0,50.171,40.81,90.98,90.976,90.98
														C414.08,454.886,454.89,414.077,454.89,363.906z M121.305,181.955H60.652v60.651h60.653V181.955z M60.652,333.584h60.653V272.93
														H60.652V333.584z M151.629,242.606h60.654v-60.651h-60.654V242.606z M151.629,333.584h60.654V272.93h-60.654V333.584z
														 M30.328,360.891V151.628h333.582v60.653h30.327V94c0-18.421-14.692-33.349-32.843-33.349h-12.647v15.166
														c0,16.701-13.596,30.325-30.322,30.325c-16.731,0-30.326-13.624-30.326-30.325V60.651H106.14v15.166
														c0,16.701-13.593,30.325-30.322,30.325c-16.733,0-30.327-13.624-30.327-30.325V60.651H32.859C14.707,60.651,0.001,75.579,0.001,94
														v266.892c0,18.36,14.706,33.346,32.858,33.346h179.424v-30.331H32.859C31.485,363.906,30.328,362.487,30.328,360.891z
														 M303.256,242.606v-60.651h-60.648v60.651H303.256z M409.399,363.906h-45.49v-45.49c0-8.377-6.781-15.158-15.163-15.158
														s-15.159,6.781-15.159,15.158v60.658c0,8.378,6.777,15.163,15.159,15.163h60.653c8.382,0,15.163-6.785,15.163-15.163
														C424.562,370.692,417.781,363.906,409.399,363.906z"/>
													</g>
												</svg>

												 29, july 2019  06:36PM</span></h5>
                                        <p>Eripuit eligendi est, in iracundia signiferumque quoErant appeareat corrumpit ei vel. At quo ceteerro fastidii. Usu ex ornatus corpora sententiae vocibus quoErant appeareat corrumpit ei vel.</p>
                                        <a href="javascript:;">- Reply</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <ul class="comment_left">
                                    <li>
                                        <div class="int_profile_box">
                                            <div class="int_user_profile">
                                                <img src="/images/blog_cmnt_img2.jpg" class="img-fluid" alt="Image"/>
                                            </div>
                                            <div class="int_user_text">
                                                <h5>Mike Wilson <span>
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.212">
															<g>
																<path d="M60.652,75.816V15.163C60.652,6.781,67.433,0,75.817,0c8.38,0,15.161,6.781,15.161,15.163v60.653
																c0,8.38-6.781,15.161-15.161,15.161C67.433,90.978,60.652,84.196,60.652,75.816z M318.424,90.978
																c8.378,0,15.163-6.781,15.163-15.161V15.163C333.587,6.781,326.802,0,318.424,0c-8.382,0-15.168,6.781-15.168,15.163v60.653
																C303.256,84.196,310.042,90.978,318.424,90.978z M485.212,363.906c0,66.996-54.312,121.307-121.303,121.307
																c-66.986,0-121.302-54.311-121.302-121.307c0-66.986,54.315-121.3,121.302-121.3C430.9,242.606,485.212,296.919,485.212,363.906z
																 M454.89,363.906c0-50.161-40.81-90.976-90.98-90.976c-50.166,0-90.976,40.814-90.976,90.976c0,50.171,40.81,90.98,90.976,90.98
																C414.08,454.886,454.89,414.077,454.89,363.906z M121.305,181.955H60.652v60.651h60.653V181.955z M60.652,333.584h60.653V272.93
																H60.652V333.584z M151.629,242.606h60.654v-60.651h-60.654V242.606z M151.629,333.584h60.654V272.93h-60.654V333.584z
																 M30.328,360.891V151.628h333.582v60.653h30.327V94c0-18.421-14.692-33.349-32.843-33.349h-12.647v15.166
																c0,16.701-13.596,30.325-30.322,30.325c-16.731,0-30.326-13.624-30.326-30.325V60.651H106.14v15.166
																c0,16.701-13.593,30.325-30.322,30.325c-16.733,0-30.327-13.624-30.327-30.325V60.651H32.859C14.707,60.651,0.001,75.579,0.001,94
																v266.892c0,18.36,14.706,33.346,32.858,33.346h179.424v-30.331H32.859C31.485,363.906,30.328,362.487,30.328,360.891z
																 M303.256,242.606v-60.651h-60.648v60.651H303.256z M409.399,363.906h-45.49v-45.49c0-8.377-6.781-15.158-15.163-15.158
																s-15.159,6.781-15.159,15.158v60.658c0,8.378,6.777,15.163,15.159,15.163h60.653c8.382,0,15.163-6.785,15.163-15.163
																C424.562,370.692,417.781,363.906,409.399,363.906z"/>
															</g>
														</svg>

														 29, july 2019  06:36PM</span></h5>
                                                <p>Eripuit eligendi est, in iracundia signiferumque quoErant appeareat corrumpit ei vel. At quo ceteerro fastidii. Usu ex ornatus corpora sententiae vocibus.</p>
                                                <a href="javascript:;">- Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="int_profile_box">
                                            <div class="int_user_profile">
                                                <img src="/images/blog_cmnt_img3.jpg" class="img-fluid" alt="Image"/>
                                            </div>
                                            <div class="int_user_text">
                                                <h5>Tomm Doe<span>
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.212">
															<g>
																<path d="M60.652,75.816V15.163C60.652,6.781,67.433,0,75.817,0c8.38,0,15.161,6.781,15.161,15.163v60.653
																c0,8.38-6.781,15.161-15.161,15.161C67.433,90.978,60.652,84.196,60.652,75.816z M318.424,90.978
																c8.378,0,15.163-6.781,15.163-15.161V15.163C333.587,6.781,326.802,0,318.424,0c-8.382,0-15.168,6.781-15.168,15.163v60.653
																C303.256,84.196,310.042,90.978,318.424,90.978z M485.212,363.906c0,66.996-54.312,121.307-121.303,121.307
																c-66.986,0-121.302-54.311-121.302-121.307c0-66.986,54.315-121.3,121.302-121.3C430.9,242.606,485.212,296.919,485.212,363.906z
																 M454.89,363.906c0-50.161-40.81-90.976-90.98-90.976c-50.166,0-90.976,40.814-90.976,90.976c0,50.171,40.81,90.98,90.976,90.98
																C414.08,454.886,454.89,414.077,454.89,363.906z M121.305,181.955H60.652v60.651h60.653V181.955z M60.652,333.584h60.653V272.93
																H60.652V333.584z M151.629,242.606h60.654v-60.651h-60.654V242.606z M151.629,333.584h60.654V272.93h-60.654V333.584z
																 M30.328,360.891V151.628h333.582v60.653h30.327V94c0-18.421-14.692-33.349-32.843-33.349h-12.647v15.166
																c0,16.701-13.596,30.325-30.322,30.325c-16.731,0-30.326-13.624-30.326-30.325V60.651H106.14v15.166
																c0,16.701-13.593,30.325-30.322,30.325c-16.733,0-30.327-13.624-30.327-30.325V60.651H32.859C14.707,60.651,0.001,75.579,0.001,94
																v266.892c0,18.36,14.706,33.346,32.858,33.346h179.424v-30.331H32.859C31.485,363.906,30.328,362.487,30.328,360.891z
																 M303.256,242.606v-60.651h-60.648v60.651H303.256z M409.399,363.906h-45.49v-45.49c0-8.377-6.781-15.158-15.163-15.158
																s-15.159,6.781-15.159,15.158v60.658c0,8.378,6.777,15.163,15.159,15.163h60.653c8.382,0,15.163-6.785,15.163-15.163
																C424.562,370.692,417.781,363.906,409.399,363.906z"/>
															</g>
														</svg>

														 29, july 2019  06:36PM</span></h5>
                                                <p>Eripuit eligendi est, in iracundia signiferumque quoErant appeareat corrumpit ei vel. At quo ceteerro fastidii. Usu ex ornatus corpora sententiae vocibus.</p>
                                                <a href="javascript:;">- Reply</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <div class="int_profile_box">
                                    <div class="int_user_profile">
                                        <img src="/images/blog_cmnt_img4.jpg" class="img-fluid" alt="Image"/>
                                    </div>
                                    <div class="int_user_text">
                                        <h5>Nick John <span>
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.212">
													<g>
														<path d="M60.652,75.816V15.163C60.652,6.781,67.433,0,75.817,0c8.38,0,15.161,6.781,15.161,15.163v60.653
														c0,8.38-6.781,15.161-15.161,15.161C67.433,90.978,60.652,84.196,60.652,75.816z M318.424,90.978
														c8.378,0,15.163-6.781,15.163-15.161V15.163C333.587,6.781,326.802,0,318.424,0c-8.382,0-15.168,6.781-15.168,15.163v60.653
														C303.256,84.196,310.042,90.978,318.424,90.978z M485.212,363.906c0,66.996-54.312,121.307-121.303,121.307
														c-66.986,0-121.302-54.311-121.302-121.307c0-66.986,54.315-121.3,121.302-121.3C430.9,242.606,485.212,296.919,485.212,363.906z
														 M454.89,363.906c0-50.161-40.81-90.976-90.98-90.976c-50.166,0-90.976,40.814-90.976,90.976c0,50.171,40.81,90.98,90.976,90.98
														C414.08,454.886,454.89,414.077,454.89,363.906z M121.305,181.955H60.652v60.651h60.653V181.955z M60.652,333.584h60.653V272.93
														H60.652V333.584z M151.629,242.606h60.654v-60.651h-60.654V242.606z M151.629,333.584h60.654V272.93h-60.654V333.584z
														 M30.328,360.891V151.628h333.582v60.653h30.327V94c0-18.421-14.692-33.349-32.843-33.349h-12.647v15.166
														c0,16.701-13.596,30.325-30.322,30.325c-16.731,0-30.326-13.624-30.326-30.325V60.651H106.14v15.166
														c0,16.701-13.593,30.325-30.322,30.325c-16.733,0-30.327-13.624-30.327-30.325V60.651H32.859C14.707,60.651,0.001,75.579,0.001,94
														v266.892c0,18.36,14.706,33.346,32.858,33.346h179.424v-30.331H32.859C31.485,363.906,30.328,362.487,30.328,360.891z
														 M303.256,242.606v-60.651h-60.648v60.651H303.256z M409.399,363.906h-45.49v-45.49c0-8.377-6.781-15.158-15.163-15.158
														s-15.159,6.781-15.159,15.158v60.658c0,8.378,6.777,15.163,15.159,15.163h60.653c8.382,0,15.163-6.785,15.163-15.163
														C424.562,370.692,417.781,363.906,409.399,363.906z"/>
													</g>
												</svg>

												 29, july 2019  06:36PM</span></h5>
                                        <p>Eripuit eligendi est, in iracundia signiferumque quoErant appeareat corrumpit ei vel. At quo ceteerro fastidii. Usu ex ornatus corpora sententiae vocibus quoErant appeareat corrumpit ei vel.</p>
                                        <a href="javascript:;">- Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="int_profile_box">
                                    <div class="int_user_profile">
                                        <img src="/images/blog_cmnt_img5.jpg" class="img-fluid" alt="Image"/>
                                    </div>
                                    <div class="int_user_text">
                                        <h5>John James <span>
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.212">
													<g>
														<path d="M60.652,75.816V15.163C60.652,6.781,67.433,0,75.817,0c8.38,0,15.161,6.781,15.161,15.163v60.653
														c0,8.38-6.781,15.161-15.161,15.161C67.433,90.978,60.652,84.196,60.652,75.816z M318.424,90.978
														c8.378,0,15.163-6.781,15.163-15.161V15.163C333.587,6.781,326.802,0,318.424,0c-8.382,0-15.168,6.781-15.168,15.163v60.653
														C303.256,84.196,310.042,90.978,318.424,90.978z M485.212,363.906c0,66.996-54.312,121.307-121.303,121.307
														c-66.986,0-121.302-54.311-121.302-121.307c0-66.986,54.315-121.3,121.302-121.3C430.9,242.606,485.212,296.919,485.212,363.906z
														 M454.89,363.906c0-50.161-40.81-90.976-90.98-90.976c-50.166,0-90.976,40.814-90.976,90.976c0,50.171,40.81,90.98,90.976,90.98
														C414.08,454.886,454.89,414.077,454.89,363.906z M121.305,181.955H60.652v60.651h60.653V181.955z M60.652,333.584h60.653V272.93
														H60.652V333.584z M151.629,242.606h60.654v-60.651h-60.654V242.606z M151.629,333.584h60.654V272.93h-60.654V333.584z
														 M30.328,360.891V151.628h333.582v60.653h30.327V94c0-18.421-14.692-33.349-32.843-33.349h-12.647v15.166
														c0,16.701-13.596,30.325-30.322,30.325c-16.731,0-30.326-13.624-30.326-30.325V60.651H106.14v15.166
														c0,16.701-13.593,30.325-30.322,30.325c-16.733,0-30.327-13.624-30.327-30.325V60.651H32.859C14.707,60.651,0.001,75.579,0.001,94
														v266.892c0,18.36,14.706,33.346,32.858,33.346h179.424v-30.331H32.859C31.485,363.906,30.328,362.487,30.328,360.891z
														 M303.256,242.606v-60.651h-60.648v60.651H303.256z M409.399,363.906h-45.49v-45.49c0-8.377-6.781-15.158-15.163-15.158
														s-15.159,6.781-15.159,15.158v60.658c0,8.378,6.777,15.163,15.159,15.163h60.653c8.382,0,15.163-6.785,15.163-15.163
														C424.562,370.692,417.781,363.906,409.399,363.906z"/>
													</g>
												</svg>

												 29, july 2019  06:36PM</span></h5>
                                        <p>Eripuit eligendi est, in iracundia signiferumque quoErant appeareat corrumpit ei vel. At quo ceteerro fastidii. Usu ex ornatus corpora sententiae vocibus quoErant appeareat corrumpit ei vel.</p>
                                        <a href="javascript:;">- Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="int_blog_form">
                        <h2>Leave A Comments</h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First Name"/>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Last Name"/>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email"/>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Subject"/>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <a href="javascript:;" class="int_btn">submit <span class="btn_caret"><i class="fas fa-caret-right"></i></span></a>
                                </div>
                            </div>
                        </form>
                    </div>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="int_blog_sidebar">
                    <div class="int_sidebar_box recent_blog_one">
                        <h4>Другие новости</h4>
                        {{--Random--}}
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
                                    <a href="{{ url('/postsingle/'. $news->id) }}">{{$news->title}} </a>
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
                        <a href="https://t.me/rokavent">
                            <img src="/images/blog_add_img2.jpg" class="img-fluid" alt="Image"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======End Blog Category Dark Section======-->

@endsection