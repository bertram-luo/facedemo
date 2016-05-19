@extends('layouts.app', ['links' => $links])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section>
                <div id="ch-js-section4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Demo of Event Handling</h3>
                        </div>
                        <div class="panel-body">
                            <p id="timestamp"> </p>
                        </div>
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
window.onload = function(){
    var timestamp = document.getElementById("timestamp"); // document object
    timestamp.style.backgroundColor = "yellow"; // change style
    if (timestamp.firstChild == null){
        timestamp.appendChild(document.createTextNode(new Date().toString()));
    }
    timestamp.onclick = function(){ // event handling
        this.innerHTML = new Date().toString();
    }
    function updateTime(){
        timestamp.innerHTML = new Date().toString(); // control content
        setTimeout(updateTime, 10000);
    }
    updateTime();
}
</script>
@endsection
