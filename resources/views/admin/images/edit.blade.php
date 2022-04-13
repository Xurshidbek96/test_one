@extends('admin.layouts.layout')

@section('images')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit</h3>
                        <a class="create__btn" href="{{route('banners.index')}}"> <i class='bx bx-arrow-back'></i>Back</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('banners.update', $image[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong>Name  :</strong>
                        <input type="text" name="name" value="{{$image[0]->name}}" class="form-control"> <br>

                         <strong>Image : </strong> <br>
                         <img src="{{URL::to($image[0]->img)}}" width="100px">
                        <input type="file" name="img" value="{{$image[0]->img}}">
                        

                        <input type="submit" value="Submit">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->
@endsection
