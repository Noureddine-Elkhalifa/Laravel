@extends("layouts")
@section("title",'Packages Laravel')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Packages
                </h1>
               
                <ul class="">
                    @foreach ($myList as $item )
                        <li><a href="">{{$item['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection