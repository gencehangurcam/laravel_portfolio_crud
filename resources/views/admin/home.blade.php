@extends("admin.layouts.index")

@section("content0")
    @include("admin.components.menu")
@endsection
@section('content')
    @include("admin.components.about.about")
    @include("admin.components.services.services")
    @include("admin.components.work.work")
    @include("admin.components.contact.contact")
@endsection
