@extends('templates.structure')

@section ('title', 'HomePage')


@section('content')
    <div class="homePage">
        <div class="container">

            @foreach($comics as $singleCard) 

                <div class="single-card">

            
                    <div class="single-card-content">
                        <img src="{{ $singleCard['thumb'] }}" />
                        <h3>{{ $singleCard["title"] }}</h3>
                    </div>
                    
                </div>            
            @endforeach


        </div>
    </div>

    <div class="blu-ribbon">
        @include('templates.bluRibbon')
    </div>

@endsection