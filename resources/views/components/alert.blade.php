@props(['type', 'message'])

@if(session()->has($type))
<div class="alert {{$type == 'success' ? 'alert-success': 'alert-danger'}}" role="alert" x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000 )" x-show="show" role="alert">
    <p color="black">{{$message}}</p>
</div>
@endif