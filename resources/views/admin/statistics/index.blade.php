@extends('layouts.app')

@section('title','Statistics')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="message"></div>
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
                                        <th width="25%">Total Clients</th>
                                        <th width="25%">Clients Retained</th>
                                        <th width="25%">Total Sale</th>
                                        <th width="25%">Clients Referrals </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                {{ csrf_field() }}
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

        $(document).ready(function(){

            fetch_data();

            function fetch_data()
            {
                $.ajax({
                    url:"/bangkorpulp/public/admin/statistics/fetch_data",
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        html += '<tr>';

                        for(var count=0; count < data.length; count++)
                        {
                            html +='<tr>';
                            html +='<td contenteditable class="column_name" data-column_name="total_clients" data-id="'+data[count].id+'">'+data[count].total_clients+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="clients_retained" data-id="'+data[count].id+'">'+data[count].clients_retained+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="sale_volume" data-id="'+data[count].id+'">'+data[count].sale_volume+'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="client_referrals" data-id="'+data[count].id+'">'+data[count].client_referrals+'</td>';
                        }
                        $('tbody').html(html);
                    }
                });
            }

            var _token = $('input[name="_token"]').val();


            $(document).on('blur', '.column_name', function(){
                var column_name = $(this).data("column_name");
                var column_value = $(this).text();
                var id = $(this).data("id");

                if(column_value != '')
                {
                    $.ajax({
                        url:"{{ route('statistics.update_data') }}",
                        method:"POST",
                        data:{column_name:column_name, column_value:column_value, id:id, _token:_token},
                        success:function(data)
                        {
                            $('#message').html(data);
                        }
                    })
                }
                else
                {
                    $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
                }
            });

        });
    </script>
    @endpush
