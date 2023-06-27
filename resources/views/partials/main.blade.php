<main class="mainUp">
    <div class="container-fluid p-0">
        <div class="row">
            <img class="logo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 bg-dark d-flex align-items-center p-4">
                <div class="currentSeries text-white p-2">
                    <span> CURRENT SERIES</span>
                </div>
                <div id="contentHere" class="text-white d-flex flex-wrap justify-content-start align-items-center p-3">
                    @foreach ($cards as $card)
                    <div class="card_">
                        <img src="{{$card['thumb']}}" alt="{{$card['type']}}">
                        <small>{{ $card['series'] }}</small>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="load_ text-center">
                <button class="py-1 px-4 border-0 m-4 text-white"> LOAD MORE </button>
            </div>
        </div>
    </div>
</main>  