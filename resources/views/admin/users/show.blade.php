@extends('layouts.admin')
<style>
    form{
        width: 100%;
    }
</style>
@section('content')
    @php
        $iconEdit = '<i class="fa fa-pencil" aria-hidden="true"></i>';
        $iconRemove = '<i class="fa fa-trash" aria-hidden="true"></i>';
    @endphp
    <div class="container">

        <div class="row justify-content-center">
            <h3>Ver usuário </h3>
        </div>
        <div class="row">
            {!! \Bootstrapper\Facades\Button::primary($iconEdit)->asLinkTo(route('admin.users.edit',['user' => $user->id])) !!}
            {!! \Bootstrapper\Facades\Button::danger($iconRemove)

            ->asLinkTo(route('admin.users.destroy',['user' => $user->id]))
             ->addAttributes(["onclick" => "event.preventDefault();document.getElementById(\"form-delete\").submit();"])
             !!}
            @php
                $formDelete = FormBuilder::plain([
                'id' => 'form-delete',
                'route'=> ['admin.users.destroy','user' => $user->id],
                 'method' => 'DELETE',
                 'style' => 'display:none',

                ]);
                    @endphp
        </div>
        {!! form($formDelete) !!}
        <br />
        <div class="row">
            <table class="table table-bordered" >
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$user->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{$user->email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
