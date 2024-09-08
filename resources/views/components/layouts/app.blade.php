<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'default meta description' }}"/>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>

<x-layouts.nav/>

@if(session('status'))
    <div>
        {{ session('status') }}
    </div>
@endif

{{ $slot }}

</body>
</html>
