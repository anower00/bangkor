@extends('layouts.app')

@section('title','Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    {{--<a href="{{ route('slider.create') }}" class="btn btn-primary">Create</a>--}}

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sliderModal" id="open">
                        Add Slider
                    </button>


                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Slider</h4>
                            {{--<p class="card-category"> Here is a subtitle for this table</p>--}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach( $sliders as $key=>$slider)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->sub_title }}</td>
                                        <td>{{ $slider->description }}</td>
                                        <td><img src="{{ asset('slider/' . $slider->image) }}" style="height: 100px; width: 200px"></td>
                                        <td>{{ $slider->created_at }}</td>
                                        <td>{{ $slider->updated_at }}</td>
                                        <td>
                                            <a href="">Edit</a>
                                            <a href="">Delete</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--Add slider Modal -->
                    <div class="modal fade" id="sliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="alert" id="message" style="display: none"></div>
                                <p id="myElem" style="display:none">Saved</p>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Slider</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{ route('slider.store') }}" id="upload_form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Title:</label>
                                            <input type="text" class="form-control" name="title" id="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Title:</label>
                                            <input type="text" class="form-control" name="sub_title" id="sub_title">
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <input type="text" class="form-control" name="description" id="description">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="bmd-label-floating">Image</label><br>
                                                <input type="file" name="slider" id="slider">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" id="upload" name="upload">Save</button>

                                    </div>
                                    <span id="uploaded_image"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--slider modal end--}}
                </div>
            </div>
        </div>
    </div>
    @endsection

@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

    {{--data table js start--}}
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
{{--data table js end--}}

    <script>
        $(document).ready(function(){

            $('#upload_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"{{ route('slider.store') }}",
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        $('#message').css('display', 'block');
                        $('#message').html(data.message);
                        $('#message').addClass(data.class_name);
                        $('#uploaded_image').html(data.uploaded_image);

                    }
                })
            });

        });
    </script>
@endpush
