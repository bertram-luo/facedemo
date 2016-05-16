<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <title></title>

        <style>

            .group {
                background: yellow;
                width: 200px;
                height: 500px;
            }
            .group .subgroup {
                background: orange;
                width: 150px;
                height: 200px;
            }

            .fixed {
                position: fixed;
            }

            .bs-docs-sidebar .nav>li>a{
                color: #999;
                padding : 4px 20px;
                font-size : 13px;
                font-weight : 400;
                border-left : 2px solid transparent;
            }

            .bs-docs-sidebar .nav .nav>li>a{
                padding-top : 1px;
                padding-bottom : 1px;
                padding-left : 30px;
                font-size : 12px;
            }

            .bs-docs-sidebar .nav>.active>a{
                color: #563d7c;
                text-decoration: none;
                background-color:transparent;
                border-left: 2px solid #563d7c;
            }
            .bs-docs-sidebar .nav>li>a:hover{
                border-left: 1px solid #563d7c;
            }

            .bs-docs-sidebar .nav>.active>a{
                font-weight:700;
            }
            .bs-docs-sidebar .nav .nav>.active>a{
                font-weight:500;
            }
            .bs-docs-sidebar .nav ul.nav{
                display : none; 
            }
            .bs-docs-sidebar .nav>.active>ul.nav{
                display : block; 
            }

            body{
                position: relative;
            }


        </style>
    </head>
    <body data-spy="scroll" data-target="#myScrollspy">
<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">//what is data-toggle and data-target
                        <span> Toggle navigation </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Face Demo</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" >
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">courses</a>

                            <ul class="dropdown-menu" role="menu">
                                @foreach($links as $link)
                                    <li class="divider">
                                    @foreach($link as $li)
                                    <li class={{ $li['active'] }}><a href={{ $li['link']}}>{{ $li['name'] }}</a></li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class='container'><div class="row">
                <!--Nav Bar -->
                <!--Main Content -->
                <div class="col-md-9">

                    <section id="ch15">
                        <h1>Formatting Text</h1>
                        <hr>
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

<div id="ch15-section3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                Use google font
            </h3>
        </div>
        <div class="panel-body"></div>
        <div class="panel-footer">
            p 153;
        </div>
    </div>
</div>
<div id="ch15-section4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                Adding Color to Font
            </h3>
        </div>
        <div class="panel-body"></div>
        <div class="panel-footer">
            p 153;
        </div>
    </div>
