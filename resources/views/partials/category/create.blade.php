@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('category.store') }}"
              method="POST">
            @method('POST')
            @csrf

            <label for="name">name</label>
            <input type="text" name="name" id="name">

            <input type="submit" value="submit" class="btn">
        </form>
    </div>
@endsection
