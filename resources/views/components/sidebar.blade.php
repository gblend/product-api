<div>
    {{ $title }}
    {{ $info}}
    {{ $something }}
    <h1>Side bar</h1>
        <ul>
            @foreach($list as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

    {{ $slot }}
</div>
