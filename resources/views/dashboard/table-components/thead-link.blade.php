<a class="{{ $params['orderType'] }} @if ($params['orderBy'] == $orderBy) active @endif" href="{{ $params['newOrderUrl'] . '&orderBy=' . $orderBy }}">
    {{ $title }}
</a>
