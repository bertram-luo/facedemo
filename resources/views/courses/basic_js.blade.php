@extends('layouts.app', ['links' => $links]);

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section>
                <div id="ch-js-section4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Demo of Event Handling</h3>
                            <p id="timestamp"> </p>
                        </div>
                        <div class="panel-body"></div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-3 manuscript-sidebar" id="myScrollspy">
            <ul class="nav nav-stacked" data-offset-top="80" data-spy="affix">
                <li>window object</li>
                <li>document object</li>
                <li>style operation</li>
                <li><a href="ch-js-section4">event handler</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
var timestamp = document.getElementById("");
</script>
