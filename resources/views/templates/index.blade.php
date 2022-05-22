<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- TODO:作成するサイトによっては消す -->
    <meta name="robots" content="noindex">
	@yield('head')
</head>
<body>
	@component('layouts.wrapper')
		@slot('wrapper')
			@component('layouts.header')
                @slot('title')
                    {{ AppConstants::VIEW_TITLE }}
                @endslot
			@endcomponent
			@component('layouts.main')
				@slot('main')
					@component('layouts.contents')
						@slot('contents')
							@yield('contents')
						@endslot
					@endcomponent
				@endslot
			@endcomponent
			@component('layouts.footer')
			@endcomponent
			@yield('script')
		@endslot
	@endcomponent
</body>
</html>
