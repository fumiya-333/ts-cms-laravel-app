<div class="p-login">
    <div class="p-login__inner">
        @include('components.msg')
        @component('components.form', ['url' => '', 'form_class' => 'p-login__inner__form', 'form_inner_class' => 'p-login__inner__form__inner'])
            @slot('form')
                <label>メールアドレス</label>
                <input type="email" name="email" class="c-input {{ $errors->has('email') ? 'u-error' : '' }}" value="{{ old('email') }}" placeholder="example@example.com">
                @if ($errors->has('email'))
                    <div class="u-error-msg">{{$errors->first('email')}}</div>
                @endif
                <label>パスワード</label>
                <input type="password" name="password" class="c-input {{ $errors->has('password') ? 'u-error' : '' }}" value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <div class="u-error-msg">{{$errors->first('password')}}</div>
                @endif
                <a href="{{ url(AppConstants::ROOT_DIR_USERS_PASSWORD_RESET_PRE) }}" class="c-link u-flex-end p-login__inner__form__inner__password-reset-link">パスワードを忘れた</a>
                <div class="p-login__inner__form__inner__btn-area">
                    <input type="submit" name="login" value="ログイン" class="c-btn c-btn-login p-login__inner__form__inner__btn-area-btn-login">
                    <a href="{{ url(AppConstants::ROOT_DIR_USERS_CREATE_PRE) }}" class="c-btn c-btn-create p-login__inner__form__inner__btn-area-btn-create"><span>新規登録</span></a>
                </div>
            @endslot
        @endcomponent
    </div>
</div>
