@extends('layouts.app')

@section('content')
<style>
.article{
    width: 100%;
    height: 100%;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section id="why">
                <div id="why-why" class="article">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Why is design patterns needed
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>code may be run many times</li>
                                <li>the functionaly of code may be changed</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
                <div  id="why-what" class="article">
                    <div class="panel panel-primary">
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
                        <div class="panel-footer">
                            p 250;
                        </div>
                </div></div>
            </section>
            <hr>
            <section id="principles">
                <div id="principles-section0" class="article">
                    <div class="panel panel-primary">
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
                        <div class="panel-footer">
                            p 140;
                        </div>
                    </div>
                </div>
                <div id="principles-section1" class="article">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                SRP
                            </h2>
                        </div>
                        <div class="panel-body">
                        <h4>A class should only have one, </h4>
                        <h4>And only one </h4>
                        <h4>Reason to change</h4>
                        </div>
                        <div class="panel-footer">
                            p 140;
                        </div>
                    </div>
                </div>
                <div id="principles-section2" class="article">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            OCP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>Entities should be</h4>
                            <h4>open for extension</h4>
                            <h4>but closed for modification</h4>
                        </div>
                        <div class="panel-footer">
                            p 140;
                        </div>
                    </div>
                </div>
                <div id="principles-section3" class="article">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            LSP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>Let q(x) be a property provable about object x of type T</h4>
                            <h4>Then q(y) should be provable for object y of type S</h4>
                            <h4>Where S is subtype of T </h4>
                        </div>
                        <div class="panel-footer">
                            p 140;
                        </div>
                    </div>
                </div>
                <div id="principles-section4" class="article">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                ISP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>a client should not be forced to</h4>
                            <h4>implement an interface that it doesn’t use</h4>
                        </div>
                        <div class="panel-footer">
                            p 140;
                        </div>
                    </div>
                </div>
                <div id="principles-section5" class="article">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                DIP
                            </h2>
                        </div>
                        <div class="panel-body">
                            <h4>Depend on abstractions, </h4>
                            <h4>Not on concretions</h4>
                        </div>
                        <div class="panel-footer">
                            p 140;
                        </div>
                    </div>
                </div>

        </section>
        <hr>
        <section id="patterns">
            <h1>Original Patterns Proposed by Gang of Four (Eric Gamma...)</h1>
            <div id="patterns-section1" class="article">
                <div class="panel panel-primary">
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
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
            </div>
            <div id="patterns-section2" class="article">
                <div class="panel panel-primary">
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
                    <div class="panel-footer">
                        p 457;
                    </div>
                </div>
            </div>
            <div id="patterns-section3" class="article">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Media Queries
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
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
            </div>
            <div id="patterns-section4" class="article">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Flexible Grids
                        </h2>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
            </div>
            <div id="patterns-section5" class="article">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Fluid Images
                        </h2>
                    </div>
                    <div class="panel-body"></div>
                    <p class="text-todo"> see book p 471</p>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="ch15">

        </section>
    <section id="review">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Review
                </h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>Positioning</li>
                    <li>media query</li>
                    <li>liquid layout</li>
                    <li>float</li>
                </ul>
            </div>
            <div class="panel-footer">
                p 140;
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
            <a href="#common"></a>
            <ul class="nav nav-stacked">
                <li><a href="#common-section1">Creational Patterns</a></li>
                <li><a href="#common-section2">Structual Patterns</a></li>
                <li><a href="#common-section3">Behavioral Patterns</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
        </div>


@endsection
