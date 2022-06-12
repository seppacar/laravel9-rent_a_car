@extends ('layouts.imagebase')

@section('title', 'Add Image')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <form role="form" action="{{route('admin.image.store', ['pid' => $car->id])}}"  method="post" enctype='multipart/form-data'> 
            @csrf
            <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" id="image">
            <label class="custom-file-label" for="image">Add New Image</label></div>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Enter image title" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload Image</button> </a>

    </form>
</div>

</div>
    <h5 class="m-4 font-weight-bold text-primary">Images for {{$car->title}}</h5>
    <table class="table table-responsive table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Created at</th>
        <th scope="col">Delete</th>


        </tr>
    </thead>
    <tbody>
    @foreach($image as $rs)
        <tr>
        <td>{{$rs->id}}</td>
        <td>{{$rs->title}}</td>
        <td>
            @if ($rs->image)
            <img src="{{Storage::url($rs->image)}}" width="100" height="auto">
            @else
                No Image
            @endif
        </td>
        <td>{{$rs->created_at}}</td>
        <td><a href="{{route('admin.image.destroy', ['id'=>$rs->id, 'pid'=>$car->id])}}" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>

