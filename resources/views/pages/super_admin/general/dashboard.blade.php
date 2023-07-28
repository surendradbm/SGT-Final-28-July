<x-default-layout>
    Dashboard
    @if (auth()->check())
        <!-- User is logged in -->
        <h1>Logged In</h1>
        @else
        <!-- User is not logged in -->
        <h1>Not Logged In </h1>
    @endif

</x-default-layout>
