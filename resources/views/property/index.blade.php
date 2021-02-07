@extends('layout')

@section('content')
<div class="container project-container" max-width="90%">
    <div class="row text-center border margin-space">
        @foreach ($property as $property)

        <div class=" col-xs-12 col-sm-6 col-md-4 border ">
            <p class="text-uppercase mb-0 font-18 font-weight-bold">{{$property -> name}}</p>
            <img class="project-img" src="img/cons1.jpg">
            <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. When an unknown printer took a galley of type and scrambled it...<a href="#"
                    class="font-600 text-muted">view more</a></p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> area}}</h3>
                    <p class="text-muted">Area</p>
                </li>
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> bed}}</h3>
                    <p class="text-muted">Beds</p>
                </li>
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> bath}}</h3>
                    <p class="text-muted">Bath</p>
                </li>
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> garage}}</h3>
                    <p class="text-muted">Garage</p>
                </li>
            </ul>
            <ul class="list-inline text-left mb-0">
                <li class="list-inline-item ml-3">
                    <p>Type : </p>
                </li>
                <li class="list-inline-item">
                    <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                        {{$property -> type}}
                    </a>
                </li>
            </ul>

            <ul class="list-inline text-left mb-0">
                <li class="list-inline-item">
                    <div class="project-members mb-4 text-left">
                        <label class="mr-3 ml-3">Agent :</label>
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Mat Helme"><img
                                src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle thumb-sm"
                                alt="friend"> </a>

                    </div>


                </li>
                <li class="list-inline-item float-right">
                    <a href="{{route('property.show',['property'=> $property->id])}}"
                        class="btn btn-success btn-rounded w-md  text-center mr-5 ">View
                        Property</a>
                </li>
            </ul>
        </div>

        @endforeach
    </div>
</div>
@endsection