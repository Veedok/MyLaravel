@extends('loyouts.mainLayer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @if (session()->get('newuser')->avatar)
                            <input type="hidden" name="avatar" value="{{session()->get('newuser')->avatar}}">
                            @endif
                            @csrf
                            @if (session()->get('newuser'))
                                <h1>Сессия есть</h1>
                            @else
                                <h1>Сессии нет</h1>
                            @endif
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input placeholder="Name" id="name" type="text"
                                        class="product_name_auth form-control @error('name') is-invalid @enderror"
                                        name="name" @if (session()->get('newuser'))
                                    value="{{ session()->get('newuser')->name }}"
                                @else
                                    value="{{ old('name') }}"
                                    @endif required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input placeholder="Email" id="email" type="email"
                                        class="product_name_auth form-control @error('email') is-invalid @enderror"
                                        name="email"
                                        @if (session()->get('newuser'))
                                        value="{{ session()->get('newuser')->email }}"
                                    @else
                                    value="{{ old('email') }}"
                                        @endif  required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input placeholder="Password" id="password" type="password"
                                        class="product_name_auth form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input placeholder="Confirm Password" id="password-confirm" type="password"
                                        class="form-control product_name_auth" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset">
                                    <button type="submit" class="btn btn-primary sub_form_auth">
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
    @dump(session()->get('newuser')->avatar)
    <?php
    session()->forget('newuser'); ?>
@endsection
