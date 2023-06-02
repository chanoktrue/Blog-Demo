@extends('master')

@section('title', 'Create Content')

@section('content')

    <h1>Create content</h1>

    <form action="{{ url('content')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="topic" class="form-lable">หัวข้อ</label>
            <input type="text" class="form-control" id="topic" name="topic" value="{{ old('topic',  $content->topic)}}">
            {{-- show message validate --}}
            <div class="invalid-feedback d-block">
                {{ $errors->first('topic') }}
            </div>
        </div>

        <div class="mb-3">
            <label for="descripton" class="form-label">รายละเอียด</label>
            <textarea name="description" id="description" rows="3" class="form-control"> {{ old('description', $content->description)}}</textarea>
               {{-- show message validate --}}
               <div class="invalid-feedback d-block">
                {{ $errors->first('description') }}
            </div>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-lable">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags', $content->tags)}}">
        </div>

        <button type="submit" class="btn  btn-primary">Save</button>
        <a href="{{ url('/content')}}" class="btn  btn-danger" role="button">Back</a>

    </form>

@endsection