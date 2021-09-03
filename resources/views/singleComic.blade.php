@extends('templates.structure')

@section ('title', 'Comic')


@section('content')
    <div class="single-Comic">
        <div class="jumbo"></div>
        <div class="blu-ribbon">
            <div class="container">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
        </div>

        <div class="container-comic">
            <div class="right-item">
                <h1>{{$comic['title']}}</h1>
                <div class="green-ribbon">
                    <div class="item-left">
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
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quisquam doloremque deserunt enim, consequatur ipsam animi quaerat quam repellat harum rerum quae qui ea reprehenderit atque dolore obcaecati, sunt nostrum.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus nemo eligendi, reprehenderit id vitae maiores aut deserunt tempore vel sequi molestiae tempora laboriosam officia rerum optio veritatis consequatur? Id, debitis!
                </p>
            </div>
            <div class="left-item">
                <div class="adv">advertisement</div>
                <div class="adv-box">
                    <img src="/img/adv.jpg" alt="">
                </div>
            </div>
            
          
        </div>

    </div>



@endsection