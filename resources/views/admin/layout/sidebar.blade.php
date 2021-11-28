<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Site Content</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/banners') }}"><i class="nav-icon icon-film"></i> {{ trans('admin.banner.title') }}</a></li>

            <li class="nav-title">Company Details</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/company-profiles') }}"><i class="nav-icon icon-speech"></i> {{ trans('admin.company-profile.title') }}</a></li>

           <li class="nav-item"><a class="nav-link" href="{{ url('admin/president-messages') }}"><i class="nav-icon icon-speech"></i> {{ trans('admin.president-message.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/certification-policies') }}"><i class="nav-icon icon-speech"></i> {{ trans('admin.certification-policy.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/company-histories') }}"><i class="nav-icon icon-speech"></i> {{ trans('admin.company-history.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/recruitments') }}"><i class="nav-icon icon-folder"></i> {{ trans('admin.recruitment.title') }}</a></li>


           <li class="nav-title">Products &amp; Technology</li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/technologies') }}"><i class="nav-icon icon-layers"></i> {{ trans('admin.technology.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/product-applications') }}"><i class="nav-icon icon-drawer"></i> {{ trans('admin.product-application.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/products') }}"><i class="nav-icon icon-drawer"></i> {{ trans('admin.product.title') }}</a></li>

           <li class="nav-title">Visitor Stats</li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/visitors') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.visitor.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            {{-- <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li> --}}
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
