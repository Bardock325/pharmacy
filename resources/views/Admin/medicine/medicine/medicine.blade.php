@extends('layouts.app')
@section('title', 'Medicine')
@section('content')
<!DOCTYPE html>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Medicine</h1>
          </div>
          <div class="col-sm-6">
            <button type="button" style="margin-left: 458px;" class="btn btn-info btn-sm" id="add">Add New</button>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Medicine List</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sl No.</th>
                    <th>Medicine Code</th>
                    <th>Medicine Name</th>
                    <th>Catagory</th>
                    <th>Company Name</th>
                    <th>Desk Name</th>
                    <th>Purcase Price</th>
                    <th>Retail Price</th>
                    <th>Whole Sale Price</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($medicine as $key => $value)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->medicine_code }}</td>
                    <td>{{ $value->medicine_name }}</td>
                    <td>{{ $value->catagory }}</td>
                    <td>{{ $value->company_name }}</td>
                    <td>{{ $value->desk_name }}</td>
                    <td>{{ $value->purcase_price }}</td>
                    <td>{{ $value->retail_price }}</td>
                    <td>{{ $value->whole_sell_price }}</td>
                    <td>
                      @if($value->medicine_status=='Active')
                      <span style="color: green;">{{ $value->medicine_status }}</span>
                      @else
                      <span style="color: red;">{{ $value->medicine_status }}</span>
                      @endif 
                    </td>
                    <td>
                      <button class="edit btn btn-outline-primary btn-xs" data="{{ $value->medicine_id }}"><i class="fa fa-edit"></i></button>
                      <button class="delete btn btn-outline-danger btn-xs" data="{{ $value->medicine_id }}"><i class="fa fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add Medicine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>

      <div id="add_form"></div>

    </div>
  </div>
</div>

<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit Medicine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>

      <div id="edit_form"></div>

    </div>
  </div>
</div>
@stop
@section('script')
<script src="custom_js/medicine.js"></script>
@endsection
