@extends('layouts.app')
@section('content')<div
class="container">
<h1>Clients</h1>
<ul>
 @foreach ($clients as $client)
 <li>{{ $client }}</li>
 @endforeach
</ul>
</div>@endsection