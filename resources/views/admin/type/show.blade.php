@extends('layouts.app')

@section('page-title', $type->name)

@section('main-content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">
                    {{ $type->name }}
                </h1>

                <h2>
                    Slug: {{ $type->slug }}
                </h2>

                <p>
                    {{ $type->content }}
                </p>

                <div class="text-center">
                    <a href="{{ route('admin.type.index') }}">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
