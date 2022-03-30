@extends('layout')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

<!doctype html>
<html lang="en">
<head>
    // código ...

    @stack('styles')
</head>

<body>
    //código ...

    @stack('scripts')
</body>
</html>