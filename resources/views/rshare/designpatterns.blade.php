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
                <div  id="why-what"><div class="panel panel-primary">
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
                <div id="principles-section0">
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
                <div id="principles-section1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                SRP
                            </h2>
                        </div>
                        <div class="panel-body"></div>
                        <div class="panel-footer">
                            p 140;
                        </div>
                    </div>
                </div>
                <div id="principles-section2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            </h2>
                        </div>
                        <div class="panel-body"></div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="patterns">
            <h1>Original Patterns Proposed by Gang of Four (Eric Gamma...)</h1>
            <div id="patterns-section1">
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
            <div id="patterns-section2">
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
            <div id="patterns-section3">
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
            <div id="patterns-section4">
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
            <div id="patterns-section5">
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
            <h1>Positioning element on a web page</h1>
            <div id="ch15-section0">
                <h2>Introduction</h2>
                <p>Web pages are much more fluid than printed pages. Once a magazine  rolls off the press, readers cannot change the page size or font size</p>
                <p>Web visitors, on the other hand, can tinker with your handcrafted presentation. They can increase their browser’s font size, potentially making text spill out of your precisely placed and sized layout elements. But the news isn’t all bad: As long as you don’t try to dictate the exact width, height, and position of every design element, you’ll find CSS’s positioning properties powerful and helpful. You can use these properties to make a text caption appear on top of a photo, place a logo anywhere on the page, and much more. </p>
            </div>
            <div id="ch15-section1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            How Positioning property works : P488
                        </h2>
                    </div>
                    <div class="panel-body">
                        p489 : Figure 15-1
                        <h4>Absolute : p488</h4>
                        <p>Absolutely positioned elements are completely detached from the flow of the page as determined by the HTML code. In other words, other things on the page don’t even know the absolutely positioned element exists. They can even disappear completely underneath absolutely positioned items, if you’re not careful.</p>
                        <h4>Relative : p488</h4>
                        <p>
                            Relative. A relatively positioned element is placed relative to its current position in the HTML flow. So, for example, setting a top value of 20 pixels and left value of 200 pixels on a relatively positioned headline moves that headline 20 pixels down and 200 pixels from the left from wherever it would normally appear.
                        </p>
                        <h4>Fixed: p488</h4>
                        <p>
                            A fixed element is locked into place on the screen. Positioning relative to the viewport or the browser window It does the same thing as the fixed value for the background-attachment property (page 579). When a visitor scrolls the page, fixed elements remain onscreen as paragraphs and headlines, while photos disappear o  the top of the browser window.
                        </p>
                        <h4>Static: p489</h4>
                        <p>
                            Static positioning simply means the content follows the normal top-down flow of HTML (see Figure 15-1, top). Why would you want to assign an element static positioning? The short answer: You probably never will.
                        </p>
                        <p>
                            Static is the normal positioning method, it's mainly used to override previously create style that already has a position of absolute, relative or fixed
                        </p>
                        <pre>
position : absolute, relative, fixed, static
                        </pre>
                        <hr>
                        <h4>Setting Position Values : 490</h4>
                        <p>
                            Viewport : the display area of a web browser window has top, right, bottom, left edges. Two are usually enough to place an item on the page. the value may be negative to place element off the page.
                        </p>
<pre>
p491 : Figure 15-2
.banner {
      position: absolute;
      left: 100px;
      top: 50px;
      width: 760px;
}
</pre>

                        <hr>
                        <h4>When absolute positioning is relative: 493</h4>
                        <p> Eg : p493 relative to first positioned ancestor</p>
                        <ul>
                            <li>
                                A tag is positioned relative to the browser window if it has an absolute posi- tion and it’s not inside any other tag that has either absolute, relative, or fixed positioning applied to it.
                            </li>
                            <li>
                                A tag is positioned relative to the edges of another element if it’s inside another tag with absolute, relative, or fixed positioning.

                            </li>
                        </ul>

                        <h4>When (and Where) to Use Relative Positioning</h4>
                        <p>You get one big benefit from placing an element relative to another tag: like a logo positioned relative to a h1</p>
                        <p>A better way to use relativfe positioning is to create a new positioning context for nested tags</p>
                        <p>think of the relative value as meaning "relative to me". when you apply relative positioning to a tag, it means "all positioned elements inside of me should be positioned relative to my location"</p>
                        <pre>
