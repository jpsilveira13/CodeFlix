@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

          {!! \Bootstrapper\Facades\Table::withContents($users->items())->striped() !!}
        </div>
        {!! $users->links() !!}
    </div>
@endsection
