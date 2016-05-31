@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section id="why">
                <div id="why-why" >
                    <div class="panel panel-primary slide-page">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Why is design patterns needed
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="content">
                            <ul>
                                <li>code may be run many times</li>
                                <li>the functionaly of code may be changed</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div  id="why-what">
                    <div class="panel panel-primary slide-page">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                            What is design patterns
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p>在软件工程中，设计模式（design pattern）是对软件设计中普遍存在（反复出现）的各种问题，所提出的解决方案。这个术语是由（Erich Gamma）等人在1990年代从建筑设计领域引入到计算机科学中的。
                            wikipedia
                            <hr>
                            </p>
                            <h4>设计模式是使得代码具备<span class="text-todo">应对</span>
                            <h4>一段时间，一定范围内</h4>
<h4>功能<span class="text-todo">变化</span>的能力的</h4>
<h4>一些常用的架构手法</h4>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section id="principles">
                <div id="principles-section0" >
                    <div class="panel panel-primary slide-page">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                Principles 
                            </h2>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>SRP</li>
                                <li>OCP</li>
                                <li>LSP</li>
                                <li>ISP</li>
                                <li>DIP</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="principles-section1" >
                    <div class="panel panel-primary slide-page">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                SRP
                            </h2>
                        </div>
                        <div class="panel-body">
                        <h4>A class should only have one, </h4>
                        <h4>And only one </h4>
                        <h4>Reason to change</h4>
<pre>
class SalesReporter{
    public function between($startDate, $endDate){
            $sales = $this->queryDBForSalesBetween($startDate, $endDate);
            return $this->format($sales);
    }
    public function queryDBforSalesBetween($startDate, $endDate){
        return DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('charge')/ 100;
    }
    public function format($sales){
        return "&lt;h1&gt;$sales&lt;/h1&gt;";
    }
}
</pre>
<pre>
class SalesRepository{
    public function between($startDate, $endDate){
        return DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('charge')/ 100;
    }
}

interface SalesOutputInterface{
    public function output($sales);
}

class HtmlOutput implements SalesOutputInterface{
    public function output($sales){
        return "&lt;h1&gt;Sales: $sales&lt;/h1&gt;";
    }
}

class SalesReporter{
    protected $repo;
    public function __construct(SalesRepository $repo){
        $this->repo = $repo;
    }
    public function between($startDate, $endDate,
        SalesOutputInterface $formatter){
        $sales = $this
            ->repo
            ->between($startDate, $endDate);
        return $formatter->output($sales);
    }
}
// each class should has only one responsibility
</pre>


                        </div>
                    </div>
                </div>
                <div id="principles-section2" >
                    <div class="panel panel-primary  slide-page">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            OCP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>Entities should be</h4>
                            <h4>open for extension</h4>
                            <h4>but closed for modification</h4>
<hr>

<pre>
class Circle{
    protected $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
}

class Square{
    protected $height;
    protected $width;
    public function __construct($width, $height){
        $this->height = $height;
        $this->width = $width;
    }
}

class Triangle{
    // blablabla
}

class AreaCalculator{
    public function calculate($squares){
        foreach($squares as $shape){
            if ($shape instanceof Square){
                $area[] = $area->width * $area->height;
            } else if ($shape instanceof Circle){
                $area[] = $shape->radius * $shape->radius * pi();
            }
        }
        return array_sum($area);    
    }
}
</pre>

<hr>
<pre>
interface Shape{
    public function area();
}

class Circle implements Shape{
    protected $height;
    protected $width;
    public function __construct($width, $height){
        $this->height = $height;
        $this->width = $width;
    }
    public function area(){
        return $this->height * $this->width;
    }
}

class Square implements Shape{
    protected $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function area(){
        return $this->radius * $this->radius * pi();
    }
}

class AreaCalculator{
    public function calculate($shapes){
        foreach($shapes as $shape){
            $ares[] = $shape->area();
        }
        return array_sum($area);
    }
}
</pre>

                        </div>
                    </div>
                </div>
                <div id="principles-section3" >
                    <div class="panel panel-primary  slide-page">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            LSP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>Let q(x) be a property provable about object x of type T</h4>
                            <h4>Then q(y) should be provable for object y of type S</h4>
                            <h4>Where S is subtype of T </h4>

<pre>
class VideoPlayer{
    public function play($file){
        
    }
}

class AviVideoPlayer extends VideoPlayer{
    public function play($file){
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi'){ // called the precondition
            throw \Exception;// violates the LSP
        }
    }
}
</pre>
                        </div>
                    </div>
                </div>
                <div id="principles-section4" >
                    <div class="panel panel-primary  slide-page">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                ISP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>a client should not be forced to</h4>
                            <h4>implement an interface that it doesn’t use</h4>
                            <hr>
<pre>
class Worker{
    public function work(){
        
    }
    public function sleep(){
        
    }
}

class Caption{
    public function manage(Worker $worker){
        $worker->work();
        $worker->sleep();
    }
}
</pre>

<pre>
interface Worker{
    public function work();
    public function sleep();
}

