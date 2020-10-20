@php
    if (!isset($extraClass)) {
        $extraClass = '';
    }
@endphp

<div class="form__group {{$extraClass}}">
    <label for="{{$fieldname}}" class="form__label">{{$label}}</label>
    <div class="editable_textfield--actions">
        <button type="button" class="editable_textfield__button" onclick="document.execCommand('bold', true, '')" title="{{__('master-templates::actions.bold')}}"><img src="{{asset('images/bold.svg')}}" alt="{{__('master-templates::actions.bold')}}" width="20" height="20" /></button>
        <button type="button" class="editable_textfield__button" onclick="document.execCommand('italic', true, '')" title="{{__('master-templates::actions.italic')}}"><img src="{{asset('images/italic.svg')}}" alt="{{__('master-templates::actions.italic')}}" width="20" height="20" /></button>
        <button type="button" class="editable_textfield__button" onclick="document.execCommand('CreateLink', true, prompt('Adres van de link'))" title="{{__('master-templates::actions.link')}}"><img src="{{asset('images/link.svg')}}" alt="{{__('master-templates::actions.link')}}" width="20" height="20" /></button>
        <button type="button" class="editable_textfield__button" onclick="document.execCommand('undo', true, '')" title="{{__('master-templates::actions.undo')}}"><img src="{{asset('images/history.svg')}}" alt="{{__('master-templates::actions.undo')}}" width="20" height="20" /></button>
    </div>
    <div class="form__input form__input--textarea form__editable_textfield" contenteditable="true" onblur="document.getElementById('{{$fieldname}}').value = this.innerHTML;">{!! $value !!}</div>
    <textarea data-qa="{{$fieldname}}" id="{{$fieldname}}" class="h--hidden" name="{{$fieldname}}">{{ $value }}</textarea>
    @if ($errors->has($fieldname))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($fieldname) }}</strong>
        </span>
    @endif
</div>
