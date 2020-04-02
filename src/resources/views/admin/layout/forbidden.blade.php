@extends('master-templates::admin.layout.back')

@section('content')
    <div class="card background__solid--white">
        <div class="card__header">{{ __('master-templates::forbidden.title') }}</div>

        <div class="card__body">
            {!! __('master-templates::forbidden.content') !!}
        </div>
    </div>
@endsection