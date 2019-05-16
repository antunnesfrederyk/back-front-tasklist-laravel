@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <br>
            <div class="card">
                <div class="card-body">
                    <div align="center" class="card-header">
                        <img src="{{asset('img/favicon.ico')}}" height="40px">
                        <h1 style="display: inline-block; vertical-align: top">Find <strong>UP</strong></h1>
                    </div>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-sm-12 col-form-label">Email</label>

                            <div class="col-md-12" style="margin-top: -10px">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label">Senha</label>
                            <div class="col-md-12" style="margin-top: -10px">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div align="center">
                <br>
                <h5 class="text-light">Developed by <a target="_blank" href="http://www.frederykantunnes.com.br"><strong>Frederyk Antunnes</strong></a></h5>
            </div>
        </div>
    </div>
</div>
@endsection
