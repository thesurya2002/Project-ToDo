@extends("body.main")
@push('title')
<title>Home</title>
@endpush
@section("content")
      <form action="{{url('/')}}/register" method="post">
        {{-- <pre>
            @php
                print_r($errors->all())
            @endphp
        </pre> --}}
        @csrf
                <fieldset>
                    <legend>Add your todo here</legend>
                </fieldset>
                {{-- {!! Form::label("title","Title") !!} --}}
                <div class="mb-3">
                    <label for="title">Title*</label>
                    <input type="text" name="title" placeholder="Title of todo" class="form-control" aria-describedby="helpId">
                    <span id="helpId" class="text-muted text-danger">
                        @error('title')
                        {{$message}}
                        @enderror</span>
                </div>

                <div class="mb-3">
                    <label for="desc">Description*</label>
                    <input type="text" name="desc" placeholder="Description" class="form-control" aria-describedby="helpId">
                    <span id="helpId" class="text-muted text-danger">
                        @error('desc')
                        {{$message}}
                        @enderror</span>
                </div>

                <div class="mb-3">
                    <label for="title">Date & Time</label>
                    <input type="date" name="date" placeholder="Title of todo" class="form-control" aria-describedby="helpId" id="ndate">

                    <div class="mt-2">
                        <input type="time" name="time" placeholder="Title of todo" class="form-control" aria-describedby="helpId" id="ntime" >
                    </div>

                    {{-- <span id="helpId" class="text-muted"></span> --}}
                </div>
                <div class="mb-3">
                    <button class="btn btn-outline-primary">Submit</button>
                </div>
            </form>
@endsection
