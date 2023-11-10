@extends('backend.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Journal Paper</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Journal</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-md-12">
                        <a href="{{ route('frontend-menu.journal_paper') }}" class="btn btn-info btn-sm"><i
                                class="fas fa-stream"></i> View Journal Paper</a>
                    </div>
                </div>
                {{-- @dd($editData) --}}
                <form id=""
                    action="{{ !empty($editData) ? route('frontend-menu.journal_paper.update', $editData->id) : route('frontend-menu.journal_paper.store') }}"
                    method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label>Title</label>
                                <input id="paper_title" type="text"
                                    value="{{ !empty($editData->paper_title) ? $editData->paper_title : old('paper_title') }}"
                                    class="form-control @error('paper_title') is-invalid @enderror" name="paper_title"
                                    placeholder="Title"> @error('paper_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Author</label>
                                <input type="text" class="form-control @error('authors') is-invalid @enderror"
                                    name="authors" id="authors" autocomplete="off" placeholder="Author"
                                    value="{{ !empty($editData->authors) ? $editData->authors : old('authors') }}">
                                @error('authors')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Editor</label>
                                <input type="text" class="form-control @error('editor') is-invalid @enderror"
                                    name="editor" id="editor" autocomplete="off" placeholder="Editor"
                                    value="{{ !empty($editData->editor) ? $editData->editor : old('editor') }}">
                                @error('editor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4">
                                <label>ISSN</label>
                                <input type="text" class="form-control @error('issn') is-invalid @enderror"
                                    name="issn" id="issn" autocomplete="off" placeholder="ISSN"
                                    value="{{ !empty($editData->issn) ? $editData->issn : old('issn') }}">
                                @error('issn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Volume</label>
                                <input type="text" class="form-control @error('volume') is-invalid @enderror"
                                    name="volume" id="volume" autocomplete="off" placeholder="Volume"
                                    value="{{ !empty($editData->volume) ? $editData->volume : old('volume') }}">
                                @error('volume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Issue</label>
                                <input type="text" class="form-control @error('issue') is-invalid @enderror"
                                    name="issue" id="issue" autocomplete="off" placeholder="Issue"
                                    value="{{ !empty($editData->issue) ? $editData->issue : old('issue') }}">
                                @error('issue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Research Area</label>
                                <input type="text" class="form-control @error('research_area') is-invalid @enderror"
                                    name="research_area" id="research_area" autocomplete="off" placeholder="Research Area"
                                    value="{{ !empty($editData->research_area) ? $editData->research_area : old('research_area') }}">
                                @error('research_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Date</label>
                                <input id="date" type="text"
                                    value="{{ !empty($editData->date) ? date('d-m-Y', strtotime($editData->date)) : old('date') }}"
                                    class="form-control singledatepicker @error('date') is-invalid @enderror"
                                    name="date" placeholder="Date"> @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-group col-sm-4">
                                <label>Status</label>
                                <select name="status" class="form-control form-control-sm select2">
                                    <option value="">Select Type</option>
                                    <option {{ !empty($editData) && $editData->status == 1 ? "selected" : ""}} value="1">Active</option>
                                    <option {{ !empty($editData) && $editData->status == 0 ? "selected" : ""}} value="0">Inactive</option>
                                </select>
                            </div> --}}

                            <div class="form-group col-sm-6">
                                <label>Upload Image<small style="color: brown"> (Max 2 mb)</small></label>
                                <input id="attachment1" type="file" value=""
                                    class="form-control @error('attachment1') is-invalid @enderror" name="attachment1">
                                @error('attachment1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Upload File<small style="color: brown"> (Max 10 mb)</small></label>
                                <input id="attachment2" type="file" value=""
                                    class="form-control @error('attachment2') is-invalid @enderror" name="attachment2">
                                @error('attachment2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i>
                            {{ !empty($editData) ? 'Update ' : 'Save' }}</button>

                    </div>
                </form>

            </div>
            <!--/. container-fluid -->
    </section>

    <script type="text/javascript">
        $(document).ready(function() {

            $(".btn-success").click(function() {
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").remove();
            });

        });
    </script>
@endsection
