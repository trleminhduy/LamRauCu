@extends('layouts.client')

@section('title', 'TÀI KHOẢN')
@section('breadcrumb', 'TÀI KHOẢN')

@section('content')
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image">
                <img src="{{ asset('assets/clients/img/others/6.png') }}" alt="Ảnh giới thiệu">
            </div>
            <div class="col-md-6 content">
                <h2>Cửa Hàng Thực Phẩm Hữu Cơ Uy Tín</h2>
                <p>Chúng tôi cam kết mang đến sản phẩm chất lượng cao, tốt cho sức khỏe.</p>
                <p>We are a store that connects people who aspire to do good and spread goodness. Our mission is to provide access to high-quality organic food in a trustworthy and sustainable environment.</p>
                <div class="author">
                    <strong>MinhDuy</strong>
                    <small>/ Founder</small>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
