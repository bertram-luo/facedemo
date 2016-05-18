@extends('layouts.app', ['links' => $links])

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-9">
    <section id="ch12">
        <h1>Chapter 12: Introducint CSS Layouts</h1>
        <div  id="ch12-section1"><div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Types of Web Page Layouts
                    </h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>fixed width. use fixed with like 960px</li>
                        <li>liquid. user percentage</li>
                        <li>Responsive web design. Instead of presenting a single layout for all devices, responsive web design compensates for di erent browser widths by changing its presentation. mainly use media queries</li>
                    </ul>
                </div>
                <div class="panel-footer">
                </div>
        </div></div>
        <div  id="ch12-section2"><div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        How CSS Layout Works
                    </h3>
                </div>
                <div class="panel-body">
                    <h4>
                        using div when no other semanticly more appropriate tag available
                    </h4>
                    <h4> HTML 5 Sectioning Elements </h4>
                    <p>the new HTML5 elements are intended to add seman- tics to a web page</p>
                    <h4>Techniques for CSS Layout</h4>
                    <p>The vast majority of web pages use the CSS float property for layout</p>
                </div>
                <div class="panel-footer">
                    p 250;
                </div>
        </div></div>
        <div  id="ch12-section3"><div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Layout Strategies
                    </h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Start with Your Content</li>
                        <li>Mobile First.Mobile First design is about starting with your content, but it’s also about getting rid of extraneous noise— including supplementary information that fits fine on a large desktop screen, but merely gets in the way on the smaller screen and detracts from the key information you’re hoping to deliver.</li>
                        <li>css 3 lyaout options
                            <ul>
                                <li>multicolumn layout module</li>
                                <li>flexible box <p>https://css-tricks.com/snippets/css/a-guide-to-flexbox/</p></li>
                                <li>grid layout</li>
                            </ul>
                        </li>
                        <li>Start with a Sketch</li>
                        <li>Identify the Boxes</li>
                        <li>Go with the Flow</li>
                        <li>Remember Background Images</li>
                        <li>Pieces of a Puzzle</li>
                        <li>Layering Elements</li>
                        <li>Don’t Forget Margins and Padding</li>
                    </ul>
                </div>
                <div class="panel-footer">
                    p 250;
                </div>
        </div></div>
</section>
    <hr>
    <section id="ch13">
        <h1>Chapter 13:Building Float- Based Layouts : p417</h1>
        <div id="ch13-section0">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Introduction
                        </h2>
                    </div>
                    <div class="panel-body">
                        <p>using float to place element sibe by side</p>
                        <h4>A simple two-column design like Figure 13-1 in page 418</h4>
                        <ol>
                            <li> warp each column in a &lt;div&lg; tag with an ID or class attribute</li>
                            <li> Float the sidebar &lt;div&gt; either right or left. (The HTML for the floated element must appear before the HTML for the element that wraps around it.)</li>
                            <li>Set a width for the floated sidebar. pixel or percentage</li>
                            <li>Add a left margin to the main content.(If the sidebar is shorter than the other content on the page, the text from the main column wraps underneath the sidebar, ruining the look of two side-by-side columns Figure 13-16 p452)</li>
                        </ol>
                    </div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
        </div>
        <div id="ch13-section1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Applying Floats to Your Layouts : p421
                        </h2>
                    </div>
                    <div class="panel-body">
                        <h4>Expanding two-column to a three-column design</h4>
                        <p>see FIGURE 13-3 in page 421</p>
                        <h4>Floating All Columns</h4>
                        <p>When you float all columns in a design, you need to pay close attention to the widths of each column. If the total width of all the columns is less than the space available—for example, if the browser window is smaller or the columns are placed inside another &lt;div&gt; with a set width—then the last column drops down below the others.<span class="text-todo"> (You can read a solution to this dropping float problem on page 480.)</span></p>
                        <h4>Floats Within Floats: p424 figure 13-5</h4>
                        <p class="text-info">By nesting floats inside floats, you can create some very complex designs</p>
                    </div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
        </div>
        <div id="ch13-section2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            overcoming Float Problems : p425
                        </h2>
                    </div>
                    <div class="panel-body">
                        <h4 class="section">Clearing and Containing Floats: p426 Figure 13-6</h4>
                        <p class="text-danger">To make the footer stay down below the sidebars, you can use the clera property. this property prevents an element from wrapping around floats.</p>
                        <pre>footer {clear:both;}</pre>
                        <p class="text-danger">Another problem occurs when you float one or more elements inside a non-floated containing tag like a &lt;div&gt; tag.</p>
                        <p class="text-info">When the floated element is taller than the other content inside the div, it sticks out of the bottom of the enclosing element. </p>
                        <ul>
                            <li>Add a clearing element at the bottom of the containing div <pre>