// p496: figure 15-5
h1 {position: relative}
h1 img{
    position: absolute;
    top: 0;
    right: 0;
}
                    </pre>
                        <h4>Stacking Elements</h4>
                        <p>z-index | page 497 : figure 15-6</p>
                        <h4>Hiding Parts of a Page</h4>
                        <pre>
display:none;
visibility : none; //these two almost the same except visibility leaves a empty hole in the place. when use absolute position, these two has no difference;
opacity: 0;

                    </pre>
                        <pre>
&lt;figure class="hat"&gt;
&lt;img src="hat.jpg" width="100" height="100"&gt;
&lt;figcaption&gt;A picture of a hat&lt;/figcaption&gt;
&lt;/figure&gt;

.hat {
    position: relative;
    width: 100px;
    height: 100px;
}
.hat figcaption {
    display: none;
    position: absolute;
    bottom: 0
    left: 0;
    right: 0;
    background-color: white;
}
.hat:hover figcaption {
     display: block;
}
                    </pre>
                </div>
                <div class="panel-footer">
                    p 140;
                </div>
            </div>

        </div>
        <div id="ch15-section2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Powerful Positioning Strategies
                    </h3>
                </div>
                <div class="panel-body">
                    <h4>Positioning Within an Element</h4>
                    <p>The &lt;span&gt; tag is a popular choice for applying a class to a chunk of inline text to style it independently from the rest of a paragraph.</p>
                    <pre>
// p503  figure 15-8
    &lt;h1&gt;&lt;span class="date"&gt;Nov. 10, 2006&lt;/span&gt; CosmoFarmer Bought By Google&lt;/h1&gt;
h1 {
      position: relative;
      border-bottom: 1px dashed #999999;
    }
h1 .date {
      position: absolute;
      bottom: 0;
      right: 0;
      font-size: .5em;
      background-color: #E9E9E9;
      color: black;
      padding: 2px 7px 0 7px;
}
                    </pre>

                    <h4>Breaking an Element Out of the Box</h4>
                    <p>use negative value for top left right bottom</p>
                    <p>To prevent a negatively positioned element from sticking out of the browser window, add enough margin or padding to either the body element or the enclosing, relatively positioned tag—the &lt;h1&gt; tag in this example.</p>
                    <pre>
h1 {
      position: relative;
      margin-top: 35px;
      padding-left: 55px;
      border-bottom: 1px dashed #999999;
    }
h1 img {
      position: absolute;
      top: -30px;
      left: -30px;
}
                    </pre>


                    <h4>Creating CSS-Style Frames Using Fixed Positioning</h4>
                    page 505: figure 15-10
                    <ul>
                        <li>Add&lt;div&gt;tagswithclass(orID)attributesforeachsectionofthepage.</li>
                        <li>Addyourmaterialtoeach&lt;div&gt;.</li>
                        <li>Create styles for all fixed elements.

                            <pre>
.banner {
       position: fixed;
       left: 0;
       right: 0;
       top: 0;
}
     .sidebar {
       position: fixed;
       left: 0;
       top: 110px;
       width: 175px;
}
     .footer {
       position: fixed;
       bottom: 0;
       left: 0;
       right: 0;
}
                        </pre>

                    </li>
                    <li>Create the style for the scrollable content area.
                        <pre>
.main {
      margin-left: 190px;
      margin-top: 110px;
}
                        </pre>

                </li>
            </ul>
        </div>
        <div class="panel-footer">
            p 140;
        </div>
    </div>
</div>
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
                <li><a href="#article-section0">principles</a></li>
                <li><a href="#article-section1">SRP</a></li>
                <li><a href="#article-section2">OCP</a></li>
                <li><a href="#article-section3">LSP</a></li>
                <li><a href="#article-section4">ISP</a></li>
                <li><a href="#article-section5">DIP</a></li>
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
