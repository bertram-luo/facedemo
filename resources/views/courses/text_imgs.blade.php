@extends('layouts.app', ['links' => $links])

@section('content')
<div style="display:none" id="top"></div>
<div class="container">
<div class="row">
    <div class="col-md-9">
        <section id="ch6">
            <h1>Formatting Text</h1>
            <div id="ch6-section1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Use font</h3>
                    </div>
                    <div class="panel-body">
                        Originally, the font-family property only worked if your site’s visitors had the same font installed on their computers
                    </div>
                    <h3>use font</h3>
                    <pre>
            'p{
            font-family: Arial;
            }'
            </pre>

                    <h3>font family</h3>
                    <pre>
             font-family: Arial, Helvetica, sans-serif;
            </pre>
                    <h3>Also, if the font’s name is made up of more than one word, you must enclose it in quote marks:</h3>
            <pre>font-family: "Times New Roman", Times, serif;</pre>
                    <h3>SERIF FONTS</h3>
                    <p>Serif fonts are best for long passages of text</p>
                    <h3>SANS-SERIF FONTS</h3>
                    <p>Sans-serif fonts are often used for headlines</p>
                    <h3>MONOSPACED AND FUN FONTS</h3>
                    <p>Monospaced fonts are often used to display computer code</p>
                    <div class="panel-footer">
                        p127
                    </div>
                </div>
            </div>
            <div id="ch6-section2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Using Web Font
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>specify font and use font</p>
                        <pre>
                @font-face {// specify which font to download
                       font-family: "League Gothic";
                       src: url('fonts/League_Gothic-webfont.ttf');
                }
                @font-face {
               font-family: 'League Gothic';
               src: url('fonts/League_Gothic-webfont.eot');
               src: url('fonts/League_Gothic-webfont.eot?#iefix') format('embedded-openty-
             pe'),
                    url('fonts/League_Gothic-webfont.woof') format('woff'),
                    url('fonts/League_Gothic-webfont.ttf') format('truetype'),
                    url('fonts/League_Gothic-webfont.svg') format('svg');
                }
                p{ // use the font as usual
                font-family: "League Gothic";
                }

                 </pre>
                        <p>font types</p>
                        <ul class="list-group">
                            <li class="list-group-item">EOT .eot</li>
                            <li class="list-group-item">True Type and Open Type .ttf .otf</li>
                            <li class="list-group-item">WOFF compressed version of above fonts</li>
                            <li class="list-group-item">SVG mainly safari 4.1 or earlier in ios</li>
                        </ul>
                        <p> Finding web fonts </p>
                        <ul class="list-group">
                            <li class="list-group-item">The League of Movable Type (www.theleagueofmoveabletype.com)</li>
                            <li class="list-group-item">Exljbris font foundry (www.exljbris.com). </li>
                            <li class="list-group-item">Fontex.org (www.fontex.org)</li>
                            <li class="list-group-item">TheOpenFontLibrary(http://openfontlibrary.org).</li>
                            <li class="list-group-item">Font Squirrel (www.fontsquirrel.com).</li>
                            <li class="list-group-item">Google Fonts (www.google.com/webfonts)</li>
                        </ul>
                        <h4>Generating Multiple Font Formats</h4>
                        <p>Most of the sites o ering free fonts provide the font in a single format (usually TrueType (.ttf ) or Open Type (.otf). </p>
                        <p>www.fontsquirrel.com/fontface/ generator.</p>
                        <h4>Bold and Italic variants</h4>
                        <pre>
        @font-face {
              font-family: 'PTSans';
              src: url('PTSansRegular.eot');
              src: url('PTSansRegular.eot?#iefix') format('embedded-opentype'),
                    url('PTSansRegular.woof') format('woff'),
                    url('PTSansRegular.ttf') format('truetype'),
                    url('PTSansRegular.svg') format('svg');
              font-weight: normal;
              font-style: normal;
        }

        @font-face {
               font-family: 'PTSans';
               src: url('PTSansItalic.eot');
               src: url('PTSansItalic.eot?#iefix') format('embedded-opentype'),
                    url('PTSansItalic.woof') format('woff'),
                    url('PTSansItalic.ttf') format('truetype'),
                    url('PTSansItalic.svg') format('svg');
               font-weight: normal;
               font-style: italic;
        }

          @font-face {
               font-family: 'PTSans';
               src: url('PTSansBold.eot');
               src: url('PTSansBold.eot?#iefix') format('embedded-opentype'),
                    url('PTSansBold.woof') format('woff'),
                    url('PTSansBold.ttf') format('truetype'),
                    url('PTSansBold.svg') format('svg');
               font-weight: bold;
               font-style: normal;
             }
             @font-face {
               font-family: 'PTSans';
               src: url('PTSansBoldItalic.eot');
               src: url('PTSansBoldItalic.eot?#iefix') format('embedded-opentype'),
                    url('PTSansBoldItalic.woof') format('woff'),
                    url('PTSansBoldItalic.ttf') format('truetype'),
                    url('PTSansBoldItalic.svg') format('svg');
               font-weight: bold;
               font-style: italic;
        }
                </pre>
                        <h4>IE8 compatibility</h4>
                        <pre>
        @font-face {
              font-family: 'PTSansRegular';
              src: url('PTSansRegular.eot');
              src: url('PTSansRegular.eot?#iefix') format('embedded-opentype'),
                    url('PTSansRegular.woof') format('woff'),
                    url('PTSansRegular.ttf') format('truetype'),
                    url('PTSansRegular.svg') format('svg');
        }
        @font-face {
              font-family: 'PTSansItalic';
              src: url('PTSansItalic.eot');
              src: url('PTSansItalic.eot?#iefix') format('embedded-opentype'),
                    url('PTSansItalic.woof') format('woff'),
                    url('PTSansItalic.ttf') format('truetype'),
                    url('PTSansItalic.svg') format('svg');
        }
        @font-face {
              font-family: 'PTSansBold';
              src: url('PTSansBold.eot');
              src: url('PTSansBold.eot?#iefix') format('embedded-opentype'),
                    url('PTSansBold.woof') format('woff'),
                    url('PTSansBold.ttf') format('truetype'),
                    url('PTSansBold.svg') format('svg');
        }
        @font-face {
              font-family: 'PTSansBoldItalic';
              src: url('PTSansBoldItalic.eot');
              src: url('PTSansBoldItalic.eot?#iefix') format('embedded-opentype'),
                    url('PTSansBoldItalic.woof') format('woff'),
                    url('PTSansBoldItalic.ttf') format('truetype'),
                    url('PTSansBoldItalic.svg') format('svg');
        }

        p{
        font-family: PTSansRegular; font-size: 48px; font-style: normal; font-weight: normal;
        }
            p em {
              font-family: PTSansItalic;
              font-style: normal;
              font-weight: normal;
        }
            p strong {
              font-family: PTSansBold;
              font-style: normal;
              font-weight: normal;
        }
            p strong em, p em strong {
              font-family: PTSansBoldItalic;
              font-weight: normal;
              font-style: normal;
        }
            </pre>
                    </div>
                    <div class="panel-footer">
                        p 140;
                    </div>
                </div>
            </div>

            <div id="ch6-section3">
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
            <div id="ch6-section4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Adding Color to Font
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h4>RGB</h4>
                        <pre>
                color: rgb(100%,100%,100%);
                color: rgb(255,255,255);
                </pre>
                        <h4>RGBA</h4>
                        <pre>
                color: rgba(255, 100, 50, .5);
                </pre>
                        <h4>IE8 compatibility</h4>
                        <pre>
                color: rgb(255,100,50); /* for IE8 */
                color: rgba(255,100,50,.5); /* for newer browsers */
                </pre>
                        <h4>HSL and HSLA</h4>
                        <pre>
                color: hsl(0, 100%, 50%);
                color: hsla(0, 100%, 50%, .5);
                </pre>
                    </div>
                    <div class="panel-footer">
                        p 153;
                    </div>
                </div>
            </div>
            <div id="ch6-section5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Changing Font Size
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            rds, ems, exs, pixels, percentages, //mainly for computer screen
                            picas, points, and even inches, centimeters, and millimeters.// mainly for prints
                        </p>
                        <h4>Pixel</h4>
                        <pre>
                font-size: 36px;
                </pre>
                        <h4>Using Keywords, Percentages, and Ems</h4>
                        <pre>
                color: rgba(255, 100, 50, .5);//xx-small, x-small, small, medium, large, x-large, and xx-large // 9 10 13 16 18 24 32
                </pre>
                        <h4>PERCENTAGSE</h4>
                        <pre>
                font-size: 200%;// can be inheritaced
                '\<div style="font-size:32px">
                   \ <p style="font-size:150%"></p>// actual size is 32 * 1.5 = 48
                \</div>'
                </pre>
                        <h4>HSL and HSLA</h4>
                        <pre>
                color: hsl(0, 100%, 50%);
                color: hsla(0, 100%, 50%, .5);
                </pre>
                    </div>
                    <div class="panel-footer">
                        p 153;
                    </div>
                </div>
            </div>
            <div id="ch6-section6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Formatting Words and Letters
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h4>Italicizing and Bolding</h4>
                        <pre>
                    font-style:italic; // set italic
                    font-style:normal; // set normal
                    font-weight: bold;
                    font-weight: normal;
                </pre>
                        <h4>Capitalizing</h4>
                        <pre>
                    text-transform: uppercase;
                    text-transform: none; //  forbid inherit text transform attribute;
                    font-variant: small-caps;
                </pre>
                        <h4>Decorating</h4>
                        <pre>
                    text-decoration : underline overline line-through
                    text-decoration : none;
                </pre>
                        <h4>Letter and Word Spacing</h4>
                        <pre>
                    line-spacing: -1px; // minus value means subtracting space
                    line-spacing: .7em; // plus value means adding space
                    word-spacing: 2px;
                </pre>

                    </div>
                    <div class="panel-footer">
                        p 165;
                    </div>
                </div>
            </div>

            <div id="ch6-section7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Adding Text Shadow
                        </h3>
                    </div>
                    <div class="panel-body">
                        <pre>
                    text-shadow: -4px 4px 3px #999999; // horizontal-offset, vertical-offset, bluring, shadow's color;
                    text-shadow: -4px 4px 3px #666, 1px -1px 2px #000;// composite
                </pre>
                </div>
                <div class="panel-footer">
                    p 165;
                </div>
            </div>

        </div>

        <div id="ch6-section8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Formatting Entire Paragraphs
                    </h3>
                </div>
                <div class="panel-body">
                    <h4>Formatting Entire Paragraphs</h4>
                    <pre>
                    line-height: 150%;// prefer percentage and em over pixels, cos they adjusts properly whenever you change the fonr-zie value;
                    //  may cause problem because the line-heith is calculated instantly and inherited. if a son node changed its font size, the line-height may be not appropriate.
            // usually line-height setting for a browser is 120%;
                    line-height: 1.5;  //  multiply by the current font-size.
                </pre>
                    <h4>Aligning Text</h4>
                    <pre>
                    text-align: center; // left, right, justify
                </pre>
                    <h4>Indenting the First Line and Removing Margins</h4>
                    <pre>
                    text-indent: 25px;
                    text-indent: 5em;// number of letters
                    text-indent: 10%;// related to the width of the paragrphs's containing element;
                </pre>
                    <h4>Text Formatting shorthand</h4>
                    <pre>
                        font: italic bold small-caps 18px/150%
                            Arial, Helvetica, sans-serif; // last two must be font-size and font-family;
                    </pre>
                    <h4>Controlling margins between paragraphs</h4>
                    <pre>
                    p{
                    margin-top: 0; margin-bottom: 0;
                    }
                    </pre>
                    <h4>Formatting the First Letter or First Line of a Paragraph</h4>
                    <pre>
                        p:first-letter{
                            font-weight: bold;
                            color: red;        
                        }
                        p:first-line{
                        }
                    </pre>

                </div>
                <div class="panel-footer">
                    p 165;
                </div>
            </div>

        </div>
    </section>
    <div id="ch6-section9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Styling List
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
                <h4>Positioning Bullets and Numbers</h4>
                <pre>
                        list-style-position: outside;// inside
                        ul, ol {
                            padding-left: 0;// some browser use padding, some use margin
                            margin-left: 0;
                        }
                    </pre>
                <h4>Graphic Bullets</h4>
                <pre>
                        list-style-image : url(images/bullet.gif);
                    </pre>
                <h4>Shorthand</h4>
                <pre>
                        list-style: circle url(images/bullet.gif) inside;// brower use the style stype circle if the graphic cannot be found
                    </pre>
            </div>
            <div class="panel-footer">
                p 165;
            </div>
        </div>

    </div>


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
                <h4></h4>
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

    <div class="col-md-3 manuscript-sidebar" id="myScrollspy">
        <ul class="nav nav-stacked" data-offset-top="120" data-spy="affix">
            <li>
                <a href="#ch6">chap 06: Formating text</a>
                <ul class="nav nav-stacked"> 
                    <li class="active"><a href="#ch6-section1">Using Fonts</a></li>
                    <li><a href="#ch6-section2">Using Web Fonts</a></li>
                    <li><a href="#ch6-section3">Discovering Google Web Fonts</a></li>
                    <li><a href="#ch6-section4">Adding color to Text</a></li>
                    <li><a href="#ch6-section5">Changing Font Size</a></li>
                    <li><a href="#ch6-section6">Formatting Words and Letters</a></li>
                    <li><a href="#ch6-section7">Adding Text Shadow</a></li>
                    <li><a href="#ch6-section8">Formatting Entire Paragraphs</a></li>
                    <li><a href="#ch6-section8">Styling Lists</a></li>
                </ul>
            </li>
            <li>
                <a href="#ch7">Chap 07: Box Model</a>
                <ul class="nav nav-stacked">
                    <li><a href="#ch7-section1">Understanding the Box Model</a></li>
                    <li><a href="#ch7-section2">Controlling Space with Margins and Padding</a></li>
                    <li><a href="#ch7-section3">Adding Border</a></li>
                    <li><a href="#ch7-section4">Coloring the Background</a></li>
                    <li><a href="#ch7-section5">Creating Rounded Corners</a></li>
                    <li><a href="#ch7-section6">Adding Drop Shadows</a></li>
                    <li><a href="#ch7-section7">Determining Height and Width</a></li>
                    <li><a href="#ch7-section8">Wrapping Content with Floating Elements</a></li>
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
    </div>

</div>
</div>
@endsection
