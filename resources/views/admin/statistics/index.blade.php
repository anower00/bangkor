@extends('layouts.app')

@section('title','Slider')

@push('css')

@endpush

@section('content')
    <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Statistics</h4>
                            <p class="card-category">Statistics for the user view</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="user_table">
                                    <thead>
                                    <tr>
                                        <th width="10%">Total Clients</th>
                                        <th width="35%">Title</th>
                                        <th width="35%">Sub Title</th>
                                        <th width="35%">Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $statistics as $statistic)
                                        <tr>
                                            <td onblur="update({{ $statistic->id }})" id="{{ $statistic->id }}" contenteditable>{{ $statistic->total_clients }}</td>
                                            <td contenteditable>{{ $statistic->clients_retained }}</td>
                                            <td contenteditable>{{ $statistic->sale_volume }}</td>
                                            <td contenteditable>{{ $statistic->client_referrals }}</td>
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
    <script>
        function update(id) {
           var total_clients = $("#"+id).html();

            console.log(total_clients);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url:"static/update",

                dada:{
                    total_clients:total_clients,
                    id:id,
                    _token: $('#signup-token').val()
                },
                dataType : 'html',
            })
        }
    </script>
    @endpush
