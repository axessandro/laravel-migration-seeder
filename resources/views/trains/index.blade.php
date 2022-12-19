@extends('layout.app')

@section('title', 'Treni')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-1">
                @foreach ($trains as $train)
                    <div class="col">

                        <div class="train-card">
                            <div class="train-info infos">
                                <div class="company">{{ $train->company }}</div>
                                <div class="train-code">{{ $train->train_code }}</div>
                            </div>

                            <div class="start-info infos">
                                <h5>Partenza</h5>
                                <div class="start-station">Stazione: {{ $train->start_station }}</div>
                                <div class="start-hour">{{ $train->start_hour }}</div>
                            </div>

                            <div class="end-info infos">
                                <h5>Arrivo</h5>
                                <div class="end-station">{{ $train->end_station }}</div>
                                <div class="end-hour">{{ $train->start_hour }}</div>
                            </div>

                            <div class="details infos">
                                <div class="in-time">
                                    @if ($train->in_time === 1)
                                        <span>Ritardo</span>
                                    @endif
                                </div>
                                <div class="deleted">
                                    @if ($train->deleted === 0)
                                        <span>Cancellato</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
