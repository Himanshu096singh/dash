@extends('layouts.back');
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Fix Issue
                </div>
            </div>
        </div>
        @if(count($fixissue) > 0)
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('deletefixissue') }}" method="post">
                            @csrf
                            <div class="card-header">
                                <h4 class="card-title">Fix Issue List</h4>
                                <button class="btn btn-danger float-right">Delete All</button>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" name="selectAll" id="selectAll"/></th>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Device</th>
                                                    <th>Issue</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($fixissue as $key => $item)
                                                <tr>
                                                    <td><input type="checkbox" class="id_checkbox" name="deleteAll[]" value="{{ $item->id }}"/></td>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>
                                                        <b>Email: </b>{{ $item->email }}
                                                        <br>
                                                        <b>Mobile: </b>{{ $item->countrycode.' '.$item->mobile }}
                                                    </td>
                                                    <td>
                                                        <b>Device: </b>{{ $item->device }}
                                                        <br>
                                                        <b>Software: </b>{{ $item->os }}
                                                    </td>
                                                    <td>
                                                        {{ $item->issue }}
                                                    </td>
                                                    <td>{{ $item->created_at }}</td>
                                                    @php
                                                        $eid = Crypt::encrypt($item->id);
                                                    @endphp
                                                    <td>
                                                        <a href="{{ route('fixissue.destroy',$eid) }}" class="btn btn-danger" onclick="return DeleteConfirmation();"><i class="ft-trash-2"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).on('click', '#selectAll', function() {           
        $(".id_checkbox").prop("checked", this.checked);
        $("#select_count").html($("input.id_checkbox:checked").length+" Selected");
    }); 
    $(document).on('click', '.id_checkbox', function() {   
        if ($('.id_checkbox:checked').length == $('.id_checkbox').length) {
          $('#selectAll').prop('checked', true);
        } else {
          $('#selectAll').prop('checked', false);
        }
        $("#select_count").html($("input.id_checkbox:checked").length+" Selected");
    }); 
</script>
@endsection