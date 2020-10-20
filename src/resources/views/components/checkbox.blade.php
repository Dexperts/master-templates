@php
    if (!isset($extraClass)) {
        $extraClass = '';
    }
    if (!isset($isReadonly)) {
        $isReadonly = false;
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
<div class="form__group form__group--checkbox {{$extraClass}}">
    <input data-qa="{{$id}}" id="{{$id}}" type="checkbox"
           class="form__checkbox
           {{ $errors->has($fieldname) ? ' form__input--invalid': ''}}"
           name="{{$fieldname}}" {{(isset($value) && $value) ? ' value="' .$value .'"' : '' }}{{ (isset($isChecked) && $isChecked) ? ' checked' : '' }} {{ (isset($isReadonly) && $isReadonly) ? 'disabled=disabled' : ''}}>
    <label for="{{$id}}" class="form__label">
        {{$labelString}}
    </label>
    @if ($errors->has($fieldname))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldname) }}</strong>
        </span>
    @endif
</div>
