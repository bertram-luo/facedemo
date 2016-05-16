@extends('layouts.app', ['links' => $links])

@section('content')
<ol>
    <li>html, js, css relations</li>
    <li>inline, internal, external</li>
    <li>ss = selector + declaration body which = a set of property : value</li>
    <li>accumulation and cascade</li>
</ol>

<section>
    <p>
        a style is, infact, made up of two elements: the selector and the declaration block
    </p>
    <p class="invisible">an em is a unit of measurement that’s based on a browser’s normal text size. more on that in chapter 6.</p>
    <ul>
        <li> and the actual formatting instructions(the declaration block).</li>
    </ul>
</section>

<section>
    <p>anatomy of a style</p>
    <p>understanding style sheets</p>
    a pst of css styles comprises a style sheet. a style sheet can be one of two types- internal or external, depending on wehter the style information is localed in the web page itself or in a separate file pnked to the web page.
    benefits of external css.
    <p>1 . 开发简单</p>
    <p>2 . 加快网站加载</p>
    <p>介绍内联样式表</p>
    (for example, when creating html-formatted email messages, it’s best to use inpne styles. that’s the only way to get css to work in gmail, for instance.)
    <p>介绍外联样式表</p>
    <p> 验证css  http://jigsaw.w3.org/css-vapdator. </p>
</section>
<section>
    <h3>练习1</h3>
    <ul>
        <li>嵌入式样式表</li>
        <li>内联样式表</li>
        <li>外联样式表</li>
    </ul>
</section>
@endsection
