<div class="row">
    <div class="mb-3">
    <div class="col-md-12">
        <label class="form-label" for="name">{{ __('Name') }}</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $category->name ?? '') }}">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" id="submit-btn" name="submit-btn">{{ $btnTex }}</button>
        <a type="button" href="{{ route('home') }}" class="btn btn-primary"  name="submit-btn">{{ __('Back') }}</a>
    </div>
</div>
