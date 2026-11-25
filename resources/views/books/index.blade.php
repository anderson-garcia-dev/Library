@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">{{ __('Books List') }}
                    <a type="button" href="{{ route('home') }}" class="btn btn-primary"  name="submit-btn">{{ __('Back') }}</a></div>

                <div class="card-body">
                    @if (@session('success'))
                        <div class="alert alert-success alert-dismissable fade show" role=alert>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form action="{{ route('books.index') }}" method="GET" class="d-flex" id="form-filter" rol="form">
                                <select name="category" class="form-select me-2">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary me-2">{{__('Filter')}}</button>
                                @if (request('category'))
                                    <a href="{{ route('books.index') }}" class="btn btn-secondary">{{__('Clear')}}</a>
                                @endif
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <td>{{ __('Name') }}</td>
                            <td>{{ __('Author') }}</td>
                            <td>{{ __('Published Year') }}</td>
                            <td>{{ __('Category') }}</td>
                            <td>{{ __('Description') }}</td>
                            <td>{{ __('Actions') }}</td>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->published_year}}</td>
                                <td>{{$book->category->name}}</td>
                                <td>{{$book->description}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn btn-warning btn-sm" href="{{ route('books.edit', $book->id) }}">
                                                <i class="fa fa-edit">{{ __('Edit') }}</i>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" id="delete-form" rol="form">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fa fa-edit">{{ __('Delete') }}</i>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $books->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
