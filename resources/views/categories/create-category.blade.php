@extends('layout')
@section('ckeditor')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

@endsection

@section('main')
<br>


<main class="container" style="background-color: #fff;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Create New Category!</h1>
        @include('includes.flash-message')
        
        <!-- Contact Form -->
        <div class="contact-form">
            <form action="{{ route('categories.store') }}" method="post">
                @csrf

                <!-- Title -->
                <label for="name"><span>Name</span></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"/>
                 @error('name')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                 @enderror
                
                <!-- Button -->
                <input type="submit" value="Submit" />
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </form>
            
            
        </div>
        <div class="create-categories">
            <a href="{{route('categories.index')}}">Categories list <span>&#8594;</span></a>
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