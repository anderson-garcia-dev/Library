<div class="row">
    <div class="col-md-3">
        <label class="form-label" for="title">{{ __('Title') }}</label>
        <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $book->title ?? '') }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-3">
        <label class="form-label" for="author">{{ __('Author') }}</label>
        <input type="text" id="author" name="author" class="form-control" value="{{ old('author', $book->author ?? '') }}">
        @error('author')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-3">
        <label class="form-label" for="published_year">{{ __('Published Year') }}</label>
        <input type="date" id="published_year" name="published_year" class="form-control" value="{{ old('title', $book->published_year ?? '') }}">
        @error('published_year')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-3">
        <label class="form-label" for="category_id">@lang('Category')</label>
        <select class="form-control" name="category_id">
            <option value="">{{__('Select an option')}}</option>
            @foreach($categories as $id => $name)
                <option value="{{ $id }}"
                    {{ old('category_id', $id ?? '') == $id ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="description">@lang('Description')</label>
            <textarea class="form-control" name="description" id="description" rows="4"
                      placeholder="@lang('Additional description or comments for this book...')">{{ old('description', $book->description ?? '') }}</textarea>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <button type="submit" class="btn btn-primary" id="submit-btn" name="submit-btn">{{ $btnTex }}</button>
        <a type="button" href="{{ route('home') }}" class="btn btn-primary"  name="submit-btn">{{ __('Back') }}</a>
    </div>
</div>
