@extends("body.main")

@section("content")
    <div class="container">

        <ul class="nav nav-tabs" id="navId" role="tablist">
            <li class="nav-item">
                <a href="#tab3Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a a href="#tab2Id" class="nav-link" data-bs-toggle="tab">See all Todos</a>

            </li>
            <li class="nav-item dropdown">
                <a a href="#tab1Id" class="nav-link" data-bs-toggle="tab">Add Todo</a>

            </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade " id="tab1Id" role="tabpanel">Admin</div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel">Home</div>
        <div class="tab-pane fade show active" id="tab3Id" role="tabpanel">
            <form action="" method="post">
                <fieldset>
                    <legend>Add your todo here</legend>
                </fieldset>
                {{-- {!! Form::label("title","Title") !!} --}}
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" placeholder="Title of todo" class="form-control" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="mb-3">
                    <label for="desc">Description</label>
                    <input type="text" placeholder="Description" class="form-control" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="mb-3">
                    <label for="title">Date & Time</label>
                    <input type="date" placeholder="Title of todo" class="form-control" aria-describedby="helpId" id="ndate">

                    <div class="mt-2">
                        <input type="time" placeholder="Title of todo" class="form-control" aria-describedby="helpId" id="ntime" min:current_date>
                    </div>

                    <small id="helpId" class="text-muted"></small>
                </div>
            </form>
        </div>

    </div>

</div>
<script>
    var date=document.getElementById('ndate').value;
    var time=document.getElementById('ntime').value;

    var d=new Date();
    var date=d.getDate();
    var month=d.getMonth();
    var year=d.getFullYear();
    console.log(date+"-"+month+"-"+year)
    // document.getElementById('ndate'),value=month+"-"+date+"-"+year
</script>
@endsection
