@extends('layouts.client')

@section('title', 'Đặt lại mật khẩu')
@section('breadcrumb', 'Đặt lại mật khẩu')


@section('content')
  <div class="container">
        <h2>
            ĐẶT LẠI MẬT KHẨU
        </h2>
        <div class="ltn__myaccount-tab-content-inner pb-70">
            <div class="ltn__form-box">
                <form action="{{route ('password.update')}}" method="POST" id="reset-password-form">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">

                    <fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="email" name="email" placeholder="Nhập email của bạn" required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="password" name="password" placeholder="Nhập mật khẩu mới" required>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="password" name="password_confirmation" placeholder="Xác nhận lại mật khẩu" required>
                                
                            </div>
                        </div>
                    </fieldset>
                    <div class="btn-wrapper">
                        <button type="submit" class="theme-btn-1 btn black-btn text-uppercase">Đặt lại mật khẩu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- bất kỳ file nào cũng cần phải có @extends --}}