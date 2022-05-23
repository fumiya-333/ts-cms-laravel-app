<div class="p-login">
    <div class="p-login__inner">
        @include('components.error_msg')
        @component('components.form', ['url' => '', 'form_class' => 'p-login__inner__form', 'form_inner_class' => 'p-login__inner__form__inner'])
            @slot('form')
                <label>メールアドレス</label>
                <input type="email" name="email" class="c-input" placeholder="example@example.com">
                @if ($errors->has('email'))
                    <div class="c-input-error">{{$errors->first('email')}}</div>
                @endif
                <label>パスワード</label>
                <input type="password" name="password" class="c-input">
                @if ($errors->has('password'))
                    <div class="c-input-error">{{$errors->first('password')}}</div>
                @endif
                <input type="submit" name="login" value="ログイン" class="c-input c-btn-login p-login__inner__form__inner-btn-login">
            @endslot
        @endcomponent
    </div>
</div>
