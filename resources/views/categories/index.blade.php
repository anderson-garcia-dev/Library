@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">{{ __('Categories List') }}
                    <a type="button" href="{{ route('home') }}" class="btn btn-primary"  name="submit-btn">{{ __('Back') }}</a></div>

                <div class="card-body">
                    @if (@session('success'))
                        <div class="alert alert-success alert-dismissable fade show" role=alert>
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <td>{{ __('Name') }}</td>
                            <td>{{ __('Actions') }}</td>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <a class="btn btn-warning btn-sm" href="{{ route('categories.edit', $category->id) }}">
                                                <i class="fa fa-edit">{{ __('Edit') }}</i>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" id="delete-form" rol="form">
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
                        {{ $categories->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
