@extends('layout')

@section('content')
    <div id="main" class="algo">

        @if($algorithm->getType() === \App\Algorithms\StringAlgorithm::class)
            @include('algorithm.forms.string')
        @elseif($algorithm->getType() === \App\Algorithms\HashAlgorithm::class)
            @include('algorithm.forms.hash')
        @endif

        <div class="section">
            <div class="container">
                <div class="section-information">
                    <h2>More algorithms</h2>
                    <p>Here is some more algorithms for you to use on your strings.</p>
                </div>
                <div class="algorithm-list">
                    @foreach(\App\Algorithms\AlgorithmService::getAllAlgorithms()->random(8) as $randomAlgorithm)
                        <div class="col-md-3">
                            <a href="/algorithm/{{ $randomAlgorithm->getSlug() }}" title="{{ $randomAlgorithm->getName() }}">
                                <div class="panel panel-default panel-tool">
                                    <div class="panel-body">
                                        {{ $randomAlgorithm->getName() }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection