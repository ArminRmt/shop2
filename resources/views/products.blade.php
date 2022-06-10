@extends('layout')



  @section('main')

    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                <li>
                   <div class="searchbar">
                      <form action="">
                          <input type="text" placeholder="Search..." name="search" />
          
                          <button type="submit">
                              <i class="fa fa-search"></i>
                          </button>
          
                      </form>
                  </div>
                </li>
                @foreach ($categories as $category)
                  <li data-filter=".dev">{{$category->name}}</li>
                @endforeach
                  {{-- <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li> --}}
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">

                  @forelse($posts as $post)

                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="{{route('show', $post)}}"><img src="{{asset($post->imagePath)}}" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>{{$post->title}}</h4></a>
                          <h6>Written By {{ $post->user->name }}</h6>
                          <p>{!!$post->body!!}</p>
                          {{-- <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul> --}}
                          <span>{{$post->created_at->diffForHumans()}}</span>
                          <span></span>

                          @auth
                            @if (auth()->user()->id === $post->user->id)
                                <div class="post-buttons">
                                    <a href="{{ route('edit', $post) }}">Edit</a>
                                    <form action="{{ route('destroy', $post) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <input type="submit" value=" Delete">
                                  </form>
                                </div>
                            @endif
                          @endauth
                        </div>
                      </div>
                    </div>

                    @empty
                    <h1 style="color: red; font-size:20px; font-weight:bold">
                      Sorry, currently there is no blog post related to that search!</h1>
                    
                  @endforelse

                </div>
            </div>
          </div>
          
          
        </div>
        {{$posts->links()}}
      </div>
    </div>
    
    <br>
    <br>

    
    
  @endsection

 
    



    


