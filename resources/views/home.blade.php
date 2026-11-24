@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Libreary Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row text-center">
                        <div class="col-md-3">
                            <a href="{{ route('categories.index') }}" type="button" class="btn btn-primary">{{__('Category List')}}</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('categories.create') }}" type="button" class="btn btn-primary">{{__('Create Category')}}</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('books.index') }}" type="button" class="btn btn-success">{{__('Book List')}}</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('books.create') }}" type="button" class="btn btn-success">{{__('Create Book')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
