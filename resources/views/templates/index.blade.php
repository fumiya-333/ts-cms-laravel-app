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
		@section('wrapper')
			@component('layouts.header')
				@section('header-title', AppConstants::VIEW_TITLE)
			@endcomponent
			@component('layouts.main')
				@section('main')
					@component('layouts.contents')
						@section('contents')
							@yield('contents')
						@endsection
					@endcomponent
				@endsection
			@endcomponent
			@component('layouts.footer')
			@endcomponent
			@yield('script')
		@endsection
	@endcomponent
</body>
</html>
