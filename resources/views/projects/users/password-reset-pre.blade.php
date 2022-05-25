<div class="p-password-reset-pre">
    <div class="p-password-reset-pre__inner">
        @include('components.msg')
        @component('components.form', ['url' => '', 'form_class' => 'p-password-reset-pre__inner__form', 'form_inner_class' => 'p-password-reset-pre__inner__form__inner'])
            @slot('form')
                <label>メールアドレス</label>
                <input type="email" name="email" class="c-input {{ $errors->has('email') ? 'u-error' : '' }}" value="{{ old('email') }}" placeholder="example@example.com">
                @if ($errors->has('email'))
                    <div class="u-error-msg">{{$errors->first('email')}}</div>
                @endif
                <div class="p-password-reset-pre__inner__form__inner__btn-area">
                    <input type="submit" name="password-reset-pre" value="パスワードリセット"  class="c-btn c-btn-password-reset-pre p-password-reset-pre__inner__form__inner__btn-area-btn-password-reset-pre">
                </div>
            @endslot
        @endcomponent
    </div>
</div>
