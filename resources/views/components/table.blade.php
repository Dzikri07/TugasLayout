@props([
    'headers' => [],
    'class' => 'min-w-full bg-white'
])

<div class="bg-white p-4 rounded shadow">
    <table class="{{ $class }}">
        @if(count($headers) > 0)
        <thead>
            <tr>
                @foreach($headers as $header)
                <th class="py-2 px-4 border-b">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        @endif
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>