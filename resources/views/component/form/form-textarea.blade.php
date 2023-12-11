<div class="form-group">
    <label for="">{{ $label }}</label>
    <textarea name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}">{{ $value }}</textarea>
    @if ($errors->has($name))
        <span class="text-danger text-left">{{ $errors->first($name) }}</span>
    @endif
</div>
