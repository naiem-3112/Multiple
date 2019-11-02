@extends('layouts/app')
@section('content')
    <form action="{{ route('team.create') }}" method="post">
        @csrf

        <div class="form-group col-12">
            <label for="from">Name</label>
            <input class="form-control col-6 " placeholder="Team name..." type="text" name="name"
                   value="{{ old('name') }}">
            @if($errors->has('name'))
                <strong style="color: red">{{ $errors->first('name') }}</strong><br>
            @endif

            <label for="member">Member</label>
            <select class="form-control col-6" name="member">
                @foreach($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                @endforeach
            </select>
            @if($errors->has('name'))
                <strong style="color: red">{{ $errors->first('name') }}</strong><br>
            @endif
        </div>
        <button style="margin-left: 10px" type="submit" class="btn btn-success">Create</button>
    </form>

@endsection
