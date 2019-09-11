@extends('layouts.app')

@section('title','Gallery')

@push('css')
    <style type="text/css">
        input[type=file]{
            display: inline;
        }
        #image_preview{
            border: 1px solid black;
            padding: 10px;
        }
        #image_preview img{
            width: 200px;
            padding: 5px;
        }
    </style>
@endpush

@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add image
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width: 140%">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
                                            <input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>
                                        </form>
                                        <br/>
                                        <div id="image_preview"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--<div >
                        <button type="button" name="create_record" id="create_record" class="btn btn-primary">Create Record</button>
                    </div>--}}
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Gallery Images</h4>
                            <p class="card-category">Gallery image for the user view</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="user_table">
                                    <thead>
                                    <tr>
                                        <th width="50%">Image</th>
                                        <th width="50%">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach( $images as $key=>$slider)
                                        <tr>
                                            <td><img src="{{ asset('gallery/' . $slider->gallery_image) }}" style="height: 100px; width: 200px"></td>
                                            {{--<td><a href="#" class="btn btn-danger">Delete</a></td>--}}
                                            <form method="post" id="delete-form-{{ $slider->id }}" action="{{ route('gallery_images.destroy' ,$slider->id) }}"
                                                  style="display: none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <td><a class="btn btn-danger" style="cursor: pointer;" onclick="
                                                    if(confirm('Are You Sure? You Want To Delete This Announcement?'))
                                                    {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $slider->id }}').submit();
                                                    }
                                                    else {
                                                    event.preventDefault();
                                                    }
                                                    "><i class="fas fa-trash-alt action_check"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script type="text/javascript">

        $("#uploadFile").change(function(){
            $('#image_preview').html("");
            var total_file=document.getElementById("uploadFile").files.length;
            for(var i=0;i<total_file;i++)
            {

                $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");

            }
        });

        $('form').ajaxForm(function()
        {
            alert("Uploaded SuccessFully");
            location.reload();
        });

    </script>
@endpush
