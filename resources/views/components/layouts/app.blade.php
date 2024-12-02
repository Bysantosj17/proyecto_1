<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'default meta description' }}" />
    {{--  <link rel="stylesheet" href="/css/app.css">
    script src="/js/app.js"></script>  --}}
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <script type="text/javascript"
        src="https://counter6.optistats.ovh/private/counter.js?c=71pfn7lpc7zfmbwzpz6d2cclu6uptbt7&down=async" async>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script src="{{ url('fullcaledar/es.global.js') }}"></script>
</head>

<body>

<x-layouts.nav />

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}

<x-layouts.footer/>
</body>

</html>
