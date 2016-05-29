@extends('layouts.app', ['links' => $links])
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section id="ch2">
                <h1>chapter 2: Lexical structure (p21)</h1>
                <p>it specifies such things as what variable names look like, the delimiter char- acters for comments, and how one program statement is separated from the next. </p>
                <div  id="ch2-section1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Character Set
                            </h3>
                        </div>
                        <div class="panel-body">
                                <p>JavaScript programs are written using the <span class="text-danger">Unicode character set.</span></p>
                                <p>JavaScript programs are written using the Unicode character set. Unicode is a superset of ASCII and Latin-1 and supports virtually every written language currently used on the planet. ECMAScript 3 requires JavaScript implementations to support Unicode version 2.1 or later, and ECMAScript 5 requires implementations to support Unicode 3 or later. See the sidebar in §3.2 for more about Unicode and JavaScript.</p>
                                <h4>Case Sensivity</h4>
<p>JavaScript is a <span class="text-danger">case-sensitive language</span>. This means that language keywords, variables, function names, and other identifiers must always be typed with a consistent capitali- zation of letters. The while keyword, for example, must be typed “while,” not “While” or “WHILE.” Similarly, online, Online, OnLine, and ONLINE are four distinct variable names.</p>
<p>
Note, however, that HTML is not case-sensitive (although XHTML is). Because of its close association with client-side JavaScript, this difference can be confusing. Many client-side JavaScript objects and properties have the same names as the HTML tags and attributes they represent. While these tags and attribute names can be typed in any case in HTML, in JavaScript they typically must be all lowercase. For example, the HTML onclick event handler attribute is sometimes specified as onClick in HTML, but it must be specified as onclick in JavaScript code (or in XHTML documents).</p>
                                <h4>2.1.2 Whitespace, Line Breaks, and Format Control Characters</h4>
                                <p><span class="text-dander">JavaScript ignores spaces that appear between tokens in programs.</span> For the most part, JavaScript also ignores line breaks (but see §2.5 for an exception). Because you can use spaces and newlines freely in your programs, you can format and indent your programs in a neat and consistent way that makes the code easy to read and understand.</p>
                                <h4>2.1.3 Unicode Escape Sequences</h4>
                                <p>Some computer hardware and software can not display or input the full set of Unicode characters. To support programmers using this older technology, JavaScript defines special sequences of six ASCII characters to represent any 16-bit Unicode codepoint. These Unicode escapes begin with the characters \u and are followed by exactly four hexadecimal digits (using uppercase or lowercase letters A–F). </p>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
                <div  id="ch2-section2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                2.2 Comments
                            </h3>
                        </div>
                        <div class="panel-body">
                        JavaScript supports two styles of comments. Any text between a // and the end of a line is treated as a comment and is ignored by JavaScript. Any text between the char- acters /* and */ is also treated as a comment; these comments may span multiple lines but may not be nested. The following lines of code are all legal JavaScript comments:
                        <pre>
// This is a single-line comment.

/* This is also a comment */ // and here is another comment.

/*
 * This is yet another comment.
 * * It has multiple lines.
 */</pre>
                        </div>
                        <div class="panel-footer">
                            p 250;
                        </div>
                    </div>
                </div>
                <div id="ch2-section3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                2.3 Literals
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p>A literal is a data value that appears directly in a program. The following are all literals:</p>
<pre>
12                                  // The number twelve
1.2  // The number one point two
"hello world" // // A string of text
'Hi'  // // Another string
true  // // A Boolean value
false  // // The other Boolean value
/javascript/gi   // // A "regular expression" literal (for pattern matching) 
null // Absence of an object
</pre>
                        </div>
                        <div class="panel-footer">
                            p 250;
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
            <a href="#ch2">chapter 2: Lexical structure</a>
            <ul class="nav nav-stacked">
                <li><a href="#ch2-section1">Character Set</a></li>
                <li><a href="#ch2-section2">2.2 Comments</a></li>
                <li><a href="#ch2-section3">2.3 Literals</a></li>
            </ul>
        </li>
        <li><a href="#review">Review</a></li>
    </ul>
</div>
</div>
        </div>
@endsection
