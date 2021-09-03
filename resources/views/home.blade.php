@extends('templates.structure')

@section ('title', 'HomePage')


@section('content')
    <div class="homePage">
        <div class="jumbo">
            <h1>CURRENT SERIES</h1>
        </div>
        <div class="container">

            @foreach($comics as $singleCard) 

                <div class="single-card">
                        
                    <a href="{{ route('singleComic', ['id' => $loop->iteration ]) }}">
                            
                            
                        <div class="single-card-content">
                            <img src="{{ $singleCard['thumb'] }}" />
                            <h3>{{ $singleCard["series"] }}</h3>
                        </div>

                            
                    </a> 

                </div>  
            
            @endforeach

            <div class="load">LOAD MORE</div>


        </div>
    </div>

    <div class="blu-ribbon">
        @include('templates.bluRibbon')
    </div>

@endsection