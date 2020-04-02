@auth
<nav>
    <ul>
        @component('master-templates::components.navigation-item', [
            'url' => '/admin/users',
            'label' => __('master-templates::navigation.users')
        ])@endcomponent
        @component('master-templates::components.navigation-item', [
            'url' => '/admin/rights',
            'label' => __('master-templates::navigation.rights')
        ])@endcomponent
    </ul>
</nav>
@if (Auth::check())
    <ul class="list--right">
        <li>{{Auth::user()->name}}</li>
        <li><a class="button button--secondary button--secondary--small" href="/admin/logout" title="{{ __('master-templates::navigation.logout') }}">{{ __('master-templates::navigation.logout') }}</a></li>
    </ul>
@endif
@endauth