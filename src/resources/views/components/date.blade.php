@php
    $labelKey = $module . '.' . $fieldname;
    if (!isset($lastPartFieldName)) {
    	$lastPartFieldName = false;
    }
    if ($lastPartFieldName) {
	    $labelKey = $module . '.' . explode('-', $fieldname)[1];
    }
@endphp
<div class="form__group">
    <label for="{{$fieldname}}" class="form__label">{{ __('admin/' . $labelKey) }}</label>
    <input data-qa="{{$fieldname}}" id="{{$fieldname}}" type="date"
           class="form__input {{ $errors->has($fieldname) ? ' form__input--invalid' : '' }}"
           name="{{$fieldname}}" value="{{ $value }}">
    @if ($errors->has($fieldname))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldname) }}</strong>
        </span>
    @endif
</div>