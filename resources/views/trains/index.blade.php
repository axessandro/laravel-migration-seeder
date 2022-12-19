@extends('layout.app')

@section('title', 'Treni')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-1">
                @foreach ($trains as $train)
                    <div class="col">
                        <div class="company">Treno</div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
