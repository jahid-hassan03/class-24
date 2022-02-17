@extends('master')

@section('title')
    about page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{$product['image']}}" alt="" class="card-img-top " height="300px"/>
                            <div class="card-body">
                                <h3 class="card-title">{{$product['name']}}</h3>
                                <p>TK. {{$product['price']}}</p>

                                <hr/>
                                <a href="{{route('detail', ['id'=> $product['id']])}}" class="btn btn-success">detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
