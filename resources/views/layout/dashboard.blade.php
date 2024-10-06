@include('layout.header')
<div class="container">
    <div class="row">
        <div class="btn btn-success mt-5 container container-fluid">{{auth()->user()->name}} is logged in </div>
    </div>
</div>