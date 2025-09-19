@extends('layouts.client')

@section('title', 'Quên mật khẩu')
@section('breadcrumb', 'QUÊN MẬT KHẨU')


@section('content')
    <div class="container">
        <h2>
            QUÊN MẬT KHẨU
        </h2>
        <div class="ltn__myaccount-tab-content-inner pb-70">
            <div class="ltn__form-box">
                <form action="{{route ('password.email')}}" method="POST">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="email" name="email" placeholder="Nhập email của bạn" required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                    <div class="btn-wrapper">
                        <button type="submit" class="theme-btn-1 btn black-btn text-uppercase">Gửi liên kết đặt lại mật khẩu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- bất kỳ file nào cũng cần phải có @extends --}}
