<div class="c-msg m-fadein">
    <div class="c-msg__inner">
        @if(session(AppConstants::KEY_ERR))
            <div class="u-error c-msg__inner__login-error">
                {{ session(AppConstants::KEY_ERR) }}
                @if(session(AppConstants::KEY_ERR_LOG))
                    <pre>{{ session(AppConstants::KEY_ERR_LOG) }}</pre>
                @endif
            </div>
        @endif
        @if(session(AppConstants::KEY_MSG))
            <div class="u-info c-msg__inner__info">
                {{ session(AppConstants::KEY_MSG) }}
            </div>
        @endif
    </div>
</div>
