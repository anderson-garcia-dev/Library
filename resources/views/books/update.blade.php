@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Books Form') }}</div>

                <div class="card-body">
                    <form action="{{ route('books.update', $book->id) }}" method="POST" id="update_form" rol="form">
                        @csrf
                        @method('PUT')
                        @include('books.__form', ['btnTex' => 'Update'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
