@extends('admin.template')
@section('content')

    <form action="/admin" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Input Movies Data</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <label>Input Title</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" name="title" class="form-control" placeholder="input movies title here" value="{{old('title')}}">
                                    </div>
                                    @if($errors->has('title'))
                                        <div class="alert alert-danger" role="alert"> {{$errors->first('title')}} </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <label>Input Release Date</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="date" name="release" class="form-control" value="{{old('release')}}">
                                    </div>
                                </div>
                                @if($errors->has('release'))
                                    <div class="alert alert-danger" role="alert"> {{$errors->first('release')}} </div>
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <label>Choose movie's genre</label>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select name="genre" class="selectpicker">
                                            <option value="action">action</option>
                                            <option value="animation">animation</option>
                                            <option value="science fiction">science fiction</option>
                                            <option value="adventure">adventure</option>
                                            <option value="fantasy">fantasy</option>
                                            <option value="horror">horror</option>
                                            <option value="comedy">comedy</option>
                                            <option value="thriller">thriller</option>
                                            <option value="drama">drama</option>
                                            <option value="romantic">romantic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <label>Input Image</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="file" name="image" class="form-control" placeholder="input URL here" value="{{old('image')}}">
                                    </div>
                                    @if($errors->has('image'))
                                        <div class="alert alert-danger" role="alert"> {{$errors->first('image')}} </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <label>Input Director</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" name="director" class="form-control" placeholder="input director here" value="{{old('director')}}">
                                        @if($errors->has('director'))
                                            <div class="alert alert-danger" role="alert"> {{$errors->first('director')}} </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <label>Input Synopsis</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <div class="nk-int-st">
                                            <textarea name="synopsis" class="form-control" rows="5" placeholder="input synopsis here">{{old('release')}}</textarea>
                                        </div>
                                        @if($errors->has('synopsis'))
                                            <div class="alert alert-danger" role="alert"> {{$errors->first('synopsis')}} </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-example-int mg-t-15">
                            <input class="btn btn-success notika-btn-success" style="width: 100%" value="SAVE" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@stop