@extends('layout')

@section('content')
    <div id="main">
        <div id="string" class="section">
            <div class="container">
                <div class="section-information">
                    <h2>String algorithms</h2>
                </div>
                <div class="row">
                    @foreach(\App\Algorithms\AlgorithmService::getStringAlgorithms() as $algorithm)
                        <div class="col-md-4">
                            <a href="/algorithm/{{ $algorithm->getSlug() }}" title="{{ $algorithm->getName() }}">
                                <div class="panel panel-default panel-tool">
                                    <div class="panel-body">
                                        {{ $algorithm->getName() }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="hash" class="section">
            <div class="container">
                <div class="section-information">
                    <h2>Hash algorithms</h2>
                </div>
                <div class="row">
                    @foreach(\App\Algorithms\AlgorithmService::getHashAlgorithms() as $algorithm)
                        <div class="col-md-4">
                            <a href="/algorithm/{{ $algorithm->getSlug() }}" title="{{ $algorithm->getName() }}">
                                <div class="panel panel-default panel-tool">
                                    <div class="panel-body">
                                        {{ $algorithm->getName() }}
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