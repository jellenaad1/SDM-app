@extends('master')
@section("content")
<div class="container">
    <div class = "row">
        <div class="col-sm-6">
            <img class = "detail-img" src="{{$product['photo']}}" alt="">

        </div>
        <div class="col-sm-6">
        <a href="/">
        <button type="submit" class="btn btn-dark">Nazad</button></a>
            
        <h2 >{{$product['name']}}</h2>
        <h3 class="slider-text ">Cena:{{$product['price']}}din</h3>
        
        <h3><small class="text-muted">Opis</small></h3>
        <h4 ><small class="text-muted ">{{$product['description']}}</small>
            </h4>
            
            
          
            <form action="/add_to_cart" method ="POST">
                @csrf
                <input type="hidden" name = "product_id" value="{{$product['id']}}">
            <button class="btn btn-dark"> Dodaj u korpu</button>
            </form>
            <br><br>

            <button class="btn btn-secondary"> Kupi odmah</button>

            <br><br>

        


        </div>
    </div>

</div>



@endsection