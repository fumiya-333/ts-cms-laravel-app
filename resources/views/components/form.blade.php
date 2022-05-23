{{ Form::open(array('url' => $url, 'class' => 'c-form ' . $form_class)) }}
    <div class="c-form__inner {{ $form_inner_class }}">
        {{ $form }}
    </div>
{{ Form::close() }}
