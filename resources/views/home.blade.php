@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bem vindo <strong>{{\Illuminate\Support\Facades\Auth::user()->name}}</strong></div>
                <div class="card-body">
                    <form action="{{route('home.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row" style="margin-left: 0px; margin-right: 0px">
                            <label for="tarefa" class="col-lg-2 col-form-label">Nova Tarefa</label>
                            <div class="col-9">
                                <input id="tarefa" type="text" class="form-control" name="tarefa" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-1">
                                <button type="submit" class="btn btn-primary" title="Salvar Nova Tarefa"><i class="large material-icons" style="color: white; font-size: 18px">save</i></button>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th class="col-10">Tarefas</th>
                            <th class="col-2">Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lista as $item)
                        <tr>
                            <td>{{$item->tarefa}}</td>
                            <td align="center"><a href="{{ route('home.remove', $item->id)}}"><i class="large material-icons" style="color: darkred">delete_forever</i></a></td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
