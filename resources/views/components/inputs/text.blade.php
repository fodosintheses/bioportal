@props(['id', 'name', 'value' => '', 'label' => null, 'type' => 'text', 'placeholder' => ''])

<div class="form-group">
    @if ($label)
        <label class="col-form-label">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" class="@error($name) error @enderror form-control" name="{{ $name }}"
        value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}">

    @error($name)
        <x-warnings>{{ $message }}</x-warnings>
    @enderror
</div>
