@extends('templates.structure')

@section ('title', 'HomePage')


@section('content')
    <div class="homePage">
        <div class="container">

            @foreach($comics as $singleCard) 

               <a href="{{ route('singleComic', ['id' => $loop->iteration ]) }}">
                    <div class="single-card">
                    
                        <div class="single-card-content">
                            <img src="{{ $singleCard['thumb'] }}" />
                            <h3>{{ $singleCard["series"] }}</h3>
                        </div>

                    </div> 
               </a> 
            
            @endforeach


        </div>
    </div>

    <div class="blu-ribbon">
        @include('templates.bluRibbon')
    </div>

@endsection