@extends('layouts.app', ['title' => 'Admin'])
@section('content')
<section class="page-panel admin-panel"><div class="eyebrow">Administrator area</div><h1>Welcome, {{ auth()->user()->name }}.</h1><p>This private area is ready for property, booking and website management features as they are added.</p><div class="admin-placeholder"><span>Admin dashboard</span><strong>Ready for the next step</strong></div></section>
@endsection
