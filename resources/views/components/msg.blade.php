<div class="c-msg">
    <div class="c-msg__inner">
        @if(session('error'))
            <div class="c-error c-msg__inner__login-error">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
