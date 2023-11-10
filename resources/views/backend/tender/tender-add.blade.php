@extends('backend.layouts.app')
@section('content')
    <style>
        .radio_container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #cecece;
            width: 280px;
            border-radius: 9999px;
            box-shadow: inset 0.5px 0.5px 2px 0 rgba(0, 0, 0, 0.15);
        }

        input[type="radio"] {
            appearance: none;
            display: none;
        }

        .radio_container label {
            font-size: .875rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: inherit;
            width: 110px;
            text-align: center;
            border-radius: 9999px;
            overflow: hidden;
            transition: linear 0.3s;
            margin-top: 8px;
        }

        input[type="radio"]:checked+label {
            background-color: #1e90ff;
            color: #f1f3f5;
            font-weight: 900;
            transition: 0.3s;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 20px;
        }
    </style>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ !empty($editData) ? 'Update Tender' : 'Add Tender' }}
                    </h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tender</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <form id=""
                    action="{{ !empty($editData) ? route('footer-menu.tender.update', $editData->id) : route('footer-menu.tender.store') }}"
                    method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="card-header row">
                        <div class="col-md-12">
                            <a href="{{ route('footer-menu.tender') }}" class="btn btn-info btn-sm"><i
                                    class="fas fa-stream"></i> View Tender</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-sm-6" style="margin-bottom: 0;">
                                <label>Title</label>
                                <input id="title" type="text"
                                    value="{{ !empty($editData->title) ? $editData->title : old('title') }}"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    placeholder="Title"> @error('title')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-3" style="margin-bottom: 0;">
                                <label>Publish Date</label>
                                <input id="publish_date" type="text"
                                    value="{{ !empty($editData->publish_date) ? date('d-m-Y', strtotime($editData->publish_date)) : old('publish_date') }}"
                                    class="form-control singledatepicker @error('publish_date') is-invalid @enderror"
                                    name="publish_date" placeholder="Date"> @error('publish_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-3" style="margin-bottom: 0;">
                                <label>Last Date</label>
                                <input id="last_date" type="text"
                                    value="{{ !empty($editData->last_date) ? date('d-m-Y', strtotime($editData->last_date)) : old('last_date') }}"
                                    class="form-control singledatepicker @error('last_date') is-invalid @enderror"
                                    name="last_date" placeholder="Date"> @error('last_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-group col-sm-12 increment">

                                @if ($editData->count() != 0)
                                    <label>Existing Files</label>
                                @endif
                                <div class="form-group">
                                        @php
                                            if ($editData->attachment != null) {
                                                $ext = explode('.', $editData->attachment);
                                            }
                                        @endphp
                                        @if ($editData->attachment != null && $ext[1] == 'pdf')
                                            <a target="_blank"
                                                href="{{ asset('public/upload/office_order/' . $editData['attachment']) }}"><img
                                                    src="{{ asset('public/frontend/images/pdf_icon.png') }}"
                                                    height="80"></a>
                                        @endif
                                        @if ($editData->attachment != null && ($ext[1] == 'doc' || $ext[1] == 'docm' || $ext[1] == 'docx'))
                                            <a target="_blank"
                                                href="{{ asset('public/upload/office_order/' . $editData['attachment']) }}"><img
                                                    src="{{ asset('public/frontend/images/doc_icon.png') }}"
                                                    height="80"></a>
                                        @endif
                                        <a href="{{ route('footer-menu.tender_attachment_remove', $editData->id) }}"
                                            class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div> --}}


                            <div class="form-group col-sm-10">
                                <label>Upload new Attachment<small style="color: brown"> (Max 2 mb)</small></label>
                                <input id="attachment" type="file" value="" multiple="multiple"
                                    class="form-control @error('attachment') is-invalid @enderror" name="attachment[]">
                                @error('attachment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-2" style="margin-top: 35px; margin-bottom: 0;">
                                <div class="form-check" style="margin-left: 5px;">
                                    <input type="checkbox" name="status" class="form-check-input" id="status"
                                        value="1" {{ @$editData->status == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status">Show Status</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i>
                            {{ !empty($editData) ? 'Update ' : 'Save' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
