@extends('backend.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tender</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tender</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('footer-menu.tender.add') }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-plus"></i> Add Tender</a>
                            <a target="_blank" href="{{ route('footer-menu.tender') }}"
                                class="btn btn-info btn-sm float-right"><i class="fas fa-stream"></i> View on Website</a>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-sm table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Title</th>
                                        <th>Publish Date</th>
                                        <th>Last Date</th>
                                        <th>Attachments</th>
                                        <th>Status</th>
                                        <th width="80">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenders as $tender)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tender['title'] }}</td>
                                            <td>{{ date('d/m/Y', strtotime($tender['publish_date'])) }}</td>
                                            <td>{{ date('d/m/Y', strtotime($tender['last_date'])) }}</td>
                                            <td style="text-align: center;">
                                                @php
                                                    if ($tender->attachment != null) {
                                                        $ext = explode('.', $tender->attachment);
                                                    }
                                                @endphp
                                                @if ($tender->attachment != null && $ext[1] == 'pdf')
                                                    <a target="_blank"
                                                        href="{{ asset('public/upload/office_order/' . $tender->attachment) }}"><img
                                                            src="{{ asset('public/frontend/images/pdf_icon.png') }}"
                                                            height="40"></a>
                                                @endif
                                                @if ($tender->attachment != null && ($ext[1] == 'doc' || $ext[1] == 'docm' || $ext[1] == 'docx'))
                                                    <a target="_blank"
                                                        href="{{ asset('public/upload/office_order/' . $tender->attachment) }}"><img
                                                            src="{{ asset('public/frontend/images/doc_icon.png') }}"
                                                            height="40"></a>
                                                @endif
                                            </td>
                                            <td><span
                                                    class="badge {{ $tender['status'] == 1 ? 'badge-success' : 'badge-danger' }}">{{ $tender['status'] == 1 ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td><a href="{{ route('footer-menu.tender.edit', $tender->id) }}"
                                                    class="btn btn-primary btn-flat btn-sm"><i class="fas fa-edit"></i></a>
                                                | <a class="delete btn btn-danger btn-flat btn-sm"
                                                    data-route="{{ route('footer-menu.tender.delete') }}"
                                                    data-id="{{ $tender->id }}"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
@endsection
