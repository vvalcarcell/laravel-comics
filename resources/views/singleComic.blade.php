@extends('templates.structure')

@section ('title', 'Comic')


@section('content')
    <div class="single-Comic">
        <div class="jumbo"></div>
        <section class="blu-ribbon">
            <div class="container">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
        </section>

        <section class="container-comic">

            <div class="left-item">
                <h1>{{$comic['title']}}</h1>
                <div class="green-ribbon flex">
                    <div class="item-left flex">
                        <div class="price-info">
                            <span class="price">U.S. Price:</span>
                            <span class="bold">{{$comic['price']}}</span>
                        </div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="item-right">
                        <div class="bold">Check Availability</div>
                    </div>
                </div>
                <p>{{ $comic['description']}}</p>
            </div>

            <div class="right-item">
                <div class="adv flex">advertisement</div>
                <div class="adv-box flex">
                    <img src="/img/adv.jpg" alt="">
                </div>
            </div>          
          
        </section>

        <section class="grey-section">
            <div class="container flex">
                <div class="column left">
                    <h2>Talent</h2>

                    <div class="info-by flex">
                        <div class="bold">Art by:</div>
                        <p>
                            @foreach($comic['artists'] as $artist)
                                {{ $artist }},

                            @endforeach
                        </p>
                    </div>
                    <div class="info-by flex">
                        <div class="bold">Written by:</div>
                        <p>
                            @foreach($comic['writers'] as $writer)
                                {{ $writer }},

                            @endforeach
                        </p>
                    </div>

                </div>
                <div class="column right">
                    <h2>Specs</h2>

                    <div class="info-by flex">
                        <div class="bold">Series:</div>
                        <p class="uppercase">
                            {{ $comic['series'] }}
                        </p>
                    </div>
                    <div class="info-by flex">
                        <div class="bold">U.S. Price:</div>
                        <p>
                             {{ $comic['price'] }}
                        </p>
                    </div>
                    <div class="info-by flex">
                        <div class="bold">On Sale Date:</div>
                        <p>
                            {{ $comic['sale_date'] }}
                        </p>
                    </div>
                </div>
            </div>
        
        </section>



    </div>



@endsection