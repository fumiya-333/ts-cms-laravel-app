<div class="c-msg m-fadein">
    <div class="c-msg__inner">
        @if(session(AppConstants::KEY_ERR))
            <div class="c-error c-msg__inner__login-error">
                {{ session(AppConstants::KEY_ERR) }}
                @if(session(AppConstants::KEY_ERR_LOG))
                    <pre>{{ session(AppConstants::KEY_ERR_LOG) }}</pre>
                @endif
            </div>
        @endif
    </div>
</div>
