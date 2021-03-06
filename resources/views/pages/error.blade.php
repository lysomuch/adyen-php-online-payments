@extends('layouts.app')

@section('content')
<title>Error</title>

<div class="status-container">
  <div class="status">
     <p class="status-message">Error!</p>
     <p class="status-message">Review response in console and refer to <a href="https://docs.adyen.com/development-resources/response-handling">Response handling.</a></p>
     <a class="button" href="/" to="#/">Return Home</a>
  </div>
</div>

@endsection