br.clear{clear:both;}
</pre></li>
                            <li>Float the containing element. P432: Figure 13-9</li>
                            <li>Use overflow : hidden. it forces the containing block to expand and contain the floated elements.</li>
                            <li>Use the Micro clear fix. <pre>
.clear:after{
    content : "";
    display:table;
    clear : both;
}</pre></li>
                        </ul>
                        <h4 class="section">Creating Full-Height Columns</h4>
                        <h5>wrapper background image for fixed width layout</h5>
                        <h5>linear-gradient for percent laytou</h5>
                        <h4 class="section">Preventing Float Drops p438 FIGURE 13-11</h4>
                        <p>Suddenly, one of your columns simply drops down below the otehrs. it lokks like there's plenty of room for all the columns to coexist perfectly side by side, but they don't. You've got the dreaded float drop</p>
                        <p>A floated column drops down because there's not enough room to fit it. box-model. the displayed with of any eement is a combination of its width left and right border sizes, left and right padding, and left and right margins.</p>
                        <p class="class-info"> p437 example</p>
                        <h5>Preventing Float Drops with box-sizing</h5>
                        <p>The main culprit responsible for float drops is the wacky way browsers calculate the actual screen width for an element.</p>
                        <ul>
                            <li>The content-box value is how browsers normally work: The width of an element is the total of the left and right border thicknesses, left and right padding, and the CSS width property.</li>
                            <li>The padding-box value tells a browser to include the left and right padding. In other words, the display width of an element is the total of the CSS width, and the left and right padding. It doesn’t include any borders around the element.</li>
                            <li> Finally, the border-box property includes padding, borders, and CSS width. In general, this is the one you want to use. It keeps the math simple and helps prevent float drops, especially when you’re using percentage-based widths along with pixel-based units for the border width and padding:</li>
                        </ul>

                    </div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
        </div>
    </section>
    <hr>
    <section id="ch14">
        <h1>Chapter 14 Responsive Web Design</h1>
        <div id="ch14-section1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Responsive Web Design Basics
                        </h2>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
        </div>
        <div id="ch14-section2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                        Setting Up a Web Page for RWD
                        </h2>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
        </div>
        <div id="ch14-section3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Media Queries
                        </h2>
                    </div>
                    <div class="panel-body"></div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
        </div>
        <div id="ch14-section4">
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
        <div id="ch14-section5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Fluid Images
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
    </div>

    <div class="col-md-3 manuscript-sidebar" id="myScrollspy">
        <ul class="nav nav-stacked" data-offset-top="80" data-spy="affix">
            <li>
                <a href="#ch12">chapter 12: Introducint CSS Layout</a>
                <ul class="nav nav-stacked">
                    <li><a href="#ch12-section1">Types of Web Page Layouts</a></li>
                    <li><a href="#ch12-section2">Start with a Sketch</a></li>
                    <li><a href="#ch12-section3">Layout Strategies</a></li>
                </ul>
            </li>
            <li>
                <a href="#ch13">chapter 13: Building Float Based Layouts</a>
                <ul class="nav nav-stacked">
                    <li><a href="#ch13-section0">Introduction</a></li>
                    <li><a href="#ch13-section1">Applying Floats to Your Layouts</a></li>
                    <li><a href="#ch13-section2">Overcoming FLoat Problems</a></li>
                </ul>
            </li>
            <li>
                <a href="#ch14">chapter 14: Responsive Web Design</a>
                <ul class="nav nav-stacked">
                    <li><a href="#ch14-section1">Responsive Web Design Basics</a></li>
                    <li><a href="#ch14-section2">Setting Up a Web Page for RWD</a></li>
                    <li><a href="#ch14-section3">Media Queries</a></li>
                    <li><a href="#ch14-section4">Flexible Grids</a></li>
                    <li><a href="#ch14-section5">Fluid Images</a></li>
                </ul>
            </li>
            <li>
                <a href="#ch15">chapter 15: Positioning Elment On a Web Page</a>
                <ul class="nav nav-stacked"> 
                    <li><a href="#ch15-section0">Introduction</a></li>
                    <li><a href="#ch15-section1">How Positioning property works</a></li>
                    <li><a href="#ch15-section2">Powerful Positioning Strategies</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
        </div>

        <div style=" background-color: #fff; position: fixed; right: 40px; bottom: 40px; border-radius:20px; border: 2px solid #1f86ed; width: 40px; height : 40px; text-align:center; ">

            <a href="#top" style="font-size: 16px; line-height: 36px; color:#1f86ed; display:block;" >Top</a>
        </div>
@endsection
