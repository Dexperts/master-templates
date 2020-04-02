@php
    $labelKey = $module . '.' . $fieldname;
    if (!isset($lastPartFieldName)) {
    	$lastPartFieldName = false;
    }
    if ($lastPartFieldName) {
	    $labelKey = $module . '.' . explode('-', $fieldname)[1];
    }
@endphp
<div class="input-holder">
    <label>
        <input type="checkbox" class="input-checkbox campingpas"
               data-qa="{{$fieldname}}" id="{{$fieldname}}"
               name="{{$fieldname}}"
               @if ($value == 1)
                       checked="checked"
               @endif
               {{isset($click) ? 'onClick=' . $click: ''}}> {{ __('admin/' . $labelKey) }}
    </label>
</div>