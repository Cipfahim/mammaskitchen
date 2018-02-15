@extends('layouts.app')

@section('title','Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('slider.create') }}" class="btn btn-info">Add New</a>
                    @if(session('successMsg'))
                        <div class="alert alert-success">
                            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">×</button>
                            <span>
                                    <b> Success - </b> {{ session('successMsg') }}</span>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Slider</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                </thead>
                                <tbody>
                                    @foreach($sliders as $key=>$slider)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->sub_title }}</td>
                                            <td>{{ $slider->image }}</td>
                                            <td>{{ $slider->created_at }}</td>
                                            <td>{{ $slider->updated_at }}</td>
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
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush