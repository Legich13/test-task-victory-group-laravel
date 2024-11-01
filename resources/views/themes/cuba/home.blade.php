@extends('themes.cuba.layout')

@section('content')

<h1>Cuba Theme - Home Page</h1>
    <form class="card" action="{{ route('set-theme') }}" method="POST">
        <div class="card-body">
            @csrf
            <label for="theme">Choose Theme:</label>
            <select name="theme" id="theme">
                <option value="classic" {{ $theme === 'classic' ? 'selected' : '' }}>Classic</option>
                <option value="cuba" {{ $theme === 'cuba' ? 'selected' : '' }}>Cuba</option>
            </select>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
