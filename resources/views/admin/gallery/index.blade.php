@extends('layouts.app')

@section('title','Slider')

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

                    <div class="container">

                        <form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <input type="file" id="uploadFile" name="uploadFile[]" multiple/>

                            <input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>

                        </form>

                        <br/>

                        <div id="image_preview"></div>

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
