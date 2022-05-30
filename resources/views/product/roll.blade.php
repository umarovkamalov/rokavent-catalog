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
                        <h1>Термоизоляционные рулоны из вспененного каучука</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <div class="int_home_crumbs">
                        <ul>
                            <li><a href="/">Главное // </a><span> Термоизоляционные рулоны из вспененного каучука</span></li>
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
                            <figure> <img alt="" src="{{ asset('images/product/roll.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <a href="#" tabindex="0">
                                    <h5>Резиновый элостомерный рулон</h5>
                                </a>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="#">Артикул</a>
                                    </td>
                                    <td>
                                        <a href="#">Rokaflex</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Толщина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">6мм, 9мм, 13мм, 19мм</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Длина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">6мм тольшина - 30м2, 9мм тольшина - 20м2, 13мм тольшина - 14м2, 19мм тольшина - 10м2 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Ширина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">1000мм    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Материал</a>
                                    </td>
                                    <td>
                                        <a href="#">Вспененный каучук</a>
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
                            <figure> <img alt="" src="{{ asset('images/product/samokley.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <a href="#" tabindex="0">
                                    <h5>Резиновый элостомерный рулон с самоклеящимся слоем</h5>
                                </a>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="#">Артикул</a>
                                    </td>
                                    <td>
                                        <a href="#">Rokaflex</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Толщина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">6мм, 9мм, 13мм, 19мм</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Длина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">6мм тольшина - 30м2, 9мм тольшина - 20м2, 13мм тольшина - 14м2, 19мм тольшина - 10м2</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Ширина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">1000мм</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Материал</a>
                                    </td>
                                    <td>
                                        <a href="#">Вспененный каучук</a>
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
                            <figure> <img alt="" src="{{ asset('images/product/samokleyfolga.jpg')}}"> </figure>
                        </div>
                        <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <a href="#" tabindex="0">
                                    <h5>Резиновый элостомерный рулон с алюминиевой фольшой и самоклеящийся слоем</h5>
                                </a>
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="#">Артикул</a>
                                    </td>
                                    <td>
                                        <a href="#">Rokaflex</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Толщина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">6мм, 9мм, 13мм, 19мм</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Длина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">6мм тольшина - 30м2, 9мм тольшина - 20м2, 13мм тольшина - 14м2, 19мм тольшина - 10м2</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Ширина (мм)</a>
                                    </td>
                                    <td>
                                        <a href="#">1000мм</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Материал</a>
                                    </td>
                                    <td>
                                        <a href="#">Вспененный каучук</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

                <div class="container">
                    <div class="row">
                        <br>
                        <h4>ROKA FLEX РУЛОН - Технические Данные</h4>
                        <hr>
                        <table>
                            <col style="background-color: green">
                            <col span="2" style="background-color:   #ff7256">
                            <tbody>
                            <tr>
                                <td><b>Технические данные</b></td>
                                <td><b>Стандарт</b></td>
                                <td><b>Единица измерения</b></td>
                                <td><b>RokaFlex Рулон</b></td>
                            </tr>
                            <tr>
                                <td rowspan="5">
                                    Коэффицент теплопроводности (Х)
                                </td>
                                <td rowspan="5">
                                    EN 12665
                                </td>
                                <td>Вт / м.К</td>
                                <td>0.032(-20°C)</td>
                            </tr>
                            <tr>
                                <td>Вт / м.К</td>
                                <td>0.034(0°C)</td>
                            </tr>
                            <tr>
                                <td>Вт / м.К</td>
                                <td>0.036(20°C)</td>
                            </tr>
                            <tr>
                                <td>Вт / м.К</td>
                                <td>0.038(40°C)</td>
                            </tr>
                            <tr>
                                <td>Вт / м.К</td>
                                <td>0.0340(+60°C)</td>
                            </tr>
                            <tr>
                                <td>
                                    Сопротивление диффузии водяного пара
                                </td>
                                <td>
                                    EN 12086
                                </td>
                                <td></td>
                                <td>µ ≥ 7000</td>
                            </tr>
                            <tr>
                                <td>
                                    Классификация реации на огонь
                                </td>
                                <td>
                                    EN 13501-1
                                </td>
                                <td></td>
                                <td>B -s3 - d0</td>
                            </tr>
                            <tr>
                                <td>
                                    Термостойкость
                                </td>
                                <td>
                                    EN 14706
                                </td>
                                <td>°C</td>
                                <td>макс. +110</td>
                            </tr>
                            <tr>
                                <td>
                                    Уровень ионов растворимрго хлорида
                                </td>
                                <td>
                                    EN 13468
                                </td>
                                <td></td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>pH</td>
                                <td>EN 13468</td>
                                <td></td>
                                <td>6-8</td>
                            </tr>
                            <tr>
                                <td>Гибкость</td>
                                <td></td>
                                <td></td>
                                <td>Отлично</td>
                            </tr>
                            <tr>
                                <td>Озон</td>
                                <td></td>
                                <td></td>
                                <td>Хорошо</td>
                            </tr>
                            <tr>
                                <td>Процент закрытых клеток</td>
                                <td></td>
                                <td>%</td>
                                <td>>90</td>
                            </tr>
                            <tr>
                                <td>Устойчивость к воздействию химических веществ (масло, минеральные масло)</td>
                                <td></td>
                                <td></td>
                                <td>Хорошо</td>
                            </tr>
                            <tr>
                                <td>Формирование плесени и запаха</td>
                                <td></td>
                                <td></td>
                                <td>Нет</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        <br>
    </div>
@endsection