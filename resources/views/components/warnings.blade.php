@props([
    'class' => 'text-danger'
])

<p class="{{$class}}">{{$slot}}</p>