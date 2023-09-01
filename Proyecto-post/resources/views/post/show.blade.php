@extends('layouts.app')

@section('template_title')
    {{ $post->name ?? "{{ __('Show') Post" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('post.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $post->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $post->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $post->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $post->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection