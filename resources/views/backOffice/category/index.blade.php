@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <style>
        .delete-form {
            display: none;
        }
    </style>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    @include('backOffice.category.errors')
    <h1>Category</h1>
    <a href="{{ route('category.create') }}">Create</a>
    <form action="{{ route('category.index') }}" method="get">
        <label for="search">Search</label>
        <input type="text" name="search" id="search" value="{{ $search }}">
    </form>
    @foreach($categories as $category)
        <div>name: {{ $category->name }}</div>
        <div>description: {{ $category->description }}</div>
        <div>status: @if($category->status) Active @else Inactive @endif</div>
        <div>{{ $category->created_at->format('d/m/Y H:i') }}</div>
        <div>{{ $category->updated_at->format('d/m/Y H:i') }}</div>
        <div>{{ data_get($category, 'deleted_at', false) ? $category->deleted_at->format('d/m/Y H:i') : '-' }}</div>
        <div>
            <a href="{{ route('category.show', $category->id) }}">Show</a>
            <a href="{{ route('category.edit', $category->id) }}">Edit</a>

            <form method="post" action="{{ route('category.destroy', $category->id) }}" class="delete-form" id="delete-{{$category->id}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
            <a href="javascript:void(0)" onclick="submit('delete-{{ $category->id }}')">
                @if ($category->trashed())
                    ForceDelete
                @else
                    Delete
                @endif
            </a>

            @if ($category->trashed())
                <form method="post" action="{{ route('category.restore', $category->id) }}" class="restore-form" id="restore-{{$category->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </form>
                <a href="javascript:void(0)" onclick="submit('restore-{{ $category->id }}')">Restore</a>
            @endif
        </div>
    @endforeach
    <div>{{ $categories->links() }}</div>
@endsection

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
  <script type="text/javascript">
      function submit (formId) {
          document.getElementById(formId).submit();
      }
  </script>
@endsection
