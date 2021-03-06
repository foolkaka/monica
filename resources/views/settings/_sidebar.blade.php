<div class="col-xs-12 col-sm-3 sidebar-menu">
  <ul class="mb4">

    @if (Route::currentRouteName() == 'settings.index')
    <li class="selected">
      <i class="fa fa-cog" aria-hidden="true"></i>
      <strong>{{ trans('settings.sidebar_settings') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-cog" aria-hidden="true"></i>
      <a href="{{ route('settings.index') }}">{{ trans('settings.sidebar_settings') }}</a>
    </li>
    @endif

    @if (Route::currentRouteName() == 'settings.personalization')
    <li class="selected">
      <i class="fa fa-handshake-o" aria-hidden="true"></i>
      <strong>{{ trans('settings.sidebar_personalization') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-handshake-o" aria-hidden="true"></i>
      <a href="{{ route('settings.personalization.index') }}">{{ trans('settings.sidebar_personalization') }}</a>
    </li>
    @endif

    @if (Route::currentRouteName() == 'settings.export')
    <li class="selected">
      <i class="fa fa-cloud-download" aria-hidden="true"></i>
      <strong>{{ trans('settings.sidebar_settings_export') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-cloud-download" aria-hidden="true"></i>
      <a href="{{ route('settings.export') }}">{{ trans('settings.sidebar_settings_export') }}</a>
    </li>
    @endif

    @if (Route::currentRouteName() == 'settings.import')
    <li class="selected">
      <i class="fa fa-cloud-upload" aria-hidden="true"></i>
      <strong>{{ trans('settings.sidebar_settings_import') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-cloud-upload" aria-hidden="true"></i>
      <a href="{{ route('settings.import') }}">{{ trans('settings.sidebar_settings_import') }}</a>
    </li>
    @endif

    @if (Route::currentRouteName() == 'settings.users.index')
    <li class="selected">
      <i class="fa fa-user-circle-o" aria-hidden="true"></i>
      <strong>{{ trans('settings.sidebar_settings_users') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-user-circle-o" aria-hidden="true"></i>
      <a href="{{ route('settings.users.index') }}">{{ trans('settings.sidebar_settings_users') }}</a>
    </li>
    @endif

    @if (config('monica.requires_subscription') && ! auth()->user()->account->has_access_to_paid_version_for_free)
      @if (Route::currentRouteName() == 'settings.subscriptions.index')
      <li class="selected">
        <i class="fa fa-money" aria-hidden="true"></i>
        <strong>{{ trans('settings.sidebar_settings_subscriptions') }}</strong>
      </li>
      @else
      <li class="bg-white">
        <i class="fa fa-money" aria-hidden="true"></i>
        <a href="{{ route('settings.subscriptions.index') }}">{{ trans('settings.sidebar_settings_subscriptions') }}</a>
      </li>
      @endif
    @endif

    @if (Route::currentRouteName() == 'settings.tags')
    <li class="selected">
      <i class="fa fa-tags" aria-hidden="true"></i>
      <strong>{{ trans('settings.sidebar_settings_tags') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-tags" aria-hidden="true"></i>
      <a href="{{ route('settings.tags.index') }}">{{ trans('settings.sidebar_settings_tags') }}</a>
    </li>
    @endif

    @if (Route::currentRouteName() == 'settings.api')
    <li class="selected">
      <i class="fa fa-random"></i>
      <strong>{{ trans('settings.sidebar_settings_api') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-random"></i>
      <a href="{{ route('settings.api') }}">{{ trans('settings.sidebar_settings_api') }}</a>
    </li>
    @endif

    @if (Route::currentRouteName() == 'settings.security')
    <li class="selected">
      <i class="fa fa-cog"></i>
      <strong>{{ trans('settings.sidebar_settings_security') }}</strong>
    </li>
    @else
    <li class="bg-white">
      <i class="fa fa-cog"></i>
      <a href="{{ route('settings.security.index') }}">{{ trans('settings.sidebar_settings_security') }}</a>
    </li>
    @endif
  </ul>
</div>
