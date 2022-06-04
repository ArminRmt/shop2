@extends('layout')

@section('main')


<main class="container" style="background-color: #fff;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Create New Post!</h1>
        {{-- @include('includes.flash-message') --}}
        
        <!-- Contact Form -->
        <div class="contact-form">
            {{-- {{ route('blog.store') }} post  enctype="multipart/form-data" --}}
            <form action="" method="" >
                {{-- @csrf --}}

                <!-- Title -->
                <label for="title"><span>Title</span></label>
                {{-- value="{{ old('title') }}" --}}
                <input type="text" id="title" name="title" />

                <!-- Price -->
                <label for="price"><span>Price</span></label>
                {{-- value="{{ old('title') }}" --}}
                <input type="text" id="price" name="price" />

                {{-- @error('title')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                @enderror --}}

                <!-- Image -->
                <label for="image"><span>Image</span></label>
                <input type="file" id="image" name="image" />
                {{-- @error('image')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                @enderror --}}

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
                {{-- {{ old('body') }} --}}
                <textarea id="body" name="body"></textarea>
                {{-- @error('body')
                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                @enderror --}}
                
                <!-- Button -->
                <input type="submit" value="Submit" />
            </form>
        </div>

    </section>
</main>



@endsection