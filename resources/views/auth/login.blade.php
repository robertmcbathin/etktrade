@extends('layouts.login')
@section('title')
Вход в SpaceTrade
@endsection
@section('description')
SpaceTrade
@endsection
@section('keywords')

@endsection
@section('body-class')
signup-page
@endsection
@section('content')
        <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-5 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form class="form" method="" action="login-page.html">
                            <div class="card-header text-center">
                                <div class="logo-container">
                                    <img src="../assets/img/now-logo.png" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="POST">
                              <div class="input-group form-group-no-border input-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                </div>
                                <input type="email" name="password" class="form-control" placeholder="E-mail">
                              </div>
                              <div class="input-group form-group-no-border input-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Пароль">
                              </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Войти</a>
                            </div>
                                </form>

                            <div class="pull-right">
                                <h6><a href="{{ route('site.how-to-register.get') }}" class="link footer-link">КАК ЗАРЕГИСТРИРОВАТЬСЯ</a></h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  

@endsection