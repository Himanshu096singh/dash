@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Error
                </div>
            </div>
        </div>
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Error List</h4>
                            <a href="{{ route('error.create') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-plus-square"></i> Add New Record</a>
                            <button class="btn btn-danger mr-3 float-right" type="button" onclick="DeleteAll();">Delete All</button>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="selectAll" id="selectAll"/></th>
                                                <th>#</th>
                                                <th>Error</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($error as $key => $item)
                                            <tr>
                                                <td><input type="checkbox" class="id_checkbox items" name="deleteAll[]" value="{{ $item->id }}"/></td>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->category->name }}</td>
                                                <td>
                                                    @if($item->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                @php
                                                    $eid = Crypt::encrypt($item->id);
                                                @endphp
                                                <td>
                                                    @if($item->status == 1)
                                                        <a href="{{ url($item->category->name.'/errors') }}" target="_blank" class="btn btn-warning btn"><i class="ft-eye"></i></a>
                                                    @endif
                                                    <a href="{{ route('error.edit', $eid) }}" class="btn btn-info btn"><i class="ft-edit"></i></a>
                                                    <form action="{{ route('error.destroy',$eid) }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" onclick="return DeleteConfirmation();"><i class="ft-trash-2"></i></button>
                                                    </form>
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
        </section>
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
    
    function DeleteAll() {
        let checkedValue = document.querySelectorAll('.items:checked');
         //console.log(checkedValue);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let arrayValue = [];
        
        for (let i = 0; i < checkedValue.length; i++) {
            arrayValue.push(checkedValue[i].value);
        }
        // console.log(arrayValue);
        $.ajax({
            url:"{{ route('error.deletemultiple') }}",
            type:"post",
            data:{id:arrayValue},
            success:function(res){
                if(res==1){
                    window.location.reload();
                }else{
                    console.log(res);
                }
            }
        })
    } 
</script>
@endsection
