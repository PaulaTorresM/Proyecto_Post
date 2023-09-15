@extends('layouts.app')

@section('template_title')
    Post
@endsection

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title ">{{ __('Post') }} </span>
                </div>
                            <div class="float-right p-1">
                                <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm float-right w-24 "
                                    data-placement="left">
                                    <svg fill="none" stroke="currentColor" class="ml-8" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                      </svg>
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
                        <div class="table-responsive mt-4">
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
                                            <td>{{ $post->created_at }}</td>

                                            <td>
                                                <form action="{{ route('post.destroy', $post->id) }}" method="POST">

                                                    <a class="btn btn-md btn-success w-24 text-md flex items-center space-x-4 font-semibold text-3xl pl-4 pt-10"
                                                        href="{{ route('post.edit', $post->id) }}"><svg fill="none" class="ml-6" stroke="currentColor" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                                          </svg>
                                                          {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-md w-24 ">
                                                        <svg fill="none" stroke="currentColor" stroke-width="1.5" class="ml-6" height="1.5em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                                          </svg> {{ __('Delete') }}</button>

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
