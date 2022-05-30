@extends('layout')

@section('title')Рулонная Изоляция из Вспененного Каучука@endsection
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
                        <h1>Резиновые Ленты</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_home_crumbs">
                        <ul>
                            <li><a href="/">Главное // </a><span> Резиновые Ленты</span></li>
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
                            <figure> <img alt="" src="{{ asset('images/product/ribbon/rubber-coltape.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <a href="#" tabindex="0">
                                    <h5>Резиновая Лента</h5>
                                </a>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Артикул
                                    </td>
                                    <td>
                                        Roka insulation
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
                                        Длина (мм)
                                    </td>
                                    <td>
                                        15 метр
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ширина (мм)
                                    </td>
                                    <td>
                                        50мм, 100мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Материал
                                    </td>
                                    <td>
                                        Регенрационный резина
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
                            <figure> <img alt="" src="{{ asset('images/product/ribbon/alyumin.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <h5>Алюмин Лента</h5>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Артикул
                                    </td>
                                    <td>
                                        Roka insulation
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Толщина (мм)
                                    </td>
                                    <td>
                                        1мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Длина (мм)
                                    </td>
                                    <td>
                                        25 метр
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ширина (мм)
                                    </td>
                                    <td>
                                        5см
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Материал
                                    </td>
                                    <td>
                                        Регенрационный резина
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
                            <figure> <img alt="" src="{{ asset('images/product/ribbon/jonta.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                    <h5>Прокладка неопрена</h5>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Артикул
                                    </td>
                                    <td>
                                        Roka insulation
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Толщина (мм)
                                    </td>
                                    <td>
                                        5мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Длина (мм)
                                    </td>
                                    <td>
                                        10 метр
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ширина (мм)
                                    </td>
                                    <td>
                                        13мм, 15мм, 20мм, 30мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Материал
                                    </td>
                                    <td>
                                        Регенрационный резина
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row">

                <div class="col-md-4">
                    <div class="item-box-blog">
                        <div class="item-box-blog-image">
                            <!--Image-->
                            <figure> <img alt="" src="{{ asset('images/product/ribbon/pvc.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <a href="#" tabindex="0">
                                    <h5>Резиновая Лента PVC</h5>
                                </a>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Артикул
                                    </td>
                                    <td>
                                        Roka insulation
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Толщина (мм)
                                    </td>
                                    <td>
                                        1мм
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Длина (мм)
                                    </td>
                                    <td>
                                        25 метр
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ширина (мм)
                                    </td>
                                    <td>
                                        5см
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Материал
                                    </td>
                                    <td>
                                        Регенрационный резина
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