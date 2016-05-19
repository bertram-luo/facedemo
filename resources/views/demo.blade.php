@extends('layouts.app')
@section('content')
<style type="text/css">

    ::selection{ background-color: #E13300; color: white; }
    ::moz-selection{ background-color: #E13300; color: white; }
    ::webkit-selection{ background-color: #E13300; color: white; }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        font-size: 36px;
        margin: 0 0 14px 0;
        padding: 14px 15px 0px 15px;
    }

    h3{
        margin: 0 0 14px 0;
        font-weight: normal;
        padding: 14px 15px 10px 35px;
        border-bottom: 1px solid #D0D0D0;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body{
        margin: 10px 25px 10px 25px;
    }

    .above_container{
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }

    .vertical_margin{
        margin: 10px;
    }
    .gallery{
        margin: 0 auto 0 auto;
    }
    .demo{
        height: 250px;
    }
</style>

<div class="container">
    <div class="jumbotron">
        <h1>Show me your face</h1>
        <p>This is the demo website for your face detection course. You will need to construct your own website with this algorithm implemented by c++ or python. As to website, you should use css, js, ajax and php.</p>
    </div>
</div>
<div class="container">
    <div class="above_container">
        <div class="above_container" id="body">
            <div class="row gallery" align="center">
                <div class="col-sm-3"><img class="demo" src="/assets/images/result.jpg"> </img></div>
                <div class="col-sm-3"><img class="demo" src="/assets/images/fengzikai.jpg" > </img></div>
                <div class="col-sm-3"><img class="demo" src="/assets/images/nancy.jpg"> </img>
                </div>
            </div>
            <div class="above_container vertical_margin" style="padding: 8px;">
                <form id="demo" class="form-inline" action="#" enctype="multipart/form-data" method="post">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label for="file_upload"> File </label>
                        <input type="file" class="form-control" name="file_upload" id="file_upload" multiple>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" id="submit" value="fire!">
                    </div>
                </form>
            </div>
            <div class="above_container vertical_margin" id="result">
            </div>

        </div>
    </div>

@endsection

@section('scripts.footer')
<script src="/assets/js/detectdemo.js"></script>
@endsection
