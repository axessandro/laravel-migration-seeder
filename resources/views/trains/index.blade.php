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
                                <div class="company">Compagnia: {{ $train->company }}</div>
                                <div class="train-code">Codice treno: {{ $train->train_code }}</div>
                            </div>

                            <div class="start-info infos">
                                <div class="start-station">Stazione partenza: {{ $train->start_station }}</div>
                                <div class="start-hour">Orario partenza: {{ $train->start_hour }}</div>
                            </div>

                            <div class="end-info infos">
                                <div class="end-station">Stazione arrivo: {{ $train->end_station }}</div>
                                <div class="end-hour">Orario arrivo: {{ $train->end_hour }}</div>
                            </div>

                            <div class="details infos">
                                <div class="in-time">
                                    @if ($train->in_time === 0)
                                        <span class="text-warning">Ritardo</span>
                                    @endif
                                </div>
                                <div class="deleted">
                                    @if ($train->deleted === 1)
                                        <span class="text-danger">Cancellato</span>
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