class HumanWorker implements Worker{
    public function work(){
        
    }
    public function sleep(){
        
    }
}

class AndroidWorker implements WorkerInterface{
    public function work(){
        return 'android working';
    }
    public function sleep(){
        return null;
    }
}

class Caption{
    public function manage(WorkerInterface $worker){
        $worker->work();
        $worker->sleep();
    }
}
</pre>

<pre>
interface WorkableInterface{
    public function work();
}
interface SleepableInterface{
    public function sleep();
}

class HumanWorker implements WorkableInterface,
    SleepableInterface{
    public function work(){
        
    }
    public function sleep(){
        
    }
}

class AndroidWorker implements WorkableInterface{
    public function work(){
        return 'android working';
    }
}

class Caption{
    public function manage(WorkableInterface $worker){
        $worker->work();
        if ($worker instanceof AndroidWorkder) return;
        $worker->sleep();
    }
}
</pre>

<pre>
interface ManagableInterface{
    public function beManage();
}
interface WorkableInterface{
    public function work();
}
interface SleepableInterface{
    public function sleep();
}

class HumanWorker implements WorkableInterface,
    SleepableInterface,
    ManagableInterface{
    public function work(){
        
    }
    public function sleep(){
        
    }
    public function beManaged(){
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements WorkableInterface,
    ManagableInterface{
    public function work(){
        return 'android working';
    }
    public function beManaged(){
        $this->work();
    }
}

class Caption{
    public function manage(ManagableInterface $worker){
        $worker->beManaged();
    }
}
</pre>
                        </div>
                    </div>
                </div>
                <div id="principles-section5" >
                    <div class="panel panel-primary  slide-page">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                DIP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>Depend on abstractions, </h4>
                            <h4>Not on concretions</h4>

<pre>
class PasswordReminder{
    protected $connection;
    public function __construct(MysqlConnection $connection){
        $this->connection = $connection;
    }
}
</pre>
<pre>
interface ConnectionInterface{
    public function connect();
}

class DbConnection implements ConnectionInterface{
    public function connect(){
        // blablable
    }
}

class PasswordReminder{
    protected $connection;
    public function __construct(DbConnection $connection){
        $this->connection = $connection;
    }
}
</pre>

                        </div>
                    </div>
                </div>

        </section>
        <hr>
        <section id="patterns">
            <h1>Original Patterns Proposed by Gang of Four (Eric Gamma...)</h1>
            <div id="patterns-section1" >
                <div class="panel panel-primary  slide-page">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Creational Patterns
                        </h2>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Abstract factory</li>
                            <li>Factory</li>
                            <li>Builder</li>
                            <li>Prototype</li>
                            <li>Singleton</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="patterns-section2" >
                <div class="panel panel-primary  slide-page">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Structual Patterns
                        </h2>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>adapter</li>
                            <li>Bridge</li>
                            <li>Composite</li>
                            <li>Decorator</li>
                            <li>Façade</li>
                            <li>flyweight</li>
                            <li>proxy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="patterns-section3" >
                <div class="panel panel-primary slide-page">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Behavioral patterns
                        </h2>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Responsibility chain</li>
                            <li>Command</li>
                            <li>Iterator</li>
                            <li>Mediator</li>
                            <li>Memento</li>
                            <li>Observer</li>
                            <li>State</li>
                            <li>Strategy</li>
                            <li>Template</li>
                            <li>visitor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <hr>
    <section id="reference">
        <div class="panel panel-primary slide-page">
            <div class="panel-heading">
                <h3 class="panel-title">
                Reference
                </h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>wiki</li>
                    <li>design patterns</li>
                </ul>
            </div>
        </div>
    </section>
</div>

<div class="col-md-3 manuscript-sidebar" id="myScrollspy">
    <ul class="nav nav-stacked" data-offset-top="80" data-spy="affix">
        <li>
            <a href="#why">why need and what is design patterns</a>
            <ul class="nav nav-stacked">
                <li><a href="#why-why">why is design pattern needed</a></li>
                <li><a href="#why-what">what is design patterns</a></li>
            </ul>
        </li>
        <li>
            <a href="#principles">principles</a>
            <ul class="nav nav-stacked">
                <li><a href="#principles-section0">principles</a></li>
                <li><a href="#principles-section1">SRP</a></li>
                <li><a href="#principles-section2">OCP</a></li>
                <li><a href="#principles-section3">LSP</a></li>
                <li><a href="#principles-section4">ISP</a></li>
                <li><a href="#principles-section5">DIP</a></li>
            </ul>
        </li>
        <li>
            <a href="#patterns">patterns</a>
            <ul class="nav nav-stacked">
                <li><a href="#patterns-section1">Creational Patterns</a></li>
                <li><a href="#patterns-section2">Structual Patterns</a></li>
                <li><a href="#patterns-section3">Behavioral Patterns</a></li>
            </ul>
        </li>
        <li>
            <a href="#reference">reference</a>
        </li>
    </ul>
</div>
</div>
        </div>


@endsection

@section('scripts.footer')
<script src="/assets/js/myslides.js"></script>
@endsection
