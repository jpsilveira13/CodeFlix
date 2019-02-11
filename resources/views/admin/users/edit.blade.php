@extends('layouts.admin')
<style>
    form{
        width: 100%;
    }
</style>
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <h3>Editar usuário </h3>
            @php $icon = '<i class="fa fa-pencil" aria-hidden="true"></i>' @endphp
          {!!
              form($form->add('Salve','submit',[
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => $icon
              ]))
          !!}
        </div>

    </div>
@endsection
