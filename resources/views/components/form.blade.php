{{ Form::open(array('url' => $url, 'class' => 'c-form ' . $form_class)) }}
    <div class="c-form__inner {{ $errors->count() ? 'c-form__error' : '' }} {{ $form_inner_class }}">
        {{ $form }}
    </div>
{{ Form::close() }}
