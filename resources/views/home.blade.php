<?
    use Illuminate\Routing\Route;
?>

@extends('layout')

@section('title'){{__('messages.main_page')}}@endsection

@section('main_content')


    <!--===Start Service Section===-->
    <div class="int_service_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="int_heading">
                        <h4>ТОП ПРОДУКТЫ<span>top products</span></h4>
                        <h2>{{__('messages.where_can_i_use')}}</h2>
                    </div>
                </div>
            </div>
            <div class="service_box_wrapper">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="/">
                            <div class="service_box serivce_first">
                                <div class="service_img">
                                    <img src="images/services/int_servies01.jpg" class="img-fluid" alt="images" />
                                </div>
                                <div class="service_content">
                                    <h4>{{__('messages.pipe_insulation')}}&nbsp;</h4>
                                    <p>{{__('messages.applicable_to_copper_polypropylene_and_steel_pipes')}}</p>
                                </div>
                                <div class="service_designation">
                                    <h2>{{__('messages.insulation_for_pipes')}}</h2>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="/">
                            <div class="service_box serivce_second">
                                <div class="service_img">
                                    <img src="images/services/int_servies02.jpg" class="img-fluid" alt="images" />
                                </div>
                                <div class="service_content">
                                    <h4>{{__('messages.ventilation_ducts')}}</h4>
                                    <p>{{__('messages.used_to_prevent_condensation_and_energy_loss')}}.&nbsp;</p>
                                </div>
                                <div class="service_designation">
                                    <h2>{{__('messages.duct_insulation')}}</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="/">
                            <div class="service_box serivce_first">
                                <div class="service_img">
                                    <img src="images/services/int_servies04.jpg" class="img-fluid" alt="images" />
                                </div>
                                <div class="service_content">
                                    <h4>{{__('messages.industrial_factories')}}</h4>
                                    <p>{{__('messages.used_to_insulate_industrial_air_ducts_in_factories')}}</p>
                                </div>
                                <div class="service_designation">
                                    <h2>{{__('messages.industrial_insulation')}}</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="/">
                            <div class="service_box serivce_second">
                                <div class="service_img">
                                    <img src="images/services/int_servies03.jpg" class="img-fluid" alt="images" />
                                </div>
                                <div class="service_content">
                                    <h4>{{__('messages.сlamp')}}</h4>
                                    <p>{{__('messages.сlamps_for_industrial_areas_indoor_parks_and_sewage_pipes')}}</p>
                                </div>
                                <div class="service_designation">
                                    <h2>{{__('messages.сlamp')}}</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===End Start Service Section===-->

    <!--===Start About Section===-->
    <div class="int_about_wrapper">
        <div class="container">
            <div class="about_box_wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 order-last">
                        <div class="about_contentbox">
                            <div class="about_content">
                                <div class="int_heading">
                                    <h4><span>About US</span>О нас</h4>
                                </div>
                                <h2 class="about_head1">Roka Vent</h2>
                                <h3 class="about_head2	">{{__('messages.heat')}}&nbsp;<span class="team">{{__('messages.insulation')}}</span></h3>
                                <p class="about_deatils"><span class="t_color"></span><span class="t_color">{{__('messages.roka_vent_about_it')}}</span>.
                                <p>
                                <p class="about_deatils"></p>
                                <a href="{{url('/docs/catalog.pdf')}}" download class="int_btn left_zero">
									<span class="about_btnicon">
										<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 550.801 550.801"><g><g>
										<g>
											<path d="M267.342,414.698c-6.613,0-10.884,0.585-13.413,1.165v85.72c2.534,0.586,6.616,0.586,10.304,0.586    c26.818,0.189,44.315-14.576,44.315-45.874C308.738,429.079,292.803,414.698,267.342,414.698z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#C6A47E"/>
											<path d="M152.837,414.313c-6.022,0-10.104,0.58-12.248,1.16v38.686c2.531,0.58,5.643,0.78,9.903,0.78    c15.757,0,25.471-7.973,25.471-21.384C175.964,421.506,167.601,414.313,152.837,414.313z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#C6A47E"/>
											<path d="M475.095,131.992c-0.032-2.526-0.833-5.021-2.568-6.993L366.324,3.694c-0.021-0.034-0.062-0.045-0.084-0.076    c-0.633-0.707-1.36-1.29-2.141-1.804c-0.232-0.15-0.475-0.285-0.718-0.422c-0.675-0.366-1.382-0.67-2.13-0.892    c-0.19-0.058-0.38-0.14-0.58-0.192C359.87,0.114,359.037,0,358.203,0H97.2C85.292,0,75.6,9.693,75.6,21.601v507.6    c0,11.913,9.692,21.601,21.6,21.601H453.6c11.908,0,21.601-9.688,21.601-21.601V133.202    C475.2,132.796,475.137,132.398,475.095,131.992z M193.261,463.873c-10.104,9.523-25.072,13.806-42.569,13.806    c-3.882,0-7.391-0.2-10.102-0.58v46.839h-29.35V394.675c9.131-1.55,21.967-2.721,40.047-2.721    c18.267,0,31.292,3.501,40.036,10.494c8.363,6.612,13.985,17.497,13.985,30.322C205.308,445.605,201.042,456.49,193.261,463.873z     M318.252,508.392c-13.785,11.464-34.778,16.906-60.428,16.906c-15.359,0-26.238-0.97-33.637-1.94V394.675    c10.887-1.74,25.083-2.721,40.046-2.721c24.867,0,41.004,4.472,53.645,13.995c13.61,10.109,22.164,26.241,22.164,49.37    C340.031,480.4,330.897,497.697,318.252,508.392z M439.572,417.225h-50.351v29.932h47.039v24.11h-47.039v52.671H359.49V392.935    h80.082V417.225z M97.2,366.752V21.601h250.203v110.515c0,5.961,4.831,10.8,10.8,10.8H453.6l0.011,223.836H97.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#C6A47E"/>
											<path d="M386.205,232.135c-0.633-0.059-15.852-1.448-39.213-1.448c-7.319,0-14.691,0.143-21.969,0.417    c-46.133-34.62-83.919-69.267-104.148-88.684c0.369-2.138,0.623-3.828,0.741-5.126c2.668-28.165-0.298-47.179-8.786-56.515    c-5.558-6.101-13.721-8.131-22.233-5.806c-5.286,1.385-15.071,6.513-18.204,16.952c-3.459,11.536,2.101,25.537,16.708,41.773    c0.232,0.246,5.189,5.44,14.196,14.241c-5.854,27.913-21.178,88.148-28.613,117.073c-17.463,9.331-32.013,20.571-43.277,33.465    l-0.738,0.844l-0.477,1.013c-1.16,2.437-6.705,15.087-2.542,25.249c1.901,4.62,5.463,7.995,10.302,9.767l1.297,0.349    c0,0,1.17,0.253,3.227,0.253c9.01,0,31.25-4.735,43.179-48.695l2.89-11.138c41.639-20.239,93.688-26.768,131.415-28.587    c19.406,14.391,38.717,27.611,57.428,39.318l0.611,0.354c0.907,0.464,9.112,4.515,18.721,4.524l0,0    c13.732,0,23.762-8.427,27.496-23.113l0.189-1.004c1.044-8.393-1.065-15.958-6.096-21.872    C407.711,233.281,387.978,232.195,386.205,232.135z M142.812,319.744c-0.084-0.1-0.124-0.194-0.166-0.3    c-0.896-2.157,0.179-7.389,1.761-11.222c6.792-7.594,14.945-14.565,24.353-20.841    C159.598,317.039,146.274,319.603,142.812,319.744z M200.984,122.695L200.984,122.695c-14.07-15.662-13.859-23.427-13.102-26.041    c1.242-4.369,6.848-6.02,6.896-6.035c2.824-0.768,4.538-0.617,6.064,1.058c3.451,3.791,6.415,15.232,5.244,36.218    C202.764,124.557,200.984,122.695,200.984,122.695z M193.714,256.068l0.243-0.928l-0.032,0.011    c7.045-27.593,17.205-67.996,23.047-93.949l0.211,0.201l0.021-0.124c18.9,17.798,47.88,43.831,82.579,70.907l-0.39,0.016    l0.574,0.433C267.279,235.396,228.237,241.84,193.714,256.068z M408.386,265.12c-2.489,9.146-7.277,10.396-11.665,10.396l0,0    c-5.094,0-9.998-2.12-11.116-2.632c-12.741-7.986-25.776-16.688-38.929-25.998c0.105,0,0.2,0,0.316,0    c22.549,0,37.568,1.369,38.158,1.411c3.766,0.14,15.684,1.9,20.82,7.938C407.984,258.602,408.755,261.431,408.386,265.12z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#C6A47E"/>
										</g>
									</g></g> </svg>
									</span>
                                    Cкачать каталог в формате PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about_imgbox">
                            <div class="about_img">
                                <img src="images/int_about01.jpg" class="img-fluid parent_img" alt="image" />
                                <div class="child_imgbox">
                                    <img src="images/int_about02.jpg" class="img-fluid child_img" alt="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===End Start About Section===-->

    <!--===Start Project Section===-->
    <div class="int_project_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="int_heading">
                        <h4>НАШЕ ПРОДУКТЫ<span>Our products</span></h4>
                        <h2>{{__('messages.heat_&_waterproofing')}}</h2>
                    </div>
                </div>
            </div>
            <div class="project_box_wrapper">
                <div class="row">
                    <div class="col-md-12 pr-0 pl-0">
                        <div class="int_project_gallery text-center">
                            <div class="gallery_nav">
                                <ul>
                                    <li><a data-filter="*" class="gallery_active">{{__('messages.all')}}</a></li>
                                    <li><a data-filter=".design">{{__('messages.iron')}} </a></li>
                                    <li><a data-filter=".development">{{__('messages.rubber')}}</a></li>
                                    <li><a data-filter=".photoshop">{{__('messages.ribbons')}}</a></li>
                                </ul>
                            </div>
                            <div class="gallery_container">
                                <div class="gallery_grid">
                                    <div class="grid-item design">
                                        <a href="images/gallery/index_gallery1.jpg" class="view">
                                            <div class="grid_img">
                                                <img src="images/gallery/solar_gallery01.jpg" alt="project-img">
                                            </div>
                                            <div class="bottom_content">
                                                <h5>{{__('messages.flange_angle_bolt_nut_washer')}}</h5>
                                                <span>{{__('messages.metal_construction_for_air_duct')}}</span>
                                            </div>
                                            <h2 class="top_content">{{__('messages.metal_structures')}}</h2>
                                            <div class="grid_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px">
                                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                                          d="M100.000,51.000 L51.000,51.000 L51.000,100.000 L49.000,100.000 L49.000,51.000 L-0.000,51.000 L-0.000,49.000 L49.000,49.000 L49.000,-0.000 L51.000,-0.000 L51.000,49.000 L100.000,49.000 L100.000,51.000 Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid-item development ">
                                        <a href="images/gallery/index_gallery2.jpg" class="view">
                                            <div class="grid_img">
                                                <img src="images/gallery/solar_gallery02.jpg" alt="project-img">
                                            </div>
                                            <div class="bottom_content">
                                                <h5>{{__('messages.self_adhesive_rolls')}} 6мм, 9мм, 13мм, 19мм</h5>
                                                <span>{{__('messages.self_adhesive_synthetic_rubber_roll')}}</span>
                                            </div>
                                            <h2 class="top_content">{{__('messages.foamed_rubber')}}</h2>
                                            <div class="grid_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px">
                                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                                          d="M100.000,51.000 L51.000,51.000 L51.000,100.000 L49.000,100.000 L49.000,51.000 L-0.000,51.000 L-0.000,49.000 L49.000,49.000 L49.000,-0.000 L51.000,-0.000 L51.000,49.000 L100.000,49.000 L100.000,51.000 Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid-item development">
                                        <a href="images/gallery/index_gallery3.jpg" class="view">
                                            <div class="grid_img">
                                                <img src="images/gallery/solar_gallery03.jpg" alt="project-img">
                                            </div>
                                            <div class="bottom_content">
                                                <h5>{{__('messages.rubber_elastomer_roll_with_foil')}}</h5>
                                                <span>{{__('messages.combined_with_a_multi_layer_UV_and_weather_resistant_coating_ideal_for_outdoor_use')}}.</span>
                                            </div>
                                            <h2 class="top_content">RokaFlex AC</h2>
                                            <div class="grid_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px">
                                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                                          d="M100.000,51.000 L51.000,51.000 L51.000,100.000 L49.000,100.000 L49.000,51.000 L-0.000,51.000 L-0.000,49.000 L49.000,49.000 L49.000,-0.000 L51.000,-0.000 L51.000,49.000 L100.000,49.000 L100.000,51.000 Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid-item photoshop ">
                                        <a href="images/gallery/index_gallery4.jpg" class="view">
                                            <div class="grid_img">
                                                <img src="images/gallery/solar_gallery04.jpg" alt="project-img">
                                            </div>
                                            <div class="bottom_content">
                                                <span>{{__('messages.hvac_accessories')}}</span>
                                                <h5>{{__('messages.pvc_tapes_aluminum_tapes_neoprene_gaskets_rubber_tapes')}}</h5>
                                            </div>
                                            <h2 class="top_content">{{__('messages.rubber_bands')}}</h2>
                                            <div class="grid_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px">
                                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                                          d="M100.000,51.000 L51.000,51.000 L51.000,100.000 L49.000,100.000 L49.000,51.000 L-0.000,51.000 L-0.000,49.000 L49.000,49.000 L49.000,-0.000 L51.000,-0.000 L51.000,49.000 L100.000,49.000 L100.000,51.000 Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid-item design">
                                        <a href="images/gallery/index_gallery5.jpg" class="view">
                                            <div class="grid_img">
                                                <img src="images/gallery/solar_gallery05.jpg" alt="project-img">
                                            </div>
                                            <div class="bottom_content">
                                                <h3>{{__('messages.sprinkler_clamp_pvc_and_heavy_weight_bolt_clamp')}}</h3>
                                                <span>{{__('messages.pipe_clamps')}}</span>
                                            </div>
                                            <h2 class="top_content">{{__('messages.clamp')}}</h2>
                                            <div class="grid_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px">
                                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                                          d="M100.000,51.000 L51.000,51.000 L51.000,100.000 L49.000,100.000 L49.000,51.000 L-0.000,51.000 L-0.000,49.000 L49.000,49.000 L49.000,-0.000 L51.000,-0.000 L51.000,49.000 L100.000,49.000 L100.000,51.000 Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid-item design photoshop">
                                        <a href="images/gallery/index_gallery6.jpg" class="view">
                                            <div class="grid_img">
                                                <img src="images/gallery/solar_gallery06.jpg" alt="project-img">
                                            </div>
                                            <div class="bottom_content">
                                                <h3>Seascape Villa</h3>
                                                <span>Aqaba, Jordan</span>
                                            </div>
                                            <h2 class="top_content">Architecture</h2>
                                            <div class="grid_icon">
                                                <svg
                                                        xmlns="../../../../www.w3.org/2000/svg.html"
                                                        width="100px" height="100px">
                                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                                          d="M100.000,51.000 L51.000,51.000 L51.000,100.000 L49.000,100.000 L49.000,51.000 L-0.000,51.000 L-0.000,49.000 L49.000,49.000 L49.000,-0.000 L51.000,-0.000 L51.000,49.000 L100.000,49.000 L100.000,51.000 Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid-item development">
                                        <a href="images/gallery/index_gallery7.jpg" class="view">
                                            <div class="grid_img">
                                                <img src="images/gallery/solar_gallery07.jpg" alt="project-img">
                                            </div>
                                            <div class="bottom_content">
                                                <span>Aqaba, Jordan</span>
                                                <h3>Seascape Villa</h3>
                                            </div>
                                            <h2 class="top_content">Architecture</h2>
                                            <div class="grid_icon">
                                                <svg
                                                        xmlns="../../../../www.w3.org/2000/svg.html"
                                                        width="100px" height="100px">
                                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                                          d="M100.000,51.000 L51.000,51.000 L51.000,100.000 L49.000,100.000 L49.000,51.000 L-0.000,51.000 L-0.000,49.000 L49.000,49.000 L49.000,-0.000 L51.000,-0.000 L51.000,49.000 L100.000,49.000 L100.000,51.000 Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===End Start Project Section===-->


    <!--===Start Team Section===-->
    <!--<div class="int_team_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="int_heading">
                        <h4>наше сотрудники<span>Our Team</span></h4>
                        <h2>Специалисты</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="team_box_wrapper text-center">
                        &lt;!&ndash;=== Swiper ===&ndash;&gt;
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team_box">
                                        <div class="team_img">
                                            <img src="images/team/int_v1team01.jpg" class="img-fluid" alt="images" />
                                            <div class="team_hovercontent">
                                                <h5>Contact</h5>
                                                <p>+4(81) 1800-123-123 </p>
                                                <h5>Social Connect</h5>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-behance"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team_content">
                                            <h4><a href="javascript:;">Daniyar Nietullaev</a></h4>
                                            <p>Sales Director</p>
                                        </div>
                                        <span class="team_designation">Sales</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team_box">
                                        <div class="team_img">
                                            <img src="images/team/int_v1team02.jpg" class="img-fluid" alt="images" />
                                            <div class="team_hovercontent">
                                                <h5>Contact</h5>
                                                <p>+4(81) 1800-123-123 </p>
                                                <h5>Social Connect</h5>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-behance"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team_content">
                                            <h4><a href="javascript:;">Davies Hunter</a></h4>
                                            <p>Designer</p>
                                        </div>
                                        <span class="team_designation">Architecture</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team_box">
                                        <div class="team_img">
                                            <img src="images/team/int_v1team03.jpg" class="img-fluid" alt="images" />
                                            <div class="team_hovercontent">
                                                <h5>Contact</h5>
                                                <p>+4(81) 1800-123-123 </p>
                                                <h5>Social Connect</h5>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-behance"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team_content">
                                            <h4><a href="javascript:;">Poole Slater</a></h4>
                                            <p>Designer</p>
                                        </div>
                                        <span class="team_designation">Designer</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team_box">
                                        <div class="team_img">
                                            <img src="images/team/int_v1team04.jpg" class="img-fluid" alt="images" />
                                            <div class="team_hovercontent">
                                                <h5>Contact</h5>
                                                <p>+4(81) 1800-123-123 </p>
                                                <h5>Social Connect</h5>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-behance"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team_content">
                                            <h4><a href="javascript:;">Molly Nicola</a></h4>
                                            <p>Designer</p>
                                        </div>
                                        <span class="team_designation">Designer</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team_box">
                                        <div class="team_img">
                                            <img src="images/team/int_v1team01.jpg" class="img-fluid" alt="images" />
                                            <div class="team_hovercontent">
                                                <h5>Contact</h5>
                                                <p>+4(81) 1800-123-123 </p>
                                                <h5>Social Connect</h5>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-behance"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team_content">
                                            <h4><a href="javascript:;">Edward Alsop</a></h4>
                                            <p>Designer</p>
                                        </div>
                                        <span class="team_designation">Architecture</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team_box">
                                        <div class="team_img">
                                            <img src="images/team/int_v1team02.jpg" class="img-fluid" alt="images" />
                                            <div class="team_hovercontent">
                                                <h5>Contact</h5>
                                                <p>+4(81) 1800-123-123 </p>
                                                <h5>Social Connect</h5>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-behance"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team_content">
                                            <h4><a href="javascript:;">Davies Hunter</a></h4>
                                            <p>Designer</p>
                                        </div>
                                        <span class="team_designation">Architecture</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        &lt;!&ndash;=== Add Arrows ===&ndash;&gt;
                        <div class="team_navigation">
                            <div class="swiper-button-next">вперед</div>
                            <div class="swiper-button-prev">назад</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--===End Start Team Section===-->


    <!--===Start Blog Section===-->
    <div class="int_blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="int_heading">
                        <h4>блог<span>Our Blog</span></h4>
                        <h2>{{__('messages.blog_about_companies')}}</h2>
                    </div>
                </div>
            </div>
            <div class="blog_box_wrapper">
                <div class="row">

                    {{--Цыкл--}}
                    @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog_box">
                            <div class="blog_img">
                                <a href="{{ url('/postsingle/'. $post->id) }}">
                                    <img class="img-fluid" src="{{ Storage::url($post->image) }}" alt="{{ $post->meta_description }}">
                                </a>
                            </div>
                            <a href="" class="blog_date">{{ $post->getTranslatedAttribute('created_at') }}</a>
                            <h1 ><a href="" class="blog_heading">{{ $post->getTranslatedAttribute('title') }}</a></h1>
                        </div>
                    </div>
                    @endforeach
                    {{--Цыкл--}}

                </div>
            </div>
        </div>
    </div>
    <!--===End Start Blog Section===-->

    <!--===Start Map Section===-->
    <div class="int_map_wrapper">
        <a target="_blank" class="text-lg-center" href="https://www.google.com/maps/dir//85%2F1+%D0%9D%D1%83%D0%BA%D1%83%D1%81%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB%D0%B8%D1%86%D0%B0,+%D0%A2%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82+100015,+%D0%A3%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD/@41.285269,69.269362,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x38ae8abf51e235f5:0xdb4222b01fc12597!2m2!1d69.2693615!2d41.2852693?hl=ru-RU">
            <img  src="{{ asset('images/map.png')}}" width="1600" alt="Составит маршут до Roka Vent?">
        </a>
    </div>
    <!--===End Map Section===-->


    <!--===Start Process Section===-->
    <!--<div class="int_process_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="int_heading">
                        <h4>процесс<span>Our Process</span></h4>
                        <h2>как мы работаем</h2>
                    </div>
                </div>
            </div>
            <div class="process_box_wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="process_box text-center">
                            <div class="process_circle"><h2>01</h2></div>
                            <h1><a href="javascript:;">Договоренность о цене</a></h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="process_box text-center">
                            <div class="process_circle"><h2>02</h2></div>
                            <h1><a href="javascript:;">Составление договора&nbsp;</a></h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="process_box text-center">
                            <div class="process_circle"><h2>03</h2></div>
                            <h1><a href="javascript:;">Отправка товара</a></h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="process_box text-center">
                            <div class="process_circle"><h2>04</h2></div>
                            <h1><a href="javascript:;">Закрытие договора</a></h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--===End Start Project Section===-->

@endsection