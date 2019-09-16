
@extends('layouts.app')

@section('title','News')

@push('css')

@endpush

@section('content')

{{--<div class="upload_post">
    <div class="post_text_edit pull-right">
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <textarea class="form-control ckeditor" placeholder="body" name="body"></textarea>
            </div>
            <button type="submit" class="btn button_a_color">Save</button>
        </form>
    </div>
</div>--}}

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal">
                    Create News
                </button>

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">All News</h4>
                        <p class="card-category">News for the user view</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="user_table">
                                <thead>
                                <tr>
                                    <th width="80%">News</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                @foreach( $news as $key=>$feed)
                                    <tr>
                                        <td>
                                            <a href="{{$feed->link}}">
                                                <h2 style="font-size: 25px;">{{$feed->link_title}}</h2>
                                                <p> {{$feed->link_description}}</p>
                                                <image class="img-responsive" src="{{$feed->link_image}}" style="height: 100px;"></image>
                                            </a>
                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <!--Start create Modal -->
                <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('news.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="News Link" name="body"></textarea>
                                        {{--<button type="submit" class="btn button_a_color">Save</button>--}}
                                    </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{--end modal create--}}
            </div>
        </div>
    </div>
</div>
    @endsection

@push('scripts')

    @endpush
