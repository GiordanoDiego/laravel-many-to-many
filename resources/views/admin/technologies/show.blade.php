@extends('layouts.app')

@section('page-title', $technology->title)

@section('main-content')
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center text-success">
                    {{ $technology->title }}
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center text-success">
                    Progetti con questa technology
                </h2>

                <ul>
                    @foreach ($technology->projects as $project)
                        <li>
                            <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                                {{ $project->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
