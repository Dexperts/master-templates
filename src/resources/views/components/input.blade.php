@php
    if (!isset($extraClass)) {
        $extraClass = '';
    }
    $labelKey = $module . '.' . $fieldname;
    if (!isset($lastPartFieldName)) {
    	$lastPartFieldName = false;
    }
    if ($lastPartFieldName) {
	    $labelKey = $module . '.' . explode('-', $fieldname)[1];
    }

    $labelString = __('admin/' . $labelKey);
    if (isset($translation)) {
        $labelString = $translation;
    }
@endphp
<div class="form__group {{$extraClass}}">
    <label for="{{$fieldname}}" class="form__label">{{$labelString}}</label>
    <input data-qa="{{$fieldname}}" id="{{$fieldname}}" type="text"
           class="form__input {{ $errors->has($fieldname) ? ' form__input--invalid' : '' }}"
           name="{{$fieldname}}" value="{{ $value }}" {{ (isset($readonly) && $readonly) ? 'disabled=disabled' : ''}}
            {{ (isset($autofocus) && $autofocus) ? ' autofocus ' : ''}}
            {{(isset($placeholder) && $placeholder) ? 'placeholder=' . $labelString : ''}}>
    @if ($errors->has($fieldname))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldname) }}</strong>
        </span>
    @endif
</div>