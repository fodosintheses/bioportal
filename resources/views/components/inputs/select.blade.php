@props(['id', 'name', 'label' => null, 'placeholder' => '', 'value' => '', 'foreach' => '']);

<div class="form-group">
    @if ($label)
        <label class="col-form-label">{{ $label }}</label>
    @endif
    <select name="{{ $name }}" class="form-control">
        <option value="">Select Location</option>
        @foreach ($locations as $location)
            <option value="{{ $name, $value }}">{{ ucwords(strtolower($location->location)) }}</option>
        @endforeach
    </select>
</div>
