@auth
<nav>
    <ul class="navigation">
        @if (env('DEXPERTS_USE_MODULES_AUTHENTICATION', true))
            @component('master-templates::components.navigation-item', [
                'url' => action('\Dexperts\Authentication\Controllers\UserController@index'),
                'label' => __('master-templates::navigation.users'),
                'className' => 'navigation__item'
            ])@endcomponent
            @component('master-templates::components.navigation-item', [
                'url' => action('\Dexperts\Authentication\Controllers\RightsController@index'),
                'label' => __('master-templates::navigation.rights'),
                'className' => 'navigation__item'
            ])@endcomponent
        @endif
        @if (env('DEXPERTS_USE_MODULES_PRODUCTS'))
            @component('master-templates::components.navigation-item', [
                'url' => action('\Dexperts\Products\Controllers\ProductController@index'),
                'label' => __('master-templates::navigation.products'),
                'className' => 'navigation__item'
            ])@endcomponent
        @endif
        @if (env('DEXPERTS_USE_MODULES_APPOINTMENT_SCHEDULER'))
            @component('master-templates::components.navigation-item', [
                'url' => url('/admin/locations'),
                'label' => __('master-templates::navigation.locations'),
                'className' => 'navigation__item'
            ])@endcomponent
            @component('master-templates::components.navigation-item', [
                'url' => url('/admin/appointments'),
                'label' => __('master-templates::navigation.appointments'),
                'className' => 'navigation__item'
            ])@endcomponent
        @endif
    </ul>
</nav>
@if (Auth::check())
    <ul class="list--right">
        <li class="list--right__item list--right__item--secondary">{{Auth::user()->name}}</li>
        <li class="list--right__item"><a class="button button--secondary button--secondary--small" href="/admin/logout" title="{{ __('master-templates::navigation.logout') }}">{{ __('master-templates::navigation.logout') }}</a></li>
    </ul>
@endif
@endauth
