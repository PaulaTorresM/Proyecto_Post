@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Post
@endsection

<link href="/dist/tailwind.css" rel="stylesheet"/>

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Post</span>
                    </div>
                    <div class="card-body">


                     <form method="POST" action="{{ route('post.update', $post->id) }}"  role="form" enctype="multipart/form-data">

                            {{ method_field('PATCH') }}
                            @csrf

                            @include('post.form')

                        </form>

                            <a href="{{ route('post.index') }}" class="btn btn-secondary pt-2"  >
                              {{ __('Volver') }}
                            </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
