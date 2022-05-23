<div class="c-msg">
    <div class="c-msg__inner">
        @if(session('error'))
            <div class="c-msg__login-error">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
