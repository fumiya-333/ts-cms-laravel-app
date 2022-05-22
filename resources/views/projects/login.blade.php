<div class="p-login">
    <div class="p-login__inner">
        @component('components.form', ['url' => 'login', 'form_class' => 'p-login__inner__form', 'form_inner_class' => 'p-login__inner__form__inner'])
            @slot('form')
                <label>メールアドレス</label>
                <input type="email" name="email" class="c-input" placeholder="example@example.com">
                <label>パスワード</label>
                <input type="password" name="password" class="c-input">
                <input type="submit" name="login" value="ログイン" class="c-input c-btn-login p-login__inner__form__inner-btn-login">
            @endslot
        @endcomponent
    </div>
</div>