</div>
    </section>

    <hr>

    <section id="ch8">
        <h1>Adding Graphics to Web Pages</h1>
        <div class="panel panel-primary" id="ch8-section1">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Discovering Css and the img tag
                    border, padding, float, margins
                </h3>
            </div>
            <div class="panel-body">
                <h4>Types of Lists</h4>
                unordered list
                ordered list
                <pre>
                    list-style-type : square; // disc, circle, square, none;
                    list-style-type : upper-alpha;//decimal, decimal-leading-zero, upper-alpha, lower-alpha, upper-roman, or lower-roman, none;
                    li:nth-of-type(odd){
                        list-style-type: circle;
                    }
                </pre>
            </div>
            <div class="panel-footer">
                p 240;
            </div>
        </div>
        <div class="panel panel-primary" id="ch8-section2">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Adding Background images
                </h3>
            </div>
            <div class="panel-body">
                www.csszengarden.com
                <pre>
                    body{
                       //absolute path: url(http://www. cosmofarmer.com/image/bg.gif)
                    // root-relative path
                    // document-relative path
                        background-image : url(images/bg.gif);    
                    }
                </pre>
            </div>
            <div class="panel-footer">
                p 250;
            </div>
        </div>
        <div class="panel panel-primary" id="ch8-section3">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Controlling Repetition
                </h3>
            </div>
            <div class="panel-body">
                background-image: radial-gradient(20% 40%, circle, red 20%, orange 80%, yellow);
            </div>
            <div class="panel-footer">
                p 250;
            </div>
        </div>
        <div class="panel panel-primary" id="ch8-section4">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Positioning a Background Image
                </h3>
            </div>
            <div class="panel-body">
                <pre>
        // keywords
                    body{
                    background-image: url (bg_pacgte.jpg);
                    background-repeat: no-repeat;
                    background-position: center center;
                    }
        //Ifyou’vedecidedtotileanimage(bysettingbackground-repeattooneofthevalueslistedin the previous section), then the background-position property controls the starting point of the first tile.
        // precise value
                     background-position: 5px 8px;

        //percentage values
                    background-position: 50% 50%;
        // Fixing an Image in Place
                    body {
                        background-image: url(images/logo.gif);
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                    }// like a logo which should always display relative to the browser window
        // Defining the origin and clipping for a background
           border-box places the image in the upper-left corner of the area assigned to the border (top-left in Figure 8-10).
                  padding-box places the image in the upper-left corner of the area assigned to the padding (top-middle in Figure 8-10). This is normally where a browser places a background image.
                     content-box places the image in the upper-right corner of the area assigned to the content (top-right in Figure 8-10).
                     see page 253;

            background-size : 100px 200px;
            background-size : 100px auto; // browser calculate the height while keeping ratio
            background-size : contain;
            background-size : cover;
            background-size : 100% auto;//usefull in responsive design
                </pre> 
        </div>
        <div class="panel-footer">
            p 250;
        </div>
    </div>
    <div class="panel panel-primary" id="ch8-section5">
        <div class="panel-heading">
            <h3 class="panel-title">
                using background property shorthand
            </h3>
        </div>
        <div class="panel-body">
            <pre>
                    body{
                        background : url(bulleye.gif) center center no-repeat fixed #fff;        
                    }
                    // the following two is equivalent
                    background: url(image/bullseye.gif);
                    background: url(image/bullseye.gif) scroll left top repeat transparent;

                    // yellow is overwrited 
                    background-color: yellow;
                    background: url(image/bullseye.gif) no-repeat;
                    // overwrite default color with yellow
                    background: url(image/bullseye.gif) no-repeat;
                    background-color: yellow;
                </pre>
    </div>
    <div class="panel-footer">
        p 250;
    </div>
</div>



<div class="panel panel-primary" id="ch8-section6">
    <div class="panel-heading">
        <h3 class="panel-title">
            Using multiple background image
        </h3>
    </div>
    <div class="panel-body">
        <pre>
                background-image: url(scrollTop.jpg),
                                  url(scrollBottom.jpg),
                                  url(scrollMiddle.jpg);
                background-repeat:  no-repeat,
                                    no-repeat,
                                    repeat-y;

                background: url(scrollTop.jpg) center top no-repeat,
                            url(scrollBottom.jpg) center bottom no-repeat,
                            url(scrollMiddle.jpg) center top repeat-y;
            </pre>
</div>
<div class="panel-footer">
    p 250;
