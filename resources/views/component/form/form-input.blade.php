<div class="form-group {{ $floating ? 'form-floating mb-3' : '' }}">
    @if($inputFirst)
        <input type="{{ $type }}" class="form-control" name="{{ $name }}"
        value="{{ old($name, $value ?? '') }}" placeholder="{{ $placeholder }}" required="required">
    @endif
    <label for="floating{{ ucfirst($name) }}">{{ $label }}</label>
    @if(!$inputFirst)
        <input type="{{ $type }}" class="form-control" name="{{ $name }}"
        value="{{ old($name, $value ?? '') }}" placeholder="{{ $placeholder }}" required="required">
    @endif
    @if ($errors->has($name))
        <span class="text-danger text-left">{{ $errors->first($name) }}</span>
    @endif
</div>
