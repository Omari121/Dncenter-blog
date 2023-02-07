@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login')
@section('content')

<div class="accountbg" style="background: url('/back/assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html"><img src="/back/assets/images/logo-dark.png" height="22" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">Reset Password</h4>
                                <p class="text-muted text-center"> </p>


                            @livewire('author-rest-form')
                            
                            <div class="mt-5 pt-4 text-center">
                                <p>Don't have an account ? <a href="pages-register-2.html" class="fw-medium text-primary"> Signup now </a> </p>
                                <p>© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

@endsection