</div>
    </div>

    <div class="panel panel-primary" id="ch8-section7">
        <div class="panel-heading">
            <h3 class="panel-title">
                Utilizing Gradient Background
            </h3>
        </div>
        <div class="panel-body">
            <h4>
                linear gradient
            </h4>
            <pre>
                background-image: linear-gradient(left,black,white);;
                background-image: linear-gradient(top left,black,white);
                //degree representation
                background-image: linear-gradient(45deg, rgb(0,0,0), rgb(204,204,204));
            </pre>
            <h4>color stop</h4>
            <pre>
                background-image: linear-gradient(left, black, white, black);// p262
                background-image: linear-gradient(left, black, rgb(255,255,255), #FFFFFF,HSL(0,0,0%));// mixing color representation
                background-image: linear-gradient(left, #900, #FC0 10%, #FC0 90%, #900);// specify color position
                background-image: linear-gradient(left, #900 20%, #FC0 30%, #FC0 70%, #900 80%);// specify when to start color transition. left to 20% is #900;
            </pre>
            <h4>VENDOR PREFIXES AND INTERNET EXPLORER SUPPORT</h4>
            <pre>
                //vendore prefix 
                background-image: -webkit-linear-gradient(left,black,white);
                background-image: -moz-linear-gradient(left,black,white);
                background-image: -o-linear-gradient(left,black,white);
                background-image: linear-gradient(left,black,white);
                //pre ie9
                background-color: #FC0;
                background-image: -webkit-linear-gradient(left, #900, #FC0, #900);
                background-image: -moz-linear-gradient(left, #900, #FC0, #900);
                background-image: -o-linear-gradient(left, #900, #FC0, #900);
                background-image: linear-gradient(left, #900, #FC0, #900);
                // prevent from showing background-color when background is set with alpha
                background-color: #FC0;
                background: -webkit-linear-gradient(left, rgba(153,0,0,.5), #FC0,
             rgba(153,0,0,.5));
                background: -moz-linear-gradient(left, rgba(153,0,0,.5),#FC0,rgba(153,0,0,.5));
                background: -o-linear-gradient(left, rgba(153,0,0,.5), #FC0,
                rgba(153,0,0,.5));
                background: linear-gradient(left, rgba(153,0,0,.5), #FC0, rgba(153,0,0,.5));
            </pre>
            <h4>Repeating Linear Gradients : p265</h4>
            <pre>
                background-image: repeating-linear-gradient(bottom left, #900 20px, #FC0 30px,#900 40px)
                background-image: repeating-linear-gradient(45deg, #900 0, #900 10px, #FC0 10px, #FC0 20px);// without transition. just solid lines;
            </pre>
            <h4>Radial Gradients : p266</h4>
            circle or elliptical
            <pre>
                background-image: radial-gradient(red, blue);// fit the containing element
                background-image: radial-gradient(circle, red, blue);// specify 形状
                background-image: radial-gradient(20% 40%, circle, red, blue); // specify starting point
                //controlling size of the radial-gradient  : p268 figure 8-17
                background-image: radial-gradient(20% 40%, circle closest-side, red, blue);
                background-image: radial-gradient(20% 40%, circle closest-corner, red,blue);// may overflow
                background-image:  radial-gradient(20% 40%, circle farthest-side, red, blue);
                background-image:  radial-gradient(20% 40%, circle farthest-corner, red,blue);
                //color stop
                background-image: radial-gradient(20% 40%, circle, red 20%, orange 80%, yellow);
            </pre>
        </div>
        <div class="panel-footer">
            p 250;
        </div>
    </div>
</section>

            </div>

            <nav class="col-md-3 bs-docs-sidebar hidden-print" id="myScrollspy" style="padding-left 40px;">

                <ul class="nav nav-stacked" data-offset-top="120" data-spy="affix">
                    <li>
                        <a href="#ch15">chap 15: Positioning Elment On a Web Page</a>
                        <ul class="nav nav-stacked"> 
                            <li><a href="#ch15-section0">Introduction</a></li>
                            <li><a href="#ch15-section1">How Positioning property works</a></li>
                            <li><a href="#ch15-section2">Powerful Positioning Strategies</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ch8">chapter 8 Adding Graphics to Web Pages</a>
                        <ul class="nav nav-stacked">
                            <li><a href="#ch8-section1">Discovering Css and the img tag</a></li>
                            <li><a href="#ch8-section2">Adding Background images</a></li>
                            <li><a href="#ch8-section3">Control Repetition</a></li>
                            <li><a href="#ch8-section4">Positioning a Background Image</a></li>
                            <li><a href="#ch8-section5">Using Background Property Shorthand</a></li>
                            <li><a href="#ch8-section6">Using Multiple Background Images</a></li>
                            <li><a href="#ch8-section7">Utilizing Gradient Backgrounds</a></li>
                            <li><a href="#ch8-section8">Applying Easy Gradients with Colorzilla</a></li>
                        </ul>
                    </li>
                </ul>

            </nav>
    </div></div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>

</html>

