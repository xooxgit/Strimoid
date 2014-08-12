<?php

if (!isset($rows))
    $rows = 2;

if (!isset($class))
    $class = 'form-control';
else
    $class = 'form-control '. $class;

?>

<div class="form-group @if ($errors->has($name)) has-error @endif">
    <label for="{{ $name }}" class="col-lg-3 control-label">{{ $label }}</label>

    <div class="col-lg-6">
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-{{ $icon }}"></span></span>
        @if ($type == 'text')
        {{ Form::text($name, Input::old($name), array('class' => $class, 'placeholder' => $label)) }}
        @elseif ($type == 'textarea')
        {{ Form::textarea($name, Input::old($name), array('class' => $class, 'placeholder' => $label, 'rows' => $rows)) }}
        @elseif ($type == 'email')
        {{ Form::email($name, Input::old($name), array('class' => $class, 'placeholder' => $label)) }}
        @elseif ($type == 'password')
        {{ Form::password($name, array('class' => $class, 'placeholder' => $label)) }}
        @endif
        </div>


        @if ($errors->has($name))
        <p class="help-block">{{ $errors->first($name) }}</p>
        @endif
    </div>
</div>
