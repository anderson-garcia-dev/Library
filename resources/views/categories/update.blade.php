@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categories Form') }}</div>

                <div class="card-body">
                    @if (@session('success'))
                        <div class="alert alert-success alert-dismissable fade show" role=alert>
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('categories.update', $category) }}" method="POST" id="update_form" rol="form">
                        @csrf
                        @method('PUT')
                        @include('categories.__form', ['btnTex' => 'Update'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
