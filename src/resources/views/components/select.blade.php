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
    <select data-qa="{{$fieldname}}" id="{{$fieldname}}"
            class="form__select {{ $errors->has($fieldname) ? ' form__input--invalid' : '' }}" name="{{$fieldname}}"
            {{isset($change) ? 'onChange=' . $change : ''}}>
        @foreach($options as $indexKey => $option)
            <option value="{{$indexKey}}" {!! (($value == $indexKey) ? 'selected' : '') !!}>{{$option}}</option>
        @endforeach
    </select>
    @if ($errors->has($fieldname))
        <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first($fieldname) }}</strong>
    </span>
    @endif
</div>