@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Post
@endsection

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="/dist/tailwind.css" rel="stylesheet"/>

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-gray-900 text-white">
                        <span class="card-title">{{ __('Update') }} Post</span>
                    </div>
                    <div class="card-body">


                     <form method="POST" action="{{ route('post.update', $post->id) }}"  role="form" enctype="multipart/form-data">

                            {{ method_field('PATCH') }}
                            @csrf

                            @include('form')
                            <a href="{{ route('post.index') }}" class="btn btn-secondary pt-2 mt-1 w-24 "  >
                                <svg fill="none" class="ml-6 " height="1.5em" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z"></path>
                                  </svg> {{ __('Volver') }}
                              </a>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
