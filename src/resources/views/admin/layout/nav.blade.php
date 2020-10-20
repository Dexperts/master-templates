@auth
<nav>
    <ul class="navigation">
        @if (env('DEXPERTS_USE_MODULES_AUTHENTICATION', true))
            @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::users, \Dexperts\Authentication\Rights::read))
                @component('master-templates::components.navigation-item', [
                    'url' => action('\Dexperts\Authentication\Controllers\UserController@index'),
                    'label' => __('master-templates::navigation.users'),
                    'className' => 'navigation__item'
                ])@endcomponent
            @endif
        @endif
        @if (env('DEXPERTS_USE_MODULES_PRODUCTS'))
            @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::products, \Dexperts\Authentication\Rights::read))
                @component('master-templates::components.navigation-item', [
                    'url' => action('\Dexperts\Products\Controllers\ProductController@index'),
                    'label' => __('master-templates::navigation.products'),
                    'className' => 'navigation__item'
                ])@endcomponent
            @endif
        @endif
        @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::orders, \Dexperts\Authentication\Rights::read))
            @component('master-templates::components.navigation-item', [
                'url' => action('\Dexperts\Shop\Controllers\OrderController@index'),
                'label' => __('master-templates::navigation.orders'),
                'className' => 'navigation__item'
            ])@endcomponent
        @endif
        @if (env('DEXPERTS_USE_MODULES_APPOINTMENT_SCHEDULER'))
            @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::appointments, \Dexperts\Authentication\Rights::read))
                @component('master-templates::components.navigation-item', [
                    'url' => url('/admin/appointments'),
                    'label' => __('master-templates::navigation.appointments'),
                    'className' => 'navigation__item'
                ])@endcomponent
            @endif
        @endif
        @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::customers, \Dexperts\Authentication\Rights::read))
            @component('master-templates::components.navigation-item', [
                'url' => url('/admin/shop/customers'),
                'label' => __('master-templates::navigation.customers'),
                'className' => 'navigation__item'
            ])@endcomponent
        @endif
        <li>
            @component('master-templates::components.navigation-group', [
                'label' => __('master-templates::navigation.others'),
                'className' => 'navigation__item navigation__item__group'
            ])
                <ul class="navigation__group">
                    @if (env('DEXPERTS_USE_MODULES_APPOINTMENT_SCHEDULER'))
                        @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::locations, \Dexperts\Authentication\Rights::read))
                            @component('master-templates::components.navigation-item', [
                                'url' => url('/admin/locations'),
                                'label' => __('master-templates::navigation.locations'),
                                'className' => 'navigation__group__item'
                            ])@endcomponent
                        @endif
                    @endif
                    @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::calculator, \Dexperts\Authentication\Rights::read))
                        @component('master-templates::components.navigation-item', [
                            'url' => url('/admin/shop/calculator'),
                            'label' => __('master-templates::navigation.calculator'),
                            'className' => 'navigation__group__item'
                        ])@endcomponent
                    @endif
                    @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::legislations, \Dexperts\Authentication\Rights::read))
                        @component('master-templates::components.navigation-item', [
                            'url' => url('/admin/legislation'),
                            'label' => __('master-templates::navigation.legislation'),
                            'className' => 'navigation__group__item'
                        ])@endcomponent
                    @endif
                    @if (env('DEXPERTS_USE_MODULES_CAMPAIGNS'))
                        @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::trends, \Dexperts\Authentication\Rights::read))
                            @component('master-templates::components.navigation-item', [
                                'url' => url('/admin/trends'),
                                'label' => __('master-templates::navigation.trends'),
                                'className' => 'navigation__group__item'
                            ])@endcomponent
                        @endif
                    @endif
                    @if (env('DEXPERTS_USE_MODULES_BLOGS'))
                        @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::blogs, \Dexperts\Authentication\Rights::read))
                            @component('master-templates::components.navigation-item', [
                                'url' => url('/admin/blogs'),
                                'label' => __('master-templates::navigation.blogs'),
                                'className' => 'navigation__group__item'
                            ])@endcomponent
                        @endif
                        @if (\Dexperts\Authentication\Rights::isAllowed(\Dexperts\Authentication\Rights::pages, \Dexperts\Authentication\Rights::read))
                            @component('master-templates::components.navigation-item', [
                                'url' => url('/admin/pages'),
                                'label' => __('master-templates::navigation.pages'),
                                'className' => 'navigation__group__item'
                            ])@endcomponent
                        @endif
                    @endif
                </ul>
            @endcomponent
        </li>
    </ul>
</nav>
@if (Auth::check())
    <ul class="list--right">
        <li class="list--right__item list--right__item--secondary">{{Auth::user()->name}}</li>
        <li class="list--right__item"><a class="button button--secondary button--secondary--small" href="/admin/logout" title="{{ __('master-templates::navigation.logout') }}">{{ __('master-templates::navigation.logout') }}</a></li>
    </ul>
@endif
@endauth
