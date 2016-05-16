@extends('layouts.app', ['links' => $links])

@section('content')
<h1>Formatting Text</h1>
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



<ul>
    <li>Using Fonts</li>
    <li>Using Web Fonts</li>
    <li>Discovering Google Web Fonts</li>
    <li>Adding color to Text</li>
    <li>Changing Font Size</li>
    <li>Formatting Words and Letters</li>
    <li>Adding Text Shadow</li>
    <li>Formatting Entire Paragraphs</li>
    <li>Styling Lists</li>
</ul>

<ul>
    <li>Understanding the Box Model</li>
    <li>Controlling Space with Margins and Padding</li>
    <li>Adding Border</li>
    <li>Coloring the Background</li>
    <li>Creating Rounded Corners</li>
    <li>Adding Drop Shadows</li>
    <li>Determining Height and Width</li>
    <li>Wrapping Content with Floating Elements</li>
</ul>

<ul>
    <li>Discovering Css and the img tag</li>
    <li>Adding Background images</li>
    <li>Control Repetition</li>
    <li>Positioning a Background Image</li>
    <li>Using Background Property Shorthand</li>
    <li>Using Multiple Background Images</li>
    <li>Utilizing Gradient Backgrounds</li>
    <li>Applying Easy Gradients with Colorzilla</li>
</ul>
@endsection
