@extends('admin.dashboard')
@section('DynamicContent')


<div class='card'>
	<div class='card-header'><br><br><br>
		<h3 class="text-dark">Category Table</h3>
        <div class="row">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>


        <div class="row">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
	</div>

	<div class='card-body'>

        <div class="row justfy-content-center my-3">
            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">Add New Catogeroy</a>
        </div>


		<div class="row">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>category Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i=1
                ?>
                @foreach ($categories as $item )
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->desxcription}}</td>
                    <td><a href="" class="btb btn-success mx-2 ata-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a><a href="" class="btb btn-danger mx-2"><i class="fa fa-trash"></i></a></a>
                    </td>
                    @include('category.editmodal')
                    </tr>

                @endforeach
            </tbody>
        </table>

		</div>
	</div>

</div>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Cat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('category.index')}}" method='post'>
        @csrf
      <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <lable class="form-lable">CatName</lable>
                <input type="text" class='form-control' name="CatName">
            </div>
            <div class="col-6">
                <lable class="form-lable">CatDesc</lable>
                <textarea id="" cols="30" class='form-control' name="CatDesc"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Cat</button>
      </div></form>
    </div>
  </div>
</div>

@endsection
