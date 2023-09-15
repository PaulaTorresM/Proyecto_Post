<link href="/dist/tailwind.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $post->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $post->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentario') }}
            {{ Form::text('comentario', $post->comentario, ['class' => 'form-control' . ($errors->has('comentario') ? ' is-invalid' : ''), 'placeholder' => 'Comentario']) }}
            {!! $errors->first('comentario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $post->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Users Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}

        <div class="box-footer ">
            <button type="submit" class="btn btn-primary mt-2 w-24"> <svg fill="none" class="ml-6 " height="1.5em" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"></path>              </svg>{{ __('Submit') }}</button>
        </div>
    </div>

</div>
