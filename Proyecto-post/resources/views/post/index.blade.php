@extends('layouts.app')

@section('template_title')
    Post
@endsection

<link href="/dist/tailwind.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 ">
                <div class="card bg-gray-900">
                    <div class="card-header bg-gray-900">
                        <div style="bg-gray-900 display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title bg-gray-900">
                                {{ __('Post') }}
                            </span>

                            <div class="float-right bg-gray-900">
                                <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm float-right bg-gray-900"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Fecha</th>
                                        <th>Titulo</th>
                                        <th>Comentario</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Fecha Ultima Actualización</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $post->fecha }}</td>
                                            <td>{{ $post->titulo }}</td>
                                            <td>{{ $post->comentario }}</td>
                                            <td>{{ $post->user->name }}</td>
                                            <td>{{ $post->user->apellido }}</td>
                                            <td>{{ $post->updated_at }}</td>

                                            <td>
                                                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('post.show', $post->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('post.edit', $post->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
