@extends('layout')

@section('title')Флянцевые профили и уголки@endsection
@section('keywords'){{__('messages.about')}}@endsection

<style>
    table {
        border: 1px solid #dddddd;
        width: 100%;
    }
    table td {
        border: 1px solid #dddddd;
        padding-left: 8px;
        padding-right: 5px;
        text-align: left;
        font-size: 14px;
        vertical-align: middle;
    }
    /*tr{
        background: #cfcfcf;
    }*/

    tr:nth-child(even) {
        background-color: #fff;
    }

    tr:nth-child(odd) {
        background-color: #eff1eb;
    }

    tr:hover {
        background: #ffb300;
        height: 100%;
        width: 100%;
    }

    .item-box-blog {
        border: 1px solid #dadada;
        text-align: center;
        background: #f3f3f3;
    }
</style>

@section('main_content')

    <!--===Index1 Dark Page Title start===-->
    <div class="int_about_page_title int_dark_about_title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_bread_crumbs">
                        <h1>Флянцевые профили и уголки</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_home_crumbs">
                        <ul>
                            <li><a href="/">Главное // </a><span> Флянцевые профили и уголки</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===Index1 Dark Page Title End===-->


    <div class="int_about_page_title" style="background: #fff;">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="item-box-blog">
                        <div class="item-box-blog-image">
                            <!--Image-->
                            <figure> <img alt="" src="{{ asset('images/product/flange-and-corner/corner.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <h5>Уголки</h5>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Артикул
                                    </td>
                                    <td>
                                        Roka
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Толщина (мм)
                                    </td>
                                    <td>
                                        3мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Длина (см)
                                    </td>
                                    <td>
                                        9,5см
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ширина (см)
                                    </td>
                                    <td>
                                        от 2,5см до 2,8см
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Материал
                                    </td>
                                    <td>
                                        Оцинковка
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="item-box-blog">
                        <div class="item-box-blog-image">
                            <!--Image-->
                            <figure> <img alt="" src="{{ asset('images/product/flange-and-corner/flange.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                    <h5>Флянцевые профили и уголки</h5>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Артикул
                                    </td>
                                    <td>
                                        Roka Profil
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Толщина (мм)
                                    </td>
                                    <td>
                                        4мм - 5мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Длина (м)
                                    </td>
                                    <td>
                                        4м
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ширина (мм)
                                    </td>
                                    <td>
                                        33мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Материал
                                    </td>
                                    <td>
                                        Оцинкованный лист
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-box-blog">
                        <div class="item-box-blog-image">
                            <!--Image-->
                            <figure> <img alt="" src="{{ asset('images/product/flange-and-corner/flange.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                    <h5>Зажим</h5>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Артикул
                                    </td>
                                    <td>
                                        Roka
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Толщина (мм)
                                    </td>
                                    <td>
                                        4мм - 5мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Длина (см)
                                    </td>
                                    <td>
                                        3,3см
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ширина (мм)
                                    </td>
                                    <td>
                                        33мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Материал
                                    </td>
                                    <td>
                                        Оцинкованный лист
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>

    </div>
@endsection