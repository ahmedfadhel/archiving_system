@extends('layouts.manage')

@section('content')
    dashboard
    @if (session('status'))
    <article class="message is-success">
      <div class="message-body">
          {{ session('status') }}
      </div>
      You are logged in!
    </article>
@endif
@endsection