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
@endphp
<div class="form__group {{$extraClass}}">
    <label for="{{$fieldname}}" class="form__label">{{ __('admin/' . $labelKey) }}</label>
    <input data-qa="{{$fieldname}}" id="{{$fieldname}}" type="file"
           class="form__input {{ $errors->has($fieldname) ? ' form__input--invalid' : '' }}"
           name="{{$fieldname}}" value="{{ $value }}" {{ (isset($readonly) && $readonly) ? 'disabled=disabled' : ''}}
            {{ (isset($autofocus) && $autofocus) ? ' autofocus ' : ''}} />
    @if ($errors->has($fieldname))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldname) }}</strong>
        </span>
    @endif
</div>