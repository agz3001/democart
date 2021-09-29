@extends('layouts.app')

@section("title", "会員入口")
@section('content')
<div class="container">
  <p class="text-center stroke">{{ __('利用者様確認') }}</p>
  <p class="text-center">{{ __('●お客様の基本情報') }}</p>

  <div class="container-fluid" style="margin-bottom: 80px;">
    <form class="mx-0" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group container row mx-auto py-1" style="background-color: #ffd17d;">
        <div class="col-md-4 col-form-label text-md-right">
            <label for="email">{{ __('メールアドレス') }}</label>
        </div>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="" style="font-size:1.15rem; font-weight:bold;">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <p style="color: #634d25;">ご登録頂いたメールアドレスをご入力下さい</p>
        </div>
      </div>
      <div class="form-group container row mx-auto py-1" style="background-color: #ffd17d;">
          <div class="col-md-4 col-form-label text-md-right">
              <label for="password">{{ __('暗証番号') }}</label>
          </div>
          <div class="col-md-6">
              <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="" style="font-size:1.15rem; font-weight:bold;">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <p style="color: #634d25;">ご登録頂いた８文字以上の暗証番号</p>
          </div>
      </div>
      <div class="form-group text-center mb-2">
          <button type="submit" class="btn btn-primary modify">買物を始める</button>
      </div>
    </form>
  </div>
</div>
@endsection
