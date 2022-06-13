@extends('layouts.adminbase')

@section('title', 'Create Question')

@section('content')
<div class="card">
    <div class="card-header">
        Add Question
    </div>
    <div class="card-body">
    <form role="form" action="{{route('admin.faq.store')}}"  method="post" enctype='multipart/form-data'> 
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Question</label>
            <input type="text" class="form-control" name="question" id="question" placeholder="Question" required>
        </div>
        <div class="mb-3">
            <label for="answer" class="form-label">Detail</label>
            <textarea type="text" class="form-control" name="answer" id="answer"></textarea>
        <script>
                ClassicEditor
                        .create( document.querySelector( '#answer' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
        </script>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" name="status" id="status">
                <option>True</option>
                <option>False</option>>
            </select>
        </div>
        <button type="submit" class="btn btn-light btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Create</span>
                                    </a>
    </form>
    </div>
</div>
@endsection


