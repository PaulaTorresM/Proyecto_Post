@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Post
@endsection
<link href="/dist/tailwind.css" rel="stylesheet"/>


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Post</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('post.form')



                        </form>
                        <a href="{{ route('post.index') }}" class="btn btn-secondary pt-2">
                            {{ __('Volver') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
