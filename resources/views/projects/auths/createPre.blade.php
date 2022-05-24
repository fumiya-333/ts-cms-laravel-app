<div class="p-create">
    <div class="p-create__inner">
        @include('components.msg')
        @component('components.form', ['url' => AppConstants::ROOT_DIR_USERS_CREATE_PRE, 'form_class' => 'p-create__inner__form', 'form_inner_class' => 'p-create__inner__form__inner'])
            @slot('form')
                <label>氏名</label>
                <input type="text" name="name" class="c-input {{ $errors->has('name') ? 'c-error' : '' }}" value="{{ old('name') }}" placeholder="浦島 太郎">
                @if ($errors->has('name'))
                    <div class="c-error-msg">{{$errors->first('name')}}</div>
                @endif
                <label>メールアドレス</label>
                <input type="email" name="email" class="c-input {{ $errors->has('email') ? 'c-error' : '' }}" value="{{ old('email') }}" placeholder="example@example.com">
                @if ($errors->has('email'))
                    <div class="c-error-msg">{{$errors->first('email')}}</div>
                @endif
                <label>パスワード</label>
                <input type="password" name="password" class="c-input {{ $errors->has('password') ? 'c-error' : '' }}" value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <div class="c-error-msg">{{$errors->first('password')}}</div>
                @endif
                <div class="p-create__inner__form__inner__btn-area">
                    <input type="submit" name="create" value="新規登録"  class="c-btn c-btn-create p-create__inner__form__inner__btn-area-btn-create">
                </div>
            @endslot
        @endcomponent
    </div>
</div>
