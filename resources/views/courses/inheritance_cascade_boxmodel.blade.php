@extends('layouts.app', ['links' => $links])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section id="ch5">
                <h1>  MANAGING MULTIPLE STYLES: THE CASCADE </h1>
                <h2> How Style Cascade</h2>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> How Style Cascade</h3>
                    </div>
                    <div class="panel-body">
                        Style conflicts happen in two cases: through inheritance when the same property is inherited from multiple ancestors, and when one or more styles apply to the same element (maybe you’ve applied a class style to a paragraph and also created a \<p\> tag style

                        </div>
                        <table class="table table-stripped">
                            <tr>
                                <td>
                                    Inherited Styles Accumulate</td>
                                <td>'body { font-family: Verdana, Arial, Helvetica, sans-serif; }
                                    p { color: #F30; }
                                    strong { font-size: 24px; }'</td>
                            </tr>
                            <tr>
                                <td>Nearest Ancestor Wins</td> <td></td>
                            </tr>
                            <tr>
                                <td>The Directly Applied Style Wins</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>One Tag, Many Styles</td>
                                <td>then a web browser combines the properties of all those styles, as long as they don’t conflict.</td>
                            </tr>
                        </table>
                        <div class="panel-footer">
                            p105
                        </div>
                    </div>

                    <h2>Specificity: Which Style Wins</h2>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Specificity: Which Style Wins</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>A tag selector is worth 1 point.</li>
                                        <li>A class selector is worth 10 points.</li>
                                        <li>An ID selector is worth 100 points.</li>
                                        <li>An inline style (page 44) is worth 1,000 points.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>A tag style for the < 'img' > tag ( specificity = 1)</li>
                                        <li> A class style named .highlight (specificity = 10) A class style named .highlight (specificity = 10)</li>
                                        <li> An ID style named #logo (specificity = 100)</li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>Inheritedpropertiesdon’thaveanyspecificity.Soevenifataginheritspropertiesfromastylewith a large specificity—like #banner—those properties will always be overridden by a style that directly applies to the tag.
                        </div>
                        <div class="panel-footer">
                            p108;
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                The Tiebreaker: Last Style Wins
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p> style.css </p>
                            <pre>
             {{'p .email { color: blue; }
     .byline a { color: red; }' }}
         </pre>
                            <p>view.html</p>
                            <pre>{{
             '<p class="byline">Written by <a class="email" href="mailto:jean@cosmofarmer. com">Jean Graine de Pomme</a></p>'
         }}</pre>
                        </div>
                        <div class="panel-footer">
                            p 112;
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Overruling Specificity</h3>
                        </div>
                        <div class="panel-body">
                            <pre>{{
            '.nav a { color: red; }
             a { color: teal !important; }
             '
        }}</pre>
                    </div>
                    <div class="panel-footer">
                        p111;
                    </div>
                </div>



                <h2>Controlling the Cascade </h2>

                Changing the Specificity p111

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Selective Overriding
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p> style.css </p>
                        <pre>{{
             'h2 {
               font-family: Arial, Helvetica, sans-serif;
               font-size: 24px;
               color: #000;
            }'
         }}</pre>
                        <p>home.css</p>
                        <pre>{{
            'h2 {
                    font-size: 36px;
                    color: red;
             }'
        }}</pre>
                        <p>view.html</p>
                        <pre>
             {{ '<div id="article">
             <p>A paragraph</p>
             <p>Another paragraph</p>
             <p class="special">A special paragraph</p>
             </div>' }}
         </pre>
                    </div>
                    <div class="panel-footer">
                        p 112;
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Avoiding Specificity Wars
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p> not good.css </p>
                        <pre>{{
             '  #article p { color: red; }
.special { color: blue; } -> #article .special {color: blue; }
            '
         }}</pre>
                        <ul>
                            <li>First, it makes the selector longer</li>
                            <li> now that blue color is applied only when the special class ap- pears inside something with an ID of article. </li>
                        </ul>
                        <p>view.html</p>
                        <pre>
             {{ '<div id="article">
             <p>A paragraph</p>
             <p>Another paragraph</p>
             <p class="special">A special paragraph</p>
             </div>' }}
         </pre>
                        <p>recommend.css</p>
                        <pre>{{
            '
     .article p { color: red; }
     p.special { color: blue; }'
        }}</pre>
                    </div>
                    <div class="panel-footer">
                        p 113;
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Starting with a Clean Slate : avoid cross-browser inconsistencies
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p> not good.css </p>
                        <pre>{{
         '
html, body, div, span, object, iframe, h0, h2, h3, h4, h5, h6, p, blockquote,pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd,q, s, samp,small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt,dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot,thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption,footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark,audio, video {
             margin: 0;
             padding: 0;
             border: 0;
             font-size: 100%;
             vertical-align: baseline;
}
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
         display: block;
}
body {
     line-height: 1.2;
}
ol {
padding-left: 1.4em;
list-style: decimal;
}
ul {
     padding-left: 1.4emyle
     list-style: square;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
'
         }}</pre>
                    </div>
                    <div class="panel-footer">
                        p 116;
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-3 manuscript-sidebar" id="myScrollspy">
            <ul class="nav nav-stacked" data-offset-top="80" data-spy="affix">
                <li>
                    <a href="#ch5">chapter 5: Managing Multiple Styles</a>
                    <ul class="nav nav-stacked">
                        <li><a href="#ch5-section1">How styles cascade</a></li>
                        <li><a href="#ch5-section2">Specificity: which style wins</a></li>
                        <li><a href="#ch5-section3">Controlling the cascade</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
