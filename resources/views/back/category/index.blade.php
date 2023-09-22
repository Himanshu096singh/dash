@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Category
                </div>
            </div>
        </div>
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Category List</h4>
                            <a href="{{ route('category.create') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-plus-square"></i> Add New Record</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Form Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>
                                                    <b>Name: </b>{{ $item->name }}
                                                    <br/>
                                                    <b>Slug: </b>{{ $item->slug }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" width="100">
                                                </td>
                                                <td>
                                                    @if($item->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="custom-switch custom-switch-success custom-control-inline ml-4">
                                                        <input type="checkbox" class="custom-control-input formcheck" id="formcheck{{$key}}" value="{{ $item->id }}" {{$item->formstatus == 1 ? 'checked':''}}>
                                                        <label class="custom-control-label" for="formcheck{{$key}}"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                @php
                                                    $eid = Crypt::encrypt($item->id);
                                                @endphp
                                                <td>
                                                    @if($item->status == 1)
                                                        <a href="{{ url($item->slug) }}" target="_blank" class="btn btn-warning btn"><i class="ft-eye"></i></a>
                                                    @endif
                                                    <a href="{{ route('category.edit', $eid) }}" class="btn btn-info btn"><i class="ft-edit"></i></a>
                                                    <form action="{{ route('category.destroy',$eid) }}" method="post" class="d-inline">
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
    $('.formcheck').on('change', function() {
        var formvalue = $(this).val()
        //console.log(formvalue);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
           url:"{{route('category.formstatus')}}",
           type:"post",
           data:{catId:formvalue},
           success:function(response){
               //console.log(response);
           }
        });
    });
</script>
@stop
