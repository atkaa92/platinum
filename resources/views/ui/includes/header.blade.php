<header class="l-header">
	<div class="l-container">
			<a href="{{ url('/') }}" class="header-logo">
					<img src="{{ asset('images/logo.png') }}" alt="" class="header-logo__img">
			</a>
	</div>
</header>
<div class="language">
    <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li >
                <a 
                class="languageItem {{ LaravelLocalization::getCurrentLocale() == $localeCode ? ' whiteShadow' : '' }}" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

@if(session('success'))
    <div class="uiSuccess">
        <div class="header-block">
            <p> {{session('success')}} </p>
        </div>
    </div>
@endif