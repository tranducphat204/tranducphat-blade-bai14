<ul>
    Here are all fruits:
    @foreach ($model as $row)
    <li>{{ $row['name'] }} costs {{ $row['price'] }}</li>
    @endforeach
    {{$url}}
</ul>