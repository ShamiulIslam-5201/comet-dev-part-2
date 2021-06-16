@extends('admin.layouts.app')

@section('main-content')

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('admin.layouts.header')
        @include('admin.layouts.menu')



        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">

                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome {{ Auth::user() -> name }}!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">

                    <div class="col-lg-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Add new post</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Post Title</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Post category</label>
                                        <div class="col-md-9">

                                                @foreach ($all_cat as $cat)


												<div class="checkbox">
													<label>
														<input type="checkbox" name="cat[]" value="{{ $cat -> id }}"> {{ $cat -> name }}
													</label>
												</div>

                                                @endforeach

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Post Tag</label>
                                        <div class="col-lg-9">
                                            <select style="width: 100%" class="post_tag_select" name="" id="" multiple="multiple">
                                                @foreach ($all_tag as $tag)

                                                <option value="{{ $tag -> id }}">{{ $tag -> name }}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Featured Imaged</label>
                                        <div class="col-lg-9">
                                            <img style="width:400px" class="post_img_load" src="" alt=""><br><br>

                                            <label for="post_img_select"><img style="width: 100px; cursor: pointer;" src="{{ URL::to('admin/assets/img/img.png') }}" alt=""></label>
                                            <input style="display: none" id="post_img_select" type="file">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Content</label>
                                        <div class="col-lg-9">
                                            <textarea id="editor" ></textarea>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

@endsection
