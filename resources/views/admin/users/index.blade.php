@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h3>Listagem de Usuários</h3>
        </div>
        <div class="row">
            {!! \Bootstrapper\Facades\Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}
        </div>
        <br />

        <div class="row justify-content-center">

          {!! \Bootstrapper\Facades\Table::withContents($users->items())->striped()
                ->callback('Ações',function ($field,$user){
                    $linEdit = route('admin.users.edit',['user' => $user->id]);
                    $linkShow = route('admin.users.show',['user' => $user->id]);
                    $icone = '<i class="fa fa-pencil" aria-hidden="true"></i>';
                    $iconRemove = '<i class="fa fa-trash" aria-hidden="true"></i>';
                    return \Bootstrapper\Facades\Button::link($icone)->asLinkTo($linEdit). '|'.
                    \Bootstrapper\Facades\Button::link($iconRemove)->asLinkTo($linkShow);


                })
          !!}
        </div>
        {!! $users->links() !!}
    </div>
@endsection
