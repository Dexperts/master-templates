<div class="form__group form__group--search">
    <input data-qa="overview-search" id="overview-search" type="text"
           class="form__input"
           name="query"
           onchange="this.form.submit();"
            placeholder="{{$placeholder}}"
    value="{{old('query', $query)}}"/>
</div>
