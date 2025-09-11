@extends('layouts.client')

@section('title', 'VỀ CHÚNG TÔI')
@section('breadcrumb', 'VỀ CHÚNG TÔI')


@section('content')

{{-- bất kỳ file nào cũng cần phải có @extends --}}


    <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-120--- pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="{{asset ('assets/clients/img/others/6.png')}}" alt="About Us Image">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color">Tìm hiểu thêm về cửa hàng</h6>
                                <h1 class="section-title">Cửa Hàng Thực Phẩm <br class="d-none d-md-block"> Hữu Cơ Uy Tín</h1>
                                <p>Chúng tôi cam kết mang đến sản phẩm chất lượng cao, tốt cho sức khoẻ</p>
                            </div>
                            <p>sellers who aspire to be good, do good, and spread goodness. We
                                democratic, self-sustaining, two-sided marketplace which thrives
                                on trust and is built on community and quality content.</p>
                            <div class="about-author-info d-flex">
                                <div class="author-name-designation  align-self-center">
                                    <h4 class="mb-0">MinhDuy</h4>
                                    <small>/ Founder</small>
                                </div>
                                <div class="author-sign">
                                    <img src="{{asset ('assets/clients/img/icons/icon-img/author-sign.png')}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- FEATURE AREA START ( Feature - 6) -->
        <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h6 class="section-subtitle ltn__secondary-color">// Đặc điểm //</h6>
                            <h1 class="section-title">Tại sao nên chọn chúng tôi<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-7">
                            <div class="ltn__feature-icon-title">
                                <div class="ltn__feature-icon">
                                    <span><img src="{{asset ('assets/clients/img/icons/icon-img/21.png')}}" alt="#"></span>
                                </div>
                                <h3><a href="service-details.html">Đa dạng thương hiệu</a></h3>
                            </div>
                            <div class="ltn__feature-info">
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-7">
                            <div class="ltn__feature-icon-title">
                                <div class="ltn__feature-icon">
                                    <span><img src="{{asset ('assets/clients/img/icons/icon-img/22.png')}}" alt="#"></span>
                                </div>
                                <h3><a href="service-details.html">Sản phẩm được tuyển chọn</a></h3>
                            </div>
                            <div class="ltn__feature-info">
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-7">
                            <div class="ltn__feature-icon-title">
                                <div class="ltn__feature-icon">
                                    <span><img src="{{asset ('assets/clients/img/icons/icon-img/23.png')}}" alt="#"></span>
                                </div>
                                <h3><a href="service-details.html">Không thuốc trừ sâu</a></h3>
                            </div>
                            <div class="ltn__feature-info">
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->

    



@endsection