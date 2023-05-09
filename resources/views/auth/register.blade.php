@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

 
                        {{-- name⇨login_idに修正 --}}
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <input type="button" class="btn btn-primary" value="ダイスロール" onclick="getDice1();">
                                <span img="./img/hatena_aka.png" name="imgdice1" alt="imgdice1"></span>
                                <span id="condice1"></span>  
                                <script>
                                    getDice6 = new Array(
                                        // "img/sai1.gif",
                                        // "img/sai2.gif",
                                        // "img/sai3.gif",
                                        // "img/sai4.gif",
                                        // "img/sai5.gif",
                                        // "img/sai6.gif"
                                        1,2,3,4,5,6
                                    );

                                    //点滅させる回数、点滅時間
                                    count = 20;
                                    mSec = 50;
                                    function getDice1(){
                                        var dice1 = Math.floor(Math.random() * 6 );
                                        // document.imgdice1.src = getDice6[dice1];
                                        document.getElementById('condice1').innerHTML = (dice1 + 1);
                                        count--;
                                        if(count >= 1){tim = setTimeout("getDice1()",mSec);}
                                        if(count == 0){count = 20;}
                                    }
                                    getDice1();
                                </script>                              
                            </div>
                        </div>
                        {{-- jsでサイコロ振る？ --}}

                        <div class="row mb-3"> 
                            <script>
                                const button = document.getElementById('button');
                                var random = Math.floor(Math.random()*6 + 1);
                            </script>
                            <label for="login_id" class="col-md-4 col-form-label text-md-end">{{ __('login_id') }}</label>
                            <div class="col-md-6">
                                <input id="login_id" type="text" class="form-control @error('login_id') is-invalid @enderror" name="login_id" value="{{ old('login_id') }}" required autocomplete="login_id" autofocus>
                                {{-- login_idにインプット --}}
                                {{-- getDiceから出力された値をlogin_idに出力するロジック　 --}}
                                <script>
                                    count = 20;
                                    mSec = 50;
                                    function getDice1_1(){
                                        $test = Math.floor(Math.random() * 10000000);
                                        document.getElementById('login_id').value = $test;
                                        count--;
                                        if(count >= 1){tim = setTimeout("getDice1_1()",mSec);}
                                        if(count == 0){count = 20;}
                                    }
                                    getDice1_1();
                                </script> 
                                

                                @error('login_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
