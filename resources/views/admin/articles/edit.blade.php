@extends('admin.layouts.app')

@section('page-title', 'Edit Article')
@section('page-subtitle', 'Update content, category, images, and publish state')

@section('content')
<form method="POST" action="{{ route('admin.articles.update', $article) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.articles._form', ['article' => $article])
</form>
@endsection