@extends('layout')
@section('ckeditor')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

@endsection

@section('main')


<main class="container" style="background-color: #fff;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Create New Post!</h1>

        {{-- post created successfully --}}
        {{-- @if(session('status'))
            <p>{{session}}</p>
        @endif --}}


        {{-- @include('includes.flash-message') --}}
        
        <!-- Contact Form -->
        <div class="contact-form">
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <label for="title"><span>Title</span></label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"/>
                 @error('title')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                 @enderror


                <!-- Price -->
                <label for="price"><span>Price</span></label>
                <input type="text" id="price" name="price" value="{{ old('title') }}"/>

                @error('price')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                @enderror


                <!-- Image -->
                <label for="image"><span>Image</span></label>
                <input type="file" id="image" name="image" />
                @error('image')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                @enderror

                <!-- Drop down -->
                {{-- <label for="categories"><span>Choose a category:</span></label>
                <select name="category_id" id="categories">
                    <option selected disabled>Select option </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                @enderror --}}


                <!-- Body-->
                <label for="body"><span>Body</span></label>
                <textarea id="body" name="body">{{ old('body') }}</textarea>
                @error('body')
                    <p style="color: red; margin-bottom:25px;">{{$message}}</p>
                @enderror
                
                <!-- Button -->
                <input type="submit" value="Submit" />
            </form>
        </div>

    </section>
</main>



@endsection

@section('ckeditor2')

    {{-- ckeditor --}}
    <script>
        ClassicEditor
                .create( document.querySelector( '#body' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
      </script>

@endsection      