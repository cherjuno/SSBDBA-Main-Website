@extends('admin.layouts.app')

@section('page-title', 'Create Article')
@section('page-subtitle', 'Build article content with thumbnail and editor image uploads')

@section('content')
<form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
    @include('admin.articles._form', ['article' => $article])
</form>
@endsection