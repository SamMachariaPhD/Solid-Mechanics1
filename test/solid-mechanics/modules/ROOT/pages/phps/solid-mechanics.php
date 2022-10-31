<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="Asciidoctor 2.0.18">
<meta name="description" content="Engineering, Computing, Science, and Philosophy">
<meta name="keywords" content="Mechanics of Solids, Mechanics of Materials, Strength of Materials,">
<meta name="author" content="Dr. Sam Macharia, Home">
<link rel="icon" type="image/png" href="favicon.png">
<title>Solid Mechanics: Theory and Examples</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic%7CNoto+Serif:400,400italic,700,700italic%7CDroid+Sans+Mono:400,700">
<style>
/*! Asciidoctor default stylesheet | MIT License | https://asciidoctor.org */
/* Uncomment the following line when using as a custom stylesheet */
/* @import "https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic%7CNoto+Serif:400,400italic,700,700italic%7CDroid+Sans+Mono:400,700"; */
html{font-family:sans-serif;-webkit-text-size-adjust:100%}
a{background:none}
a:focus{outline:thin dotted}
a:active,a:hover{outline:0}
h1{font-size:2em;margin:.67em 0}
b,strong{font-weight:bold}
abbr{font-size:.9em}
abbr[title]{cursor:help;border-bottom:1px dotted #dddddf;text-decoration:none}
dfn{font-style:italic}
hr{height:0}
mark{background:#ff0;color:#000}
code,kbd,pre,samp{font-family:monospace;font-size:1em}
pre{white-space:pre-wrap}
q{quotes:"\201C" "\201D" "\2018" "\2019"}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-.5em}
sub{bottom:-.25em}
img{border:0}
svg:not(:root){overflow:hidden}
figure{margin:0}
audio,video{display:inline-block}
audio:not([controls]){display:none;height:0}
fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}
legend{border:0;padding:0}
button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}
button,input{line-height:normal}
button,select{text-transform:none}
button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}
button[disabled],html input[disabled]{cursor:default}
input[type=checkbox],input[type=radio]{padding:0}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
textarea{overflow:auto;vertical-align:top}
table{border-collapse:collapse;border-spacing:0}
*,::before,::after{box-sizing:border-box}
html,body{font-size:100%}
body{background:#fff;color:rgba(0,0,0,.8);padding:0;margin:0;font-family:"Noto Serif","DejaVu Serif",serif;line-height:1;position:relative;cursor:auto;-moz-tab-size:4;-o-tab-size:4;tab-size:4;word-wrap:anywhere;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased}
a:hover{cursor:pointer}
img,object,embed{max-width:100%;height:auto}
object,embed{height:100%}
img{-ms-interpolation-mode:bicubic}
.left{float:left!important}
.right{float:right!important}
.text-left{text-align:left!important}
.text-right{text-align:right!important}
.text-center{text-align:center!important}
.text-justify{text-align:justify!important}
.hide{display:none}
img,object,svg{display:inline-block;vertical-align:middle}
textarea{height:auto;min-height:50px}
select{width:100%}
.subheader,.admonitionblock td.content>.title,.audioblock>.title,.exampleblock>.title,.imageblock>.title,.listingblock>.title,.literalblock>.title,.stemblock>.title,.openblock>.title,.paragraph>.title,.quoteblock>.title,table.tableblock>.title,.verseblock>.title,.videoblock>.title,.dlist>.title,.olist>.title,.ulist>.title,.qlist>.title,.hdlist>.title{line-height:1.45;color:#7a2518;font-weight:400;margin-top:0;margin-bottom:.25em}
div,dl,dt,dd,ul,ol,li,h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6,pre,form,p,blockquote,th,td{margin:0;padding:0}
a{color:#2156a5;text-decoration:underline;line-height:inherit}
a:hover,a:focus{color:#1d4b8f}
a img{border:0}
p{line-height:1.6;margin-bottom:1.25em;text-rendering:optimizeLegibility}
p aside{font-size:.875em;line-height:1.35;font-style:italic}
h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{font-family:"Open Sans","DejaVu Sans",sans-serif;font-weight:300;font-style:normal;color:#ba3925;text-rendering:optimizeLegibility;margin-top:1em;margin-bottom:.5em;line-height:1.0125em}
h1 small,h2 small,h3 small,#toctitle small,.sidebarblock>.content>.title small,h4 small,h5 small,h6 small{font-size:60%;color:#e99b8f;line-height:0}
h1{font-size:2.125em}
h2{font-size:1.6875em}
h3,#toctitle,.sidebarblock>.content>.title{font-size:1.375em}
h4,h5{font-size:1.125em}
h6{font-size:1em}
hr{border:solid #dddddf;border-width:1px 0 0;clear:both;margin:1.25em 0 1.1875em}
em,i{font-style:italic;line-height:inherit}
strong,b{font-weight:bold;line-height:inherit}
small{font-size:60%;line-height:inherit}
code{font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;font-weight:400;color:rgba(0,0,0,.9)}
ul,ol,dl{line-height:1.6;margin-bottom:1.25em;list-style-position:outside;font-family:inherit}
ul,ol{margin-left:1.5em}
ul li ul,ul li ol{margin-left:1.25em;margin-bottom:0}
ul.circle{list-style-type:circle}
ul.disc{list-style-type:disc}
ul.square{list-style-type:square}
ul.circle ul:not([class]),ul.disc ul:not([class]),ul.square ul:not([class]){list-style:inherit}
ol li ul,ol li ol{margin-left:1.25em;margin-bottom:0}
dl dt{margin-bottom:.3125em;font-weight:bold}
dl dd{margin-bottom:1.25em}
blockquote{margin:0 0 1.25em;padding:.5625em 1.25em 0 1.1875em;border-left:1px solid #ddd}
blockquote,blockquote p{line-height:1.6;color:rgba(0,0,0,.85)}
@media screen and (min-width:768px){h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{line-height:1.2}
h1{font-size:2.75em}
h2{font-size:2.3125em}
h3,#toctitle,.sidebarblock>.content>.title{font-size:1.6875em}
h4{font-size:1.4375em}}
table{background:#fff;margin-bottom:1.25em;border:1px solid #dedede;word-wrap:normal}
table thead,table tfoot{background:#f7f8f7}
table thead tr th,table thead tr td,table tfoot tr th,table tfoot tr td{padding:.5em .625em .625em;font-size:inherit;color:rgba(0,0,0,.8);text-align:left}
table tr th,table tr td{padding:.5625em .625em;font-size:inherit;color:rgba(0,0,0,.8)}
table tr.even,table tr.alt{background:#f8f8f7}
table thead tr th,table tfoot tr th,table tbody tr td,table tr td,table tfoot tr td{line-height:1.6}
h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{line-height:1.2;word-spacing:-.05em}
h1 strong,h2 strong,h3 strong,#toctitle strong,.sidebarblock>.content>.title strong,h4 strong,h5 strong,h6 strong{font-weight:400}
.center{margin-left:auto;margin-right:auto}
.stretch{width:100%}
.clearfix::before,.clearfix::after,.float-group::before,.float-group::after{content:" ";display:table}
.clearfix::after,.float-group::after{clear:both}
:not(pre).nobreak{word-wrap:normal}
:not(pre).nowrap{white-space:nowrap}
:not(pre).pre-wrap{white-space:pre-wrap}
:not(pre):not([class^=L])>code{font-size:.9375em;font-style:normal!important;letter-spacing:0;padding:.1em .5ex;word-spacing:-.15em;background:#f7f7f8;border-radius:4px;line-height:1.45;text-rendering:optimizeSpeed}
pre{color:rgba(0,0,0,.9);font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;line-height:1.45;text-rendering:optimizeSpeed}
pre code,pre pre{color:inherit;font-size:inherit;line-height:inherit}
pre>code{display:block}
pre.nowrap,pre.nowrap pre{white-space:pre;word-wrap:normal}
em em{font-style:normal}
strong strong{font-weight:400}
.keyseq{color:rgba(51,51,51,.8)}
kbd{font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;display:inline-block;color:rgba(0,0,0,.8);font-size:.65em;line-height:1.45;background:#f7f7f7;border:1px solid #ccc;border-radius:3px;box-shadow:0 1px 0 rgba(0,0,0,.2),inset 0 0 0 .1em #fff;margin:0 .15em;padding:.2em .5em;vertical-align:middle;position:relative;top:-.1em;white-space:nowrap}
.keyseq kbd:first-child{margin-left:0}
.keyseq kbd:last-child{margin-right:0}
.menuseq,.menuref{color:#000}
.menuseq b:not(.caret),.menuref{font-weight:inherit}
.menuseq{word-spacing:-.02em}
.menuseq b.caret{font-size:1.25em;line-height:.8}
.menuseq i.caret{font-weight:bold;text-align:center;width:.45em}
b.button::before,b.button::after{position:relative;top:-1px;font-weight:400}
b.button::before{content:"[";padding:0 3px 0 2px}
b.button::after{content:"]";padding:0 2px 0 3px}
p a>code:hover{color:rgba(0,0,0,.9)}
#header,#content,#footnotes,#footer{width:100%;margin:0 auto;max-width:62.5em;*zoom:1;position:relative;padding-left:.9375em;padding-right:.9375em}
#header::before,#header::after,#content::before,#content::after,#footnotes::before,#footnotes::after,#footer::before,#footer::after{content:" ";display:table}
#header::after,#content::after,#footnotes::after,#footer::after{clear:both}
#content{margin-top:1.25em}
#content::before{content:none}
#header>h1:first-child{color:rgba(0,0,0,.85);margin-top:2.25rem;margin-bottom:0}
#header>h1:first-child+#toc{margin-top:8px;border-top:1px solid #dddddf}
#header>h1:only-child,body.toc2 #header>h1:nth-last-child(2){border-bottom:1px solid #dddddf;padding-bottom:8px}
#header .details{border-bottom:1px solid #dddddf;line-height:1.45;padding-top:.25em;padding-bottom:.25em;padding-left:.25em;color:rgba(0,0,0,.6);display:flex;flex-flow:row wrap}
#header .details span:first-child{margin-left:-.125em}
#header .details span.email a{color:rgba(0,0,0,.85)}
#header .details br{display:none}
#header .details br+span::before{content:"\00a0\2013\00a0"}
#header .details br+span.author::before{content:"\00a0\22c5\00a0";color:rgba(0,0,0,.85)}
#header .details br+span#revremark::before{content:"\00a0|\00a0"}
#header #revnumber{text-transform:capitalize}
#header #revnumber::after{content:"\00a0"}
#content>h1:first-child:not([class]){color:rgba(0,0,0,.85);border-bottom:1px solid #dddddf;padding-bottom:8px;margin-top:0;padding-top:1rem;margin-bottom:1.25rem}
#toc{border-bottom:1px solid #e7e7e9;padding-bottom:.5em}
#toc>ul{margin-left:.125em}
#toc ul.sectlevel0>li>a{font-style:italic}
#toc ul.sectlevel0 ul.sectlevel1{margin:.5em 0}
#toc ul{font-family:"Open Sans","DejaVu Sans",sans-serif;list-style-type:none}
#toc li{line-height:1.3334;margin-top:.3334em}
#toc a{text-decoration:none}
#toc a:active{text-decoration:underline}
#toctitle{color:#7a2518;font-size:1.2em}
@media screen and (min-width:768px){#toctitle{font-size:1.375em}
body.toc2{padding-left:15em;padding-right:0}
#toc.toc2{margin-top:0!important;background:#f8f8f7;position:fixed;width:15em;left:0;top:0;border-right:1px solid #e7e7e9;border-top-width:0!important;border-bottom-width:0!important;z-index:1000;padding:1.25em 1em;height:100%;overflow:auto}
#toc.toc2 #toctitle{margin-top:0;margin-bottom:.8rem;font-size:1.2em}
#toc.toc2>ul{font-size:.9em;margin-bottom:0}
#toc.toc2 ul ul{margin-left:0;padding-left:1em}
#toc.toc2 ul.sectlevel0 ul.sectlevel1{padding-left:0;margin-top:.5em;margin-bottom:.5em}
body.toc2.toc-right{padding-left:0;padding-right:15em}
body.toc2.toc-right #toc.toc2{border-right-width:0;border-left:1px solid #e7e7e9;left:auto;right:0}}
@media screen and (min-width:1280px){body.toc2{padding-left:20em;padding-right:0}
#toc.toc2{width:20em}
#toc.toc2 #toctitle{font-size:1.375em}
#toc.toc2>ul{font-size:.95em}
#toc.toc2 ul ul{padding-left:1.25em}
body.toc2.toc-right{padding-left:0;padding-right:20em}}
#content #toc{border:1px solid #e0e0dc;margin-bottom:1.25em;padding:1.25em;background:#f8f8f7;border-radius:4px}
#content #toc>:first-child{margin-top:0}
#content #toc>:last-child{margin-bottom:0}
#footer{max-width:none;background:rgba(0,0,0,.8);padding:1.25em}
#footer-text{color:hsla(0,0%,100%,.8);line-height:1.44}
#content{margin-bottom:.625em}
.sect1{padding-bottom:.625em}
@media screen and (min-width:768px){#content{margin-bottom:1.25em}
.sect1{padding-bottom:1.25em}}
.sect1:last-child{padding-bottom:0}
.sect1+.sect1{border-top:1px solid #e7e7e9}
#content h1>a.anchor,h2>a.anchor,h3>a.anchor,#toctitle>a.anchor,.sidebarblock>.content>.title>a.anchor,h4>a.anchor,h5>a.anchor,h6>a.anchor{position:absolute;z-index:1001;width:1.5ex;margin-left:-1.5ex;display:block;text-decoration:none!important;visibility:hidden;text-align:center;font-weight:400}
#content h1>a.anchor::before,h2>a.anchor::before,h3>a.anchor::before,#toctitle>a.anchor::before,.sidebarblock>.content>.title>a.anchor::before,h4>a.anchor::before,h5>a.anchor::before,h6>a.anchor::before{content:"\00A7";font-size:.85em;display:block;padding-top:.1em}
#content h1:hover>a.anchor,#content h1>a.anchor:hover,h2:hover>a.anchor,h2>a.anchor:hover,h3:hover>a.anchor,#toctitle:hover>a.anchor,.sidebarblock>.content>.title:hover>a.anchor,h3>a.anchor:hover,#toctitle>a.anchor:hover,.sidebarblock>.content>.title>a.anchor:hover,h4:hover>a.anchor,h4>a.anchor:hover,h5:hover>a.anchor,h5>a.anchor:hover,h6:hover>a.anchor,h6>a.anchor:hover{visibility:visible}
#content h1>a.link,h2>a.link,h3>a.link,#toctitle>a.link,.sidebarblock>.content>.title>a.link,h4>a.link,h5>a.link,h6>a.link{color:#ba3925;text-decoration:none}
#content h1>a.link:hover,h2>a.link:hover,h3>a.link:hover,#toctitle>a.link:hover,.sidebarblock>.content>.title>a.link:hover,h4>a.link:hover,h5>a.link:hover,h6>a.link:hover{color:#a53221}
details,.audioblock,.imageblock,.literalblock,.listingblock,.stemblock,.videoblock{margin-bottom:1.25em}
details{margin-left:1.25rem}
details>summary{cursor:pointer;display:block;position:relative;line-height:1.6;margin-bottom:.625rem;outline:none;-webkit-tap-highlight-color:transparent}
details>summary::-webkit-details-marker{display:none}
details>summary::before{content:"";border:solid transparent;border-left:solid;border-width:.3em 0 .3em .5em;position:absolute;top:.5em;left:-1.25rem;transform:translateX(15%)}
details[open]>summary::before{border:solid transparent;border-top:solid;border-width:.5em .3em 0;transform:translateY(15%)}
details>summary::after{content:"";width:1.25rem;height:1em;position:absolute;top:.3em;left:-1.25rem}
.admonitionblock td.content>.title,.audioblock>.title,.exampleblock>.title,.imageblock>.title,.listingblock>.title,.literalblock>.title,.stemblock>.title,.openblock>.title,.paragraph>.title,.quoteblock>.title,table.tableblock>.title,.verseblock>.title,.videoblock>.title,.dlist>.title,.olist>.title,.ulist>.title,.qlist>.title,.hdlist>.title{text-rendering:optimizeLegibility;text-align:left;font-family:"Noto Serif","DejaVu Serif",serif;font-size:1rem;font-style:italic}
table.tableblock.fit-content>caption.title{white-space:nowrap;width:0}
.paragraph.lead>p,#preamble>.sectionbody>[class=paragraph]:first-of-type p{font-size:1.21875em;line-height:1.6;color:rgba(0,0,0,.85)}
.admonitionblock>table{border-collapse:separate;border:0;background:none;width:100%}
.admonitionblock>table td.icon{text-align:center;width:80px}
.admonitionblock>table td.icon img{max-width:none}
.admonitionblock>table td.icon .title{font-weight:bold;font-family:"Open Sans","DejaVu Sans",sans-serif;text-transform:uppercase}
.admonitionblock>table td.content{padding-left:1.125em;padding-right:1.25em;border-left:1px solid #dddddf;color:rgba(0,0,0,.6);word-wrap:anywhere}
.admonitionblock>table td.content>:last-child>:last-child{margin-bottom:0}
.exampleblock>.content{border:1px solid #e6e6e6;margin-bottom:1.25em;padding:1.25em;background:#fff;border-radius:4px}
.exampleblock>.content>:first-child{margin-top:0}
.exampleblock>.content>:last-child{margin-bottom:0}
.sidebarblock{border:1px solid #dbdbd6;margin-bottom:1.25em;padding:1.25em;background:#f3f3f2;border-radius:4px}
.sidebarblock>:first-child{margin-top:0}
.sidebarblock>:last-child{margin-bottom:0}
.sidebarblock>.content>.title{color:#7a2518;margin-top:0;text-align:center}
.exampleblock>.content>:last-child>:last-child,.exampleblock>.content .olist>ol>li:last-child>:last-child,.exampleblock>.content .ulist>ul>li:last-child>:last-child,.exampleblock>.content .qlist>ol>li:last-child>:last-child,.sidebarblock>.content>:last-child>:last-child,.sidebarblock>.content .olist>ol>li:last-child>:last-child,.sidebarblock>.content .ulist>ul>li:last-child>:last-child,.sidebarblock>.content .qlist>ol>li:last-child>:last-child{margin-bottom:0}
.literalblock pre,.listingblock>.content>pre{border-radius:4px;overflow-x:auto;padding:1em;font-size:.8125em}
@media screen and (min-width:768px){.literalblock pre,.listingblock>.content>pre{font-size:.90625em}}
@media screen and (min-width:1280px){.literalblock pre,.listingblock>.content>pre{font-size:1em}}
.literalblock pre,.listingblock>.content>pre:not(.highlight),.listingblock>.content>pre[class=highlight],.listingblock>.content>pre[class^="highlight "]{background:#f7f7f8}
.literalblock.output pre{color:#f7f7f8;background:rgba(0,0,0,.9)}
.listingblock>.content{position:relative}
.listingblock code[data-lang]::before{display:none;content:attr(data-lang);position:absolute;font-size:.75em;top:.425rem;right:.5rem;line-height:1;text-transform:uppercase;color:inherit;opacity:.5}
.listingblock:hover code[data-lang]::before{display:block}
.listingblock.terminal pre .command::before{content:attr(data-prompt);padding-right:.5em;color:inherit;opacity:.5}
.listingblock.terminal pre .command:not([data-prompt])::before{content:"$"}
.listingblock pre.highlightjs{padding:0}
.listingblock pre.highlightjs>code{padding:1em;border-radius:4px}
.listingblock pre.prettyprint{border-width:0}
.prettyprint{background:#f7f7f8}
pre.prettyprint .linenums{line-height:1.45;margin-left:2em}
pre.prettyprint li{background:none;list-style-type:inherit;padding-left:0}
pre.prettyprint li code[data-lang]::before{opacity:1}
pre.prettyprint li:not(:first-child) code[data-lang]::before{display:none}
table.linenotable{border-collapse:separate;border:0;margin-bottom:0;background:none}
table.linenotable td[class]{color:inherit;vertical-align:top;padding:0;line-height:inherit;white-space:normal}
table.linenotable td.code{padding-left:.75em}
table.linenotable td.linenos,pre.pygments .linenos{border-right:1px solid;opacity:.35;padding-right:.5em;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
pre.pygments span.linenos{display:inline-block;margin-right:.75em}
.quoteblock{margin:0 1em 1.25em 1.5em;display:table}
.quoteblock:not(.excerpt)>.title{margin-left:-1.5em;margin-bottom:.75em}
.quoteblock blockquote,.quoteblock p{color:rgba(0,0,0,.85);font-size:1.15rem;line-height:1.75;word-spacing:.1em;letter-spacing:0;font-style:italic;text-align:justify}
.quoteblock blockquote{margin:0;padding:0;border:0}
.quoteblock blockquote::before{content:"\201c";float:left;font-size:2.75em;font-weight:bold;line-height:.6em;margin-left:-.6em;color:#7a2518;text-shadow:0 1px 2px rgba(0,0,0,.1)}
.quoteblock blockquote>.paragraph:last-child p{margin-bottom:0}
.quoteblock .attribution{margin-top:.75em;margin-right:.5ex;text-align:right}
.verseblock{margin:0 1em 1.25em}
.verseblock pre{font-family:"Open Sans","DejaVu Sans",sans-serif;font-size:1.15rem;color:rgba(0,0,0,.85);font-weight:300;text-rendering:optimizeLegibility}
.verseblock pre strong{font-weight:400}
.verseblock .attribution{margin-top:1.25rem;margin-left:.5ex}
.quoteblock .attribution,.verseblock .attribution{font-size:.9375em;line-height:1.45;font-style:italic}
.quoteblock .attribution br,.verseblock .attribution br{display:none}
.quoteblock .attribution cite,.verseblock .attribution cite{display:block;letter-spacing:-.025em;color:rgba(0,0,0,.6)}
.quoteblock.abstract blockquote::before,.quoteblock.excerpt blockquote::before,.quoteblock .quoteblock blockquote::before{display:none}
.quoteblock.abstract blockquote,.quoteblock.abstract p,.quoteblock.excerpt blockquote,.quoteblock.excerpt p,.quoteblock .quoteblock blockquote,.quoteblock .quoteblock p{line-height:1.6;word-spacing:0}
.quoteblock.abstract{margin:0 1em 1.25em;display:block}
.quoteblock.abstract>.title{margin:0 0 .375em;font-size:1.15em;text-align:center}
.quoteblock.excerpt>blockquote,.quoteblock .quoteblock{padding:0 0 .25em 1em;border-left:.25em solid #dddddf}
.quoteblock.excerpt,.quoteblock .quoteblock{margin-left:0}
.quoteblock.excerpt blockquote,.quoteblock.excerpt p,.quoteblock .quoteblock blockquote,.quoteblock .quoteblock p{color:inherit;font-size:1.0625rem}
.quoteblock.excerpt .attribution,.quoteblock .quoteblock .attribution{color:inherit;font-size:.85rem;text-align:left;margin-right:0}
p.tableblock:last-child{margin-bottom:0}
td.tableblock>.content{margin-bottom:1.25em;word-wrap:anywhere}
td.tableblock>.content>:last-child{margin-bottom:-1.25em}
table.tableblock,th.tableblock,td.tableblock{border:0 solid #dedede}
table.grid-all>*>tr>*{border-width:1px}
table.grid-cols>*>tr>*{border-width:0 1px}
table.grid-rows>*>tr>*{border-width:1px 0}
table.frame-all{border-width:1px}
table.frame-ends{border-width:1px 0}
table.frame-sides{border-width:0 1px}
table.frame-none>colgroup+*>:first-child>*,table.frame-sides>colgroup+*>:first-child>*{border-top-width:0}
table.frame-none>:last-child>:last-child>*,table.frame-sides>:last-child>:last-child>*{border-bottom-width:0}
table.frame-none>*>tr>:first-child,table.frame-ends>*>tr>:first-child{border-left-width:0}
table.frame-none>*>tr>:last-child,table.frame-ends>*>tr>:last-child{border-right-width:0}
table.stripes-all>*>tr,table.stripes-odd>*>tr:nth-of-type(odd),table.stripes-even>*>tr:nth-of-type(even),table.stripes-hover>*>tr:hover{background:#f8f8f7}
th.halign-left,td.halign-left{text-align:left}
th.halign-right,td.halign-right{text-align:right}
th.halign-center,td.halign-center{text-align:center}
th.valign-top,td.valign-top{vertical-align:top}
th.valign-bottom,td.valign-bottom{vertical-align:bottom}
th.valign-middle,td.valign-middle{vertical-align:middle}
table thead th,table tfoot th{font-weight:bold}
tbody tr th{background:#f7f8f7}
tbody tr th,tbody tr th p,tfoot tr th,tfoot tr th p{color:rgba(0,0,0,.8);font-weight:bold}
p.tableblock>code:only-child{background:none;padding:0}
p.tableblock{font-size:1em}
ol{margin-left:1.75em}
ul li ol{margin-left:1.5em}
dl dd{margin-left:1.125em}
dl dd:last-child,dl dd:last-child>:last-child{margin-bottom:0}
li p,ul dd,ol dd,.olist .olist,.ulist .ulist,.ulist .olist,.olist .ulist{margin-bottom:.625em}
ul.checklist,ul.none,ol.none,ul.no-bullet,ol.no-bullet,ol.unnumbered,ul.unstyled,ol.unstyled{list-style-type:none}
ul.no-bullet,ol.no-bullet,ol.unnumbered{margin-left:.625em}
ul.unstyled,ol.unstyled{margin-left:0}
li>p:empty:only-child::before{content:"";display:inline-block}
ul.checklist>li>p:first-child{margin-left:-1em}
ul.checklist>li>p:first-child>.fa-square-o:first-child,ul.checklist>li>p:first-child>.fa-check-square-o:first-child{width:1.25em;font-size:.8em;position:relative;bottom:.125em}
ul.checklist>li>p:first-child>input[type=checkbox]:first-child{margin-right:.25em}
ul.inline{display:flex;flex-flow:row wrap;list-style:none;margin:0 0 .625em -1.25em}
ul.inline>li{margin-left:1.25em}
.unstyled dl dt{font-weight:400;font-style:normal}
ol.arabic{list-style-type:decimal}
ol.decimal{list-style-type:decimal-leading-zero}
ol.loweralpha{list-style-type:lower-alpha}
ol.upperalpha{list-style-type:upper-alpha}
ol.lowerroman{list-style-type:lower-roman}
ol.upperroman{list-style-type:upper-roman}
ol.lowergreek{list-style-type:lower-greek}
.hdlist>table,.colist>table{border:0;background:none}
.hdlist>table>tbody>tr,.colist>table>tbody>tr{background:none}
td.hdlist1,td.hdlist2{vertical-align:top;padding:0 .625em}
td.hdlist1{font-weight:bold;padding-bottom:1.25em}
td.hdlist2{word-wrap:anywhere}
.literalblock+.colist,.listingblock+.colist{margin-top:-.5em}
.colist td:not([class]):first-child{padding:.4em .75em 0;line-height:1;vertical-align:top}
.colist td:not([class]):first-child img{max-width:none}
.colist td:not([class]):last-child{padding:.25em 0}
.thumb,.th{line-height:0;display:inline-block;border:4px solid #fff;box-shadow:0 0 0 1px #ddd}
.imageblock.left{margin:.25em .625em 1.25em 0}
.imageblock.right{margin:.25em 0 1.25em .625em}
.imageblock>.title{margin-bottom:0}
.imageblock.thumb,.imageblock.th{border-width:6px}
.imageblock.thumb>.title,.imageblock.th>.title{padding:0 .125em}
.image.left,.image.right{margin-top:.25em;margin-bottom:.25em;display:inline-block;line-height:0}
.image.left{margin-right:.625em}
.image.right{margin-left:.625em}
a.image{text-decoration:none;display:inline-block}
a.image object{pointer-events:none}
sup.footnote,sup.footnoteref{font-size:.875em;position:static;vertical-align:super}
sup.footnote a,sup.footnoteref a{text-decoration:none}
sup.footnote a:active,sup.footnoteref a:active{text-decoration:underline}
#footnotes{padding-top:.75em;padding-bottom:.75em;margin-bottom:.625em}
#footnotes hr{width:20%;min-width:6.25em;margin:-.25em 0 .75em;border-width:1px 0 0}
#footnotes .footnote{padding:0 .375em 0 .225em;line-height:1.3334;font-size:.875em;margin-left:1.2em;margin-bottom:.2em}
#footnotes .footnote a:first-of-type{font-weight:bold;text-decoration:none;margin-left:-1.05em}
#footnotes .footnote:last-of-type{margin-bottom:0}
#content #footnotes{margin-top:-.625em;margin-bottom:0;padding:.75em 0}
div.unbreakable{page-break-inside:avoid}
.big{font-size:larger}
.small{font-size:smaller}
.underline{text-decoration:underline}
.overline{text-decoration:overline}
.line-through{text-decoration:line-through}
.aqua{color:#00bfbf}
.aqua-background{background:#00fafa}
.black{color:#000}
.black-background{background:#000}
.blue{color:#0000bf}
.blue-background{background:#0000fa}
.fuchsia{color:#bf00bf}
.fuchsia-background{background:#fa00fa}
.gray{color:#606060}
.gray-background{background:#7d7d7d}
.green{color:#006000}
.green-background{background:#007d00}
.lime{color:#00bf00}
.lime-background{background:#00fa00}
.maroon{color:#600000}
.maroon-background{background:#7d0000}
.navy{color:#000060}
.navy-background{background:#00007d}
.olive{color:#606000}
.olive-background{background:#7d7d00}
.purple{color:#600060}
.purple-background{background:#7d007d}
.red{color:#bf0000}
.red-background{background:#fa0000}
.silver{color:#909090}
.silver-background{background:#bcbcbc}
.teal{color:#006060}
.teal-background{background:#007d7d}
.white{color:#bfbfbf}
.white-background{background:#fafafa}
.yellow{color:#bfbf00}
.yellow-background{background:#fafa00}
span.icon>.fa{cursor:default}
a span.icon>.fa{cursor:inherit}
.admonitionblock td.icon [class^="fa icon-"]{font-size:2.5em;text-shadow:1px 1px 2px rgba(0,0,0,.5);cursor:default}
.admonitionblock td.icon .icon-note::before{content:"\f05a";color:#19407c}
.admonitionblock td.icon .icon-tip::before{content:"\f0eb";text-shadow:1px 1px 2px rgba(155,155,0,.8);color:#111}
.admonitionblock td.icon .icon-warning::before{content:"\f071";color:#bf6900}
.admonitionblock td.icon .icon-caution::before{content:"\f06d";color:#bf3400}
.admonitionblock td.icon .icon-important::before{content:"\f06a";color:#bf0000}
.conum[data-value]{display:inline-block;color:#fff!important;background:rgba(0,0,0,.8);border-radius:50%;text-align:center;font-size:.75em;width:1.67em;height:1.67em;line-height:1.67em;font-family:"Open Sans","DejaVu Sans",sans-serif;font-style:normal;font-weight:bold}
.conum[data-value] *{color:#fff!important}
.conum[data-value]+b{display:none}
.conum[data-value]::after{content:attr(data-value)}
pre .conum[data-value]{position:relative;top:-.125em}
b.conum *{color:inherit!important}
.conum:not([data-value]):empty{display:none}
dt,th.tableblock,td.content,div.footnote{text-rendering:optimizeLegibility}
h1,h2,p,td.content,span.alt,summary{letter-spacing:-.01em}
p strong,td.content strong,div.footnote strong{letter-spacing:-.005em}
p,blockquote,dt,td.content,span.alt,summary{font-size:1.0625rem}
p{margin-bottom:1.25rem}
.sidebarblock p,.sidebarblock dt,.sidebarblock td.content,p.tableblock{font-size:1em}
.exampleblock>.content{background:#fffef7;border-color:#e0e0dc;box-shadow:0 1px 4px #e0e0dc}
.print-only{display:none!important}
@page{margin:1.25cm .75cm}
@media print{*{box-shadow:none!important;text-shadow:none!important}
html{font-size:80%}
a{color:inherit!important;text-decoration:underline!important}
a.bare,a[href^="#"],a[href^="mailto:"]{text-decoration:none!important}
a[href^="http:"]:not(.bare)::after,a[href^="https:"]:not(.bare)::after{content:"(" attr(href) ")";display:inline-block;font-size:.875em;padding-left:.25em}
abbr[title]{border-bottom:1px dotted}
abbr[title]::after{content:" (" attr(title) ")"}
pre,blockquote,tr,img,object,svg{page-break-inside:avoid}
thead{display:table-header-group}
svg{max-width:100%}
p,blockquote,dt,td.content{font-size:1em;orphans:3;widows:3}
h2,h3,#toctitle,.sidebarblock>.content>.title{page-break-after:avoid}
#header,#content,#footnotes,#footer{max-width:none}
#toc,.sidebarblock,.exampleblock>.content{background:none!important}
#toc{border-bottom:1px solid #dddddf!important;padding-bottom:0!important}
body.book #header{text-align:center}
body.book #header>h1:first-child{border:0!important;margin:2.5em 0 1em}
body.book #header .details{border:0!important;display:block;padding:0!important}
body.book #header .details span:first-child{margin-left:0!important}
body.book #header .details br{display:block}
body.book #header .details br+span::before{content:none!important}
body.book #toc{border:0!important;text-align:left!important;padding:0!important;margin:0!important}
body.book #toc,body.book #preamble,body.book h1.sect0,body.book .sect1>h2{page-break-before:always}
.listingblock code[data-lang]::before{display:block}
#footer{padding:0 .9375em}
.hide-on-print{display:none!important}
.print-only{display:block!important}
.hide-for-print{display:none!important}
.show-for-print{display:inherit!important}}
@media amzn-kf8,print{#header>h1:first-child{margin-top:1.25rem}
.sect1{padding:0!important}
.sect1+.sect1{border:0}
#footer{background:none}
#footer-text{color:rgba(0,0,0,.6);font-size:.9em}}
@media amzn-kf8{#header,#content,#footnotes,#footer{padding:0}}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.3/styles/github.min.css">
<!-- Google Ads. -->
<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6590816372910687"
     crossorigin="anonymous"></script> -->

<!-- We could also include Javascript
     for example in this document. -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
     var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
     (function(){
     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
     s1.async=true;
     s1.src='https://embed.tawk.to/633f134c37898912e96d3fbe/1gen66p79';
     s1.charset='UTF-8';
     s1.setAttribute('crossorigin','*');
     s0.parentNode.insertBefore(s1,s0);
     })();
     </script>
<!--End of Tawk.to Script-->

<!--Start of MailChimp Subscribe Pop Up Script-->
<!-- <script id="mcjs">!
     function(c,h,i,m,p){
          m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)
     }(document,"script","https://chimpstatic.com/mcjs-connected/js/users/71dd098dcbd6c5501a0a533d3/876294ece12132fcfb943798d.js");
     </script> -->
<!--End of MailChimp Subscribe Pop Up Script-->

  <!-- add the applause button style & script (head) -->
  <!-- <link rel="stylesheet" href="applause-button.css" />
  <script src="applause-button.js"></script> -->

<!--Start commentics comments-->
<!-- <script src="http://siliconwit.com/comments/embed.js"></script> -->

<!-- Change some CSS for TOC -->
<style>
/* Change CSS overflow for table of contents. */
#toc.toc2, #toc { overflow: scroll; }

/* Change styling for footer text. */
/* .footer-text { color: rgba(255,255,255,.8); background: rgba(0,0,0,.8); text-align: center;} */

.footer-text {
    background: rgba(0,0,0,.8);
    color: rgba(255,255,255,.8);
    padding: 1.25em;
    margin: 0;
    font-family: "Noto Serif","DejaVu Serif",serif;
    font-size: 100%;
    text-align: center;
    line-height: 1;
    position: relative;
    cursor: auto;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    word-wrap: anywhere;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

/* Subscribe button CSS */
.button-3 {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  margin:5px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #2c974b;
}

.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}

</style>

</head>
<body class="book toc2 toc-left">
<div id="header">
<h1>Solid Mechanics: Theory and Examples</h1>
<div class="details">
<span id="author" class="author">Dr. Sam Macharia</span><br>
<span id="email" class="email"><a href="https://orcid.org/0000-0002-7326-7502" class="bare">https://orcid.org/0000-0002-7326-7502</a></span><br>
<span id="author2" class="author">Home</span><br>
<span id="email2" class="email"><a href="https://SiliconWit.com" class="bare">https://SiliconWit.com</a></span><br>
</div>
<div id="toc" class="toc2">
<div id="toctitle">Table of Contents</div>
<ul class="sectlevel1">
<li><a href="#_simple_stress_and_strain">1. Simple Stress and Strain</a>
<ul class="sectlevel2">
<li><a href="#_loading">1.1. Loading</a></li>
<li><a href="#_direct_or_normal_stress_sigma">1.2. Direct or Normal Stress (\(\sigma\))</a></li>
<li><a href="#_direct_or_normal_strain_epsilon">1.3. Direct or Normal Strain (\(\epsilon\))</a></li>
<li><a href="#_elastic_materials_hookes_law_f_ke">1.4. Elastic Materials (Hooke&#8217;s Law, \(F = ke\))</a></li>
<li><a href="#_modulus_of_elasticity_youngs_modulus_e">1.5. Modulus of Elasticity (Young&#8217;s Modulus, \(E\))</a></li>
<li><a href="#_tensile_test">1.6. Tensile Test</a></li>
<li><a href="#_poissons_ratio_v">1.7. Poisson&#8217;s Ratio (\(v\))</a></li>
<li><a href="#_modulus_of_rigidity_g">1.8. Modulus of Rigidity (\(G\))</a></li>
<li><a href="#_a_bar_with_various_cross_sections">1.9. <span class="icon"><i class="fa fa-info-circle"></i></span> A bar with various cross-sections</a></li>
<li><a href="#_a_bored_circular_cross_section">1.10. <span class="icon"><i class="fa fa-info-circle"></i></span> A bored circular cross-section</a></li>
<li><a href="#_a_stressed_coupling">1.11. <span class="icon"><i class="fa fa-info-circle"></i></span> A stressed coupling</a></li>
<li><a href="#circular-taper">1.12. <span class="icon"><i class="fa fa-info-circle"></i></span> Extension of tapered bar</a></li>
<li><a href="#_error_of_using_mean_diameter">1.13. <span class="icon"><i class="fa fa-info-circle"></i></span> Error of using mean diameter</a></li>
<li><a href="#_rectangular_tapered_bar_assignment">1.14. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Rectangular tapered bar <mark>ASSIGNMENT</mark></a></li>
<li><a href="#_load_extension_graph_assignment">1.15. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Load-extension graph <mark>ASSIGNMENT</mark></a></li>
</ul>
</li>
<li><a href="#_compound_bars">2. Compound Bars</a>
<ul class="sectlevel2">
<li><a href="#_a_concrete_column_with_steel_reinforcement">2.1. <span class="icon"><i class="fa fa-info-circle"></i></span> A concrete column with steel reinforcement</a></li>
<li><a href="#_encased_composite_bar">2.2. <span class="icon"><i class="fa fa-info-circle"></i></span> Encased composite bar</a></li>
<li><a href="#_a_steel_rod_and_brass_bush_assignment">2.3. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> A steel rod and brass bush <mark>ASSIGNMENT</mark></a></li>
<li><a href="#_buttwelded_stanchion_assignment">2.4. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Buttwelded stanchion <mark>ASSIGNMENT</mark></a></li>
</ul>
</li>
<li><a href="#_thermal_stresses_and_strains">3. Thermal Stresses and Strains</a>
<ul class="sectlevel2">
<li><a href="#_stress_not_to_be_exceeded">3.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Stress not to be exceeded</a></li>
<li><a href="#_stress_when_temperature_falls">3.2. <span class="icon"><i class="fa fa-info-circle"></i></span> Stress when temperature falls</a></li>
<li><a href="#_thermal_stress_of_a_tapered_bar">3.3. <span class="icon"><i class="fa fa-info-circle"></i></span> Thermal stress of a tapered bar</a></li>
<li><a href="#_stress_strain_and_modulus_of_elasticity_assignment">3.4. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Stress, strain, and modulus of elasticity <mark>ASSIGNMENT</mark></a></li>
<li><a href="#_stress_when_temperature_rises_assignment">3.5. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Stress when temperature rises <mark>ASSIGNMENT</mark></a></li>
</ul>
</li>
<li><a href="#_tortion_of_circular_shafts">4. Tortion of Circular Shafts</a>
<ul class="sectlevel2">
<li><a href="#_twisting_solid_cylinder">4.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Twisting solid cylinder</a></li>
</ul>
</li>
<li><a href="#_references">References</a></li>
</ul>
</div>
</div>
<div id="content">
<div id="preamble">
<div class="sectionbody">
<!-- Website logo and Subscribe button -->

<div style="display: flex; justify-content: flex-end">
    <div>
<!-- cellspacing="0" cellpadding="0"  -->
<table border="1" frame="void" rules="all">
    <tr>
      <td class="first">
        <a href="https://siliconwit.com/">
            <img alt="SiliconWit" src="SiWit.png" width="50" height="50">
        </a>
      </td>
      <td class="second">
        <button class="button-3" onclick="location.href='https://50312631.sibforms.com/serve/MUIEAMNpGV92xSPcDr_46NegYWAVvHPghmb-X7Mk-vXlVoMCv9HHTuNuahdOqK57NP8x4zxM22qPmxUgAdBtg4XOOcWwqQzEDR3BrSfpzO2nagCGGlV1WXEBTOvf90PUd6UUMxZ1PmgLpZ4w0pXK0Iqg5brcEwooD91t2lP1hZd7LUtYh4SVBBKHJ2il_RHD5zB4dhSVuMbiVVSb';"> 
            Subscribe to SiliconWit.com</button>
      </td>
    </tr>
  </table>
    </div>
</div>  

  <!-- <div style="display: flex; justify-content: flex-end">
    <div>I'm on the right</div>
  </div> -->
<div class="paragraph">
<p>Mechanics of solids may also go by the names mechanics of materials or strength of materials.</p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_simple_stress_and_strain">1. Simple Stress and Strain</h2>
<div class="sectionbody">
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
This section covers idealized simple stress and strain. In more complex cases, some of these simplifications may not apply.
</td>
</tr>
</table>
</div>
<div class="sect2">
<h3 id="_loading">1.1. Loading</h3>
<div class="paragraph">
<p>Components of engineering structures or mechanisms experience various forces. For example, the cylindrical bar below is used in a lifting mechanism and so it is subjected to <strong>tension</strong> force along the axis.</p>
</div>
<div class="paragraph">
<p>A member of a mechanism may experience loading in one of the following ways.</p>
</div>
<div class="paragraph">
<p>(a) Static, dead, or non-fluctuating loads e.g. force due to gravity<br>
(b) Live loads e.g. train on the railway<br>
(c) Impact or shock loads e.g. hammering<br>
(d) Fatigue, fluctuating, or altering loads e.g. repeated loaded swivel, crack propagation</p>
</div>
</div>
<div class="sect2">
<h3 id="_direct_or_normal_stress_sigma">1.2. Direct or Normal Stress (\(\sigma\))</h3>
<div class="paragraph">
<p>This is when a uniform-structured member or a bar is subjected to <mark><strong>uniform</strong> tension or compression</mark>.</p>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[\sigma\ (\text{stress}) = \frac{F\ (\text{load})}{A\ (\text{area})}\ \frac{N}{m^2}\]
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
<div class="sect2">
<h3 id="_direct_or_normal_strain_epsilon">1.3. Direct or Normal Strain (\(\epsilon\))</h3>
<div class="paragraph">
<p>This is a dimensionless measure of a change in length of a member, after it has been subjected to tension or compression.</p>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[\epsilon\ (\text{strain}) = \frac{\Delta L\ (\text{change in length})}{L\ (\text{original length})}\]
</div>
</div>
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>Strain may be expressed as a percentage, \(\epsilon = \frac{\Delta L}{L} \times 100 \%\).
Tensile stress and strain are considered positive, while compressive ones are considered negative.</p>
</div>
</div>
<div class="sect2">
<h3 id="_elastic_materials_hookes_law_f_ke">1.4. Elastic Materials (Hooke&#8217;s Law, \(F = ke\))</h3>
<div class="paragraph">
<p>A member is said to be elastic or obey Hooke&#8217;s law if it returns to its original length when the load is withdrawn. In this case, the stress is proportional to strain.</p>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[\frac{\sigma}{\epsilon} = constant\]
</div>
</div>
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>Common classification of materials:</p>
</div>
<div class="paragraph">
<p>Homogeneous material&#8201;&#8212;&#8201;uniform structure without any flaws or discontinuities e.g. steel<br>
Inhomogeneous material&#8201;&#8212;&#8201;the structure varies from point to point e.g. concrete, some cast iron<br>
Isotropic&#8201;&#8212;&#8201;uniform properties throughout in all directions<br>
Anisotropic&#8201;&#8212;&#8201;varying properties<br>
Othotropic&#8201;&#8212;&#8201;different properties in different planes e.g. wood, some composites</p>
</div>
<div class="paragraph">
<p>Here, we assume homogeneous materials with isotropic properties.</p>
</div>
</div>
<div class="sect2">
<h3 id="_modulus_of_elasticity_youngs_modulus_e">1.5. Modulus of Elasticity (Young&#8217;s Modulus, \(E\))</h3>
<div class="paragraph">
<p>The constant derived above, within which Hooke&#8217;s law applies, is referred to as the <em>modulus of elasticity</em> or the <em>Young&#8217;s modulus</em>, <strong>E</strong>.</p>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[\frac{\sigma}{\epsilon} = E\]
</div>
</div>
<div class="paragraph">
<p>\(E = \frac{F}{A}/ \frac{\Delta L}{L} = \frac{FL}{A \Delta L}\)</p>
</div>
</td>
</tr>
</table>
</div>
<div class="paragraph">
<p>The modulus of elasticity is assumed to be the same, both in tension or in compression. Since its value is large for most engineering materials, \(~ \times 10^9 N/m^2\), the strain will be small, \(~ 0.3\%\). Usually, the deformations are typically small with respect to the original dimension.</p>
</div>
</div>
<div class="sect2">
<h3 id="_tensile_test">1.6. Tensile Test</h3>
<div class="paragraph">
<p>The modulus of elasticity is determined by carrying out a standard test as shown in the figure below. In this test, a circular bar of a uniform cross-section is subjected to a gradually increasing tensile load until failure occurs. The <mark>change in the <strong>gauge length</strong></mark> is recorded as the loading operation continues.</p>
</div>
<div id="img-tensileTest" class="imageblock text-left">
<div class="content">
<a class="image" href="https://siliconwit.com/solid-mechanics"><img src="data:image/png;base64," alt="tensileTest" width="100%"></a>
</div>
<div class="title">Figure 1. Tensile test.</div>
</div>
<div class="paragraph">
<p><mark>Origin to point <strong>A</strong>:</mark> <em>Hooke&#8217;s law</em> is obeyed. Stress is proportional to strain.<br>
<mark>At point <strong>A</strong>:</mark> <em>limit of proportionality</em><br>
<mark>Between points <strong>A</strong> and <strong>B</strong>:</mark> the material may still be elastic but Hooke&#8217;s law is not obeyed.<br>
<mark>At point <strong>B</strong>:</mark> <em>elastic limit</em><br>
In most practical cases, points <strong>A</strong> and <strong>B</strong> are coincident.<br>
<mark>Beyond point <strong>B</strong>:</mark> <em>plastic deformation</em><br>
Strains are not totally recoverable and permanent deformations are recorded when load is removed.<br>
<mark>At point <strong>C</strong>:</mark> <em>upper yield point</em><br>
<mark>At point <strong>D</strong>:</mark> <em>lower yield point</em><br>
A rapid increase in strain occurs without a corresponding increase in stress.<br>
<mark>Between points <strong>E</strong> and <strong>F</strong>:</mark> <em>necking</em> occurs<br>
The stress reaches the maximum value, the <em>ultimate tensile strength</em>.<br>
<mark>At point <strong>F</strong>:</mark> the specimen breaks</p>
</div>
<div class="ulist">
<ul>
<li>
<p>The <strong>ductility</strong> is the capacity of a material to allow large plastic deformations.</p>
</li>
<li>
<p>For some materials, say, non-ferrous and high-carbon steel, the difference between points C and D cannot be detected. In such cases, a <strong>proof stress</strong> is used to show the onset of plastic strain.</p>
</li>
</ul>
</div>
</div>
<div class="sect2">
<h3 id="_poissons_ratio_v">1.7. Poisson&#8217;s Ratio (\(v\))</h3>
<div class="paragraph">
<p>When a bar is subjected to a tension load, it experiences an increase in length, \(\Delta L\), giving a longitudinal strain in the bar, \(\epsilon_{Long}\).</p>
</div>
<div class="paragraph">
<p>\(\epsilon_{Long} = \frac{\Delta L}{L}\)</p>
</div>
<div class="paragraph">
<p>The breath, \(b\), and the depth, \(d\), of the bar will also reduce, thereby altering the lateral dimensions of the bar. The lateral strain, \(\epsilon_{Lat}\), can be given by the following equation.</p>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="paragraph">
<p>\(\epsilon_{Lat} = - \frac{\Delta b}{b} = - \frac{\Delta d}{d}\)</p>
</div>
<div class="stemblock">
<div class="content">
\[v\ (\text{Poisson's ratio}) = \frac{\epsilon_{Lat}}{\epsilon_{Long}} = - \frac{\Delta d}{d} \times \frac{L}{\Delta L}\]
</div>
</div>
<div class="paragraph">
<p>\(\epsilon_{Long} = \frac{\sigma_{Long}}{E} = \frac{\sigma}{E}\)</p>
</div>
<div class="stemblock">
<div class="content">
\[\epsilon_{Lat} = v \times \frac{\sigma}{E}\]
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
<div class="sect2">
<h3 id="_modulus_of_rigidity_g">1.8. Modulus of Rigidity (\(G\))</h3>
<div class="sect3">
<h4 id="_shear_stress_tau">1.8.1. Shear Stress (\(\tau\))</h4>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[\tau\ (\text{shear stress}) = \frac{F\ (\text{shear load})}{A\ (\text{area resisting shear})}\]
</div>
</div>
<div class="stemblock">
<div class="content">
\[\tau\ (\text{in double shear stress}) = \frac{F}{2 \times A }\]
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
<div class="sect3">
<h4 id="_shear_strain_gamma">1.8.2. Shear Strain (\(\gamma\))</h4>
<div class="stemblock">
<div class="content">
\[\gamma = \frac{\Delta L}{L}\]
</div>
</div>
<div class="ulist">
<ul>
<li>
<p>The <strong>modulus of rigidity</strong>, \(G\), or <strong>shear modulus</strong> is comparable to modulus of elasticity and it is calculated as follows.</p>
</li>
</ul>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[G = \frac{\tau}{\gamma} = \text{constant}\]
</div>
</div>
</td>
</tr>
</table>
</div>
<div class="admonitionblock important">
<table>
<tr>
<td class="icon">
<i class="fa icon-important" title="Important"></i>
</td>
<td class="content">
<div class="ulist">
<ul>
<li>
<p>Before attempting a question, make sure you understand the fundamental concept. Draw sketches where necessary. Make sure you <mark>derive your equations</mark> correctly, then substitute the values. This is useful in preparing a general algorithm and reducing approximation errors.</p>
</li>
<li>
<p>Your answers should be in SI units and scientific notation. Use the following form <mark>\(p.qrs \times 10^t\) <code>units</code></mark>. Where \(p,q,r,s\) is a number between \(0-9\), \(t\) is a signed integer, and <code>units</code> is the relevant SI units. This is useful in establishing a quick objective meaning of size/scale.</p>
</li>
</ul>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
<div class="sect2">
<h3 id="_a_bar_with_various_cross_sections">1.9. <span class="icon"><i class="fa fa-info-circle"></i></span> A bar with various cross-sections</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A sectional bar of \(E = 210\ GN/m^2\) is subjected to an axial tensile load of \(F_1 = F_2 = 25\ kN\). The circular section \(C_{s1}\) has a diameter of \(25\ mm\). A square cross-section of dimension \(C_{s2} = 40\ mm\), and circular section \(C_{s3} = 20\ mm\) in diameter. \(L_{1} = 200\ mm\), \(L_{2} = 110\ mm\), \(L_{3} = 450\ mm\)</p>
</div>
<div class="paragraph">
<p>What is <strong>the stress</strong> in each section and <strong>the total extension</strong> of the sectional bar?</p>
</div>
<div id="img-sectionalBar" class="imageblock left text-left">
<div class="content">
<a class="image" href="https://siliconwit.com/solid-mechanics"><img src="data:image/png;base64,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" alt="sectionalBar" width="100%"></a>
</div>
<div class="title">Figure 2. Sectional bar.</div>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>stress in each section</em><br>
\(\sigma = \frac{F}{A}\)<br>
\(\sigma_{s1} = \frac{F}{\pi \times \big( \frac{D_1}{2} \big)^2}\)</p>
</div>
<div class="paragraph">
<p>\(\sigma_{s2} = \frac{F}{L_2^2}\)</p>
</div>
<div class="paragraph">
<p>\(\sigma_{s3} = \frac{F}{\pi \times \big( \frac{D_3}{2} \big)^2}\)</p>
</div>
<div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>total extension (\(\Delta L\))</em><br>
\(\epsilon = \frac{\sigma}{E}\)<br>
\(\epsilon = \frac{\Delta L}{L}\)<br>
\(\Delta L = \Delta L_{s1} + \Delta L_{s2} + \Delta L_{s3}\)<br>
\(\Delta L = \frac{ \sigma_{s1} L_1 + \sigma_{s2} L_2 + \sigma_{s3} L_3}{E}\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_a_bored_circular_cross_section">1.10. <span class="icon"><i class="fa fa-info-circle"></i></span> A bored circular cross-section</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="ulist">
<ul>
<li>
<p>A \(30\ mm\) diameter bar is subjected to an axial tensile load of \(115\ kN\). Under the action of this load a \(200\ mm\) gauge length is found to extend \(0.15 \times 10^{-3}\ mm\). Determine the modulus of elasticity for the bar material.</p>
</li>
<li>
<p>To reduce weight whilst keeping the external diameter constant, the bar is bored axially to produce a cylinder of uniform thickness, what is the maximum diameter of bore possible given that the maximum allowable stress is \(245\ MN/m^2\)? The load can be assumed to remain constant at \(115\ kN\).</p>
</li>
<li>
<p>What will be the change in the outside diameter of the bar under the limiting stress quoted above? (\(E = 210\ GN/m^2\) and \(v =\ 0.3\))</p>
</li>
</ul>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>modulus of elasticity</em><br>
\(\frac{\sigma}{\epsilon} = E\)<br>
\(\epsilon = \frac{\Delta L}{L}\)<br>
\(E = \sigma \frac{L}{\Delta L}\)<br>
\(E = \frac{F}{A} \times \frac{L}{\Delta L}\)<br>
\(E = \frac{F}{\pi \times \big(\frac{D}{2}\big)^2} \times \frac{L}{\Delta L}\)</p>
</div>
<div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>maximum diameter of bore</em><br>
\(\sigma = \frac{F}{A}\)<br>
\(A = \pi \times \big( \frac{D}{2} \big)^2 - \pi \times \big( \frac{d}{2} \big)^2\)<br>
\(A = \frac{\pi}{4} \times (D^2 - d^2)\)<br>
\((D^2 - d^2) = \frac{F}{\sigma} \times \frac{4}{\pi}\)<br>
\(d = \sqrt{D^2 - \big( \frac{F}{\sigma} \times \frac{4}{\pi} \big)}\)</p>
</div>
<div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>change in the outside diameter</em><br>
\(\epsilon = v \times \frac{\sigma}{E}\)<br>
\(\frac{\Delta d}{d} = v \times \frac{\sigma}{E}\)<br>
\(\Delta d = v \times \frac{\sigma}{E} \times d\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_a_stressed_coupling">1.11. <span class="icon"><i class="fa fa-info-circle"></i></span> A stressed coupling</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>The coupling shown below is constructed from steel of a rectangular cross-section and is designed to transmit a tensile force of \(50\ kN\). If the bolt is of \(14.5\ mm\) diameter calculate:</p>
</div>
<div class="paragraph">
<p>\(F = F_1 = F_2 = 50 kN\)<br>
\(F_3 = F_4 = 25 kN\)<br>
\(W_1 = 55 mm\)<br>
\(T_1 = T_2 = T_3 = 7 mm\)</p>
</div>
<div class="paragraph">
<p>(a) the shear stress in the bolt;<br>
(b) the direct stress in the plate;<br>
(c) the direct stress in the forked end of the coupling.</p>
</div>
<div id="img-coupling" class="imageblock left text-left">
<div class="content">
<a class="image" href="https://siliconwit.com/solid-mechanics"><img src="data:image/png;base64,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" alt="coupling" width="100%"></a>
</div>
<div class="title">Figure 3. Coupling plate.</div>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>shear stress in the bolt</em><br>
\(\tau = \frac{F}{A}\)<br>
\(\tau = \frac{F}{2 \times A}\)<br>
\(\tau = \frac{4 \times F}{2 \times \pi D^2}\)</p>
</div>
<div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>direct stress in the plate</em><br>
\(\sigma = \frac{F}{A}\)</p>
</div>
<div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>direct stress in the forked end</em><br>
\(\sigma = \frac{F}{A}\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="circular-taper">1.12. <span class="icon"><i class="fa fa-info-circle"></i></span> Extension of tapered bar</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>Derive an expression for the total extension of the tapered bar of the circular cross-section shown below when it is subjected to an axial tensile load \(W\).</p>
</div>
<div id="img-taperedBar" class="imageblock left text-left">
<div class="content">
<a class="image" href="https://siliconwit.com/solid-mechanics"><img src="data:image/png;base64,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" alt="taperedBar" width="100%"></a>
</div>
<div class="title">Figure 4. Tapered bar.</div>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> Consider a very small length \(dx\) with diameter \(P\), experiencing the tensile force of \(W\), and then integrate over the whole length, \(L\).</p>
</div>
<div class="paragraph">
<p>\(\Delta L = \frac{\sigma}{E} \times L\)<br>
\(\Delta L = \frac{\sigma}{E} \times dx\)<br>
\(\Delta L = \frac{W}{AE} \times dx\)<br>
\(\Delta L = \frac{W}{\frac{\pi}{4} \times P^2 \times E} \times dx\)</p>
</div>
<div id="img-taperedBarSec" class="imageblock left text-left">
<div class="content">
<a class="image" href="https://siliconwit.com/solid-mechanics"><img src="data:image/png;base64," alt="taperedBarSec" width="100%"></a>
</div>
<div class="title">Figure 5. Tapered bar section.</div>
</div>
<div class="paragraph">
<p>\(P = (2 q)+d\)<br>
\(\frac{q}{x} = \frac{D-d}{2}/L\)<br>
\(q = \frac{(D-d)}{2L} \times x\)<br>
\(P = \frac{(D-d)}{L} x + d\)<br>
Letting \(k = \frac{(D-d)}{L}\), \(P = d + kx\)<br>
\(\Delta L = \frac{W}{\frac{\pi}{4} \times (d + kx)^2 \times E} dx\)<br>
\(\Delta L = \int_{0}^{L} \frac{4W}{\pi \times (d + kx)^2 \times E} \,dx\)<br>
\(\Delta L = \frac{4W}{\pi E} \int_{0}^{L} (d + kx)^{-2} \,dx\)<br>
Let \(u = d + kx\); \(\frac{du}{dx} = k\); \(dx = \frac{du}{k}\)<br>
\(\Delta L = \frac{4W}{k \pi E} \int_{0}^{L} (u)^{-2} \,du\)<br>
\(\Delta L = \frac{4W}{k \pi E} \begin{bmatrix}
-(u)^{-1}
\end{bmatrix} _{0}^{L}\)<br>
\(\Delta L = \frac{4W}{k \pi E} \begin{bmatrix}
-(d + kx)^{-1}
\end{bmatrix} _{0}^{L}\)<br>
\(\Delta L = \frac{4W}{k \pi E} \biggr( (\frac{-1}{d + kL}) - (\frac{-1}{d})\biggr)\)<br>
\(\Delta L = \frac{4W}{k \pi E} \biggr( \frac{1}{d} - \frac{1}{d + kL} \biggr)\)<br>
\(\Delta L = \frac{4W}{k \pi E} \biggr( \frac{kL}{d(d + kL)} \biggr)\)<br>
\(\Delta L = \frac{4W}{\pi E} \times \frac{L}{d(d + \Big( \frac{(D-d)}{L} \Big) \times L)}\)<br>
\(\Delta L = \frac{4WL}{\pi E d D}\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_error_of_using_mean_diameter">1.13. <span class="icon"><i class="fa fa-info-circle"></i></span> Error of using mean diameter</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>The mean diameter is used in calculating the modulus of elasticity, \(E\), of a bar tapered from \((D + a)\) diameter to \((D-a)\) diameter. Show that the error involved in calculating \(E\) is \(\big( \frac{10a}{D} \big)^2 \%\).</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> \(E\) for a tapered circular bar should be derived similar to <a href="#circular-taper"><span class="icon"><i class="fa fa-info-circle"></i></span> Extension of tapered bar</a> :</p>
</div>
<div class="paragraph">
<p>\(\Delta L = \frac{4WL}{\pi E d D}\)<br>
\(E = \frac{4WL}{\pi \Delta L d D}\)<br>
\(E = \frac{4WL}{\pi \Delta L (D-a) (D+a)}\)<br>
\(E = \frac{4WL}{\pi \Delta L (D^2-a^2)}\)<br>
But when mean diameter, \(D_m = \frac{(D-a)+(D+a)}{2} = D\), is used instead,<br>
\(\Delta L = \frac{WL}{AE_m}\)<br>
\(\Delta L = \frac{WL}{(\frac{\pi}{4}D^2)E_m}\)<br>
\(E_m = \frac{4WL}{\pi \Delta L (D^2)}\)<br>
\(\% error = \frac{E-E_m}{E} \times 100\)<br>
\(\% error = \frac{\big( \frac{4WL}{\pi \Delta L (D^2-a^2)} \big) - \big( \frac{4WL}{\pi \Delta L (D^2)} \big)} {\frac{4WL}{\pi \Delta L (D^2-a^2)}} \times 100\)<br>
\(\% error = \frac{\big( \frac{1}{ (D^2-a^2)} \big) - \big( \frac{1}{D^2} \big)} {\frac{1}{(D^2-a^2)}} \times 100\)<br>
\(\% error = \big( \frac{D^2 - (D^2 - a^2)}{ D^2(D^2-a^2)} \times (D^2-a^2) \big) \times 100\)<br>
\(\% error = \Big( \frac{10 a}{D} \Big)^2 \%\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_rectangular_tapered_bar_assignment">1.14. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Rectangular tapered bar <mark>ASSIGNMENT</mark></h3>
<div class="admonitionblock warning">
<table>
<tr>
<td class="icon">
<i class="fa icon-warning" title="Warning"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A brass plate of uniform thickness \(7\ mm\) and length \(550\ mm\), varies in width from \(100\ mm\) to \(185\ mm\) and is subjected to a tension load of \(5\ kN\). Find the elongation of the bar. \(E\) for brass \(= 82\ GPa\).</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-flag"></i></span> Please attempt this assignment.</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_load_extension_graph_assignment">1.15. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Load-extension graph <mark>ASSIGNMENT</mark></h3>
<div class="admonitionblock warning">
<table>
<tr>
<td class="icon">
<i class="fa icon-warning" title="Warning"></i>
</td>
<td class="content">
<div class="paragraph">
<p>During a tensile test on a specimen the following results were obtained:</p>
</div>
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 12.5%;">
<col style="width: 12.5%;">
<col style="width: 12.5%;">
<col style="width: 12.5%;">
<col style="width: 12.5%;">
<col style="width: 12.5%;">
<col style="width: 12.5%;">
<col style="width: 12.5%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Load (kN)</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">15</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">30</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">40</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">50</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">55</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">60</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">65</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Extension (mm)</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">0.05</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">0.094</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">0.127</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">0.157</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">1.778</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">2.79</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">3.81</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Load (kN)</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">70</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">75</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">80</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">82</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">80</p></td>
<td class="tableblock halign-left valign-top"></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">70</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Extension (mm)</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">5.08</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">7.62</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">12.7</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">16.0</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">19.05</p></td>
<td class="tableblock halign-left valign-top"></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">22.9</p></td>
</tr>
</tbody>
</table>
<div class="paragraph">
<p>Diameter of gauge length = 19 mm<br>
Gauge length = 100mm<br>
Diameter at fracture = 16.49 mm<br>
Gauge length at fracture = 121 mm</p>
</div>
<div class="paragraph">
<p>Plot the complete load extension graph and the straight line portion to an enlarged scale. Hence determine:</p>
</div>
<div class="paragraph">
<p>(a) the modulus of elasticity;<br>
(b) the percentage elongation;<br>
(c) the percentage reduction in the area;<br>
(d) the nominal stress at fracture;<br>
(e) the actual stress at fracture;<br>
(f) the tensile strength.</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-flag"></i></span> Please attempt this assignment.</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
Unresolved directive in solid-mechanics.adoc - include::../../partial-pages/nxtbtn.html[]
</div>
</div>
</div>
<div class="sect1">
<h2 id="_compound_bars">2. Compound Bars</h2>
<div class="sectionbody">
<div class="ulist">
<ul>
<li>
<p>A compound or composite bar consists of one or more materials bonded together rigidly such that the straining action of the external load is shared by the materials such that they satisfy <strong>equilibrium condition</strong>, \(F_{s} + F_{c} = F_{total}\).</p>
</li>
<li>
<p>These different materials are constrained to deform together such that they satisfy <strong>compatibility condition</strong>, \(\epsilon_{material1} = \epsilon_{material2}\).</p>
</li>
<li>
<p><strong>Modular ratio</strong>, \(m\), is given by \(\frac{E_{material1}}{E_{material2}}\).</p>
</li>
</ul>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[F_{s} + F_{c} = F_{total}\]
</div>
</div>
<div class="stemblock">
<div class="content">
\[\epsilon_{material1} = \epsilon_{material2}\]
</div>
</div>
</td>
</tr>
</table>
</div>
<div class="sect2">
<h3 id="_a_concrete_column_with_steel_reinforcement">2.1. <span class="icon"><i class="fa fa-info-circle"></i></span> A concrete column with steel reinforcement</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A reinforced cement concrete column of dimension \(625\ mm \times 625\ mm\) has eight steel rods of diameter \(30\ mm\) as reinforcement. Find the stresses in steel and concrete, and the elastic shortening of the column if \(E =\ 200,000\ N/mm^2\) for steel and \(10,000\ N/mm^2\) for concrete. Load on column \(=\ 3000\ kN\) and length \(=\ 4\ m\).</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>stresses in steel (\(\sigma_{s}\)) and concrete (\(\sigma_{c}\))</em><br>
<span class="icon"><i class="fa fa-check"></i></span> Equilibrium condition: \(F_{s} + F_{c} = F\)<br>
<span class="icon"><i class="fa fa-check"></i></span> Compatibility condition: \(\epsilon_{s} = \epsilon_{c}\)<br>
\(\frac{\sigma_s}{E_s} = \frac{\sigma_c}{E_c}\)<br>
\(\frac{F_s}{A_sE_s} = \frac{F_c}{A_cE_c}\)<br>
\(F_s = F_c \times \frac{A_sE_s}{A_cE_c}\)<br>
\(F_s = (F - F_s) \times \frac{A_sE_s}{A_cE_c}\)<br>
\(\frac{F_s}{F - F_s} = \frac{A_sE_s}{A_cE_c}\)<br>
\(\frac{1}{\frac{F}{F_s} - 1} = \frac{A_sE_s}{A_cE_c}\)<br>
\(F_s = F \times \frac{A_sE_s}{A_cE_c + A_sE_s}\)<br>
\(\sigma_s = \frac{F_s}{A_s} = \frac{FE_s}{A_cE_c + A_sE_s}\)<br>
\(A_s = 8 \times \pi \big(\frac{D}{2} \big)^2 = 2\pi D^2\)<br>
\(A_c = (dimension \times dimension) - 2\pi D^2\)<br>
\(\sigma_c = \frac{F_c}{A_c} = \frac{F-Fs}{A_c} = \frac{F-(\sigma_sA_s)}{A_c}\)</p>
</div>
<div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>elastic shortening (\(\Delta L\))</em><br>
\(\epsilon_s = \frac{\Delta L_s}{L_s}\)<br>
\(\epsilon_s = \frac{\sigma_s}{E_s}\)<br>
\(\Delta L_s = L_s \times \frac{\sigma_s}{E_s}\)<br>
\(\Delta L_c = L_c \times \frac{\sigma_c}{E_c}\)<br>
\(L_s = L_c = L\) and \(\epsilon_{s} = \epsilon_{c}\)<br>
\(\Delta L = L \times \frac{\sigma_s}{E_s} = L \times \frac{\sigma_c}{E_c}\) (compression)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_encased_composite_bar">2.2. <span class="icon"><i class="fa fa-info-circle"></i></span> Encased composite bar</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A steel rod of diameter \(65\ mm\) and length \(1\ m\) is encased by a cast iron (CI) sleeve \(9\ mm\) thick and of
internal diameter \(65\ mm\). The assembly is subjected to a load of \(45\ kN\). Find the stresses in the two materials and the elongation of the assembly. \(E\) for steel \(=\ 200\ GPa\) and \(E\) for cast iron \(=\ 100\ GPa\).</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>stresses in steel (\(\sigma_{s}\)) and cast iron (\(\sigma_{I}\))</em><br>
<span class="icon"><i class="fa fa-check"></i></span> Equilibrium condition: \(F_{s} + F_{I} = F\)<br>
<span class="icon"><i class="fa fa-check"></i></span> Compatibility condition: \(\epsilon_{s} = \epsilon_{I}\)<br>
\(\frac{\sigma_s}{E_s} = \frac{\sigma_I}{E_I}\)<br>
\(\frac{F_s}{A_sE_s} = \frac{F_I}{A_IE_I}\)<br>
\(F_s = F_I \times \frac{A_sE_s}{A_IE_I}\)<br>
\(F_s = (F - F_s) \times \frac{A_sE_s}{A_IE_I}\)<br>
\(\frac{F_s}{F - F_s} = \frac{A_sE_s}{A_IE_I}\)<br>
\(\frac{1}{\frac{F}{F_s} - 1} = \frac{A_sE_s}{A_IE_I}\)<br>
\(F_s = F \times \frac{A_sE_s}{A_IE_I + A_sE_s}\)<br>
\(\sigma_s = \frac{F_s}{A_s} = \frac{FE_s}{A_IE_I + A_sE_s}\)<br>
\(A_s = \pi \big(\frac{d}{2} \big)^2\)<br>
\(A_I =  \frac{\pi D^2}{4} + \frac{\pi d^2}{4} = \frac{\pi}{4} (D^2 - d^2)\)<br>
\(D = d + (2 \times thickness)\)<br>
\(\sigma_I = \frac{F_I}{A_I} = \frac{F-Fs}{A_I} = \frac{F-(\sigma_sA_s)}{A_I}\)</p>
</div>
<div class="paragraph">
<p><span class="icon"><i class="fa fa-key"></i></span> <em>elongation of the assembly (\(\Delta L\))</em><br>
\(\epsilon_s = \frac{\Delta L_s}{L_s}\)<br>
\(\epsilon_s = \frac{\sigma_s}{E_s}\)<br>
\(\Delta L_s = L_s \times \frac{\sigma_s}{E_s}\)<br>
\(\Delta L_I = L_I \times \frac{\sigma_I}{E_I}\)<br>
\(L_s = L_I = L\) and \(\epsilon_{s} = \epsilon_{I}\)<br>
\(\Delta L = L \times \frac{\sigma_s}{E_s} = L \times \frac{\sigma_I}{E_I}\) (extension)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_a_steel_rod_and_brass_bush_assignment">2.3. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> A steel rod and brass bush <mark>ASSIGNMENT</mark></h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A \(75\ mm\) diameter compound bar is constructed by shrinking a circular brass bush onto the outside of a \(50\ mm\) diameter solid steel rod. If the compound bar is then subjected to an axial compressive load of \(160\ kN\) determine the load carried by the steel rod and the brass bush and the compressive stress set up in each material. For steel, \(E = 210\ GN/m^2\); for brass, \(E = 100\ GN/m^2\).</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-flag"></i></span> Please attempt this assignment.</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_buttwelded_stanchion_assignment">2.4. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Buttwelded stanchion <mark>ASSIGNMENT</mark></h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A stanchion is formed by buttwelding together four plates of steel to form a square tube of outside cross-section \(200\ mm \times 200\ mm\). The constant metal thickness is \(10\ mm\). The inside is then filled with concrete.</p>
</div>
<div class="paragraph">
<p>(a) Determine the cross-sectional area of the steel and concrete<br>
(b) If \(E\) for steel is \(200\ GN/m^2\) and this value is twenty times that for the concrete, find when the stanchion carries a load of \(368.8\ kN\),</p>
</div>
<div class="paragraph">
<p>(i) The stress in the concrete<br>
(ii) The stress in the steel<br>
(iii) The amount the stanchion shortens over a length of \(2\ m\).</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-flag"></i></span> Please attempt this assignment.</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_thermal_stresses_and_strains">3. Thermal Stresses and Strains</h2>
<div class="sectionbody">
<div class="ulist">
<ul>
<li>
<p>Whenever there is an increase or decrease in the temperature of a bar, it expands or contracts.</p>
</li>
<li>
<p>If the bar is allowed to expand or contract freely, no stresses are induced in the bar.</p>
</li>
<li>
<p>If free expansion or contraction of the bar is prevented, <strong>thermal stresses</strong> are induced in the bar. The corresponding strain is called <strong>thermal strain</strong>.</p>
</li>
</ul>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="paragraph">
<p>Consider a bar subjected to an increase in temperature.<br>
\(L = \text{Original length}\)<br>
\(t = \text{Temperature increase}\)<br>
\(\alpha = \text{Coefficient of linear expansion}\)<br>
The increase in length due to the increase in temperature,</p>
</div>
<div class="stemblock">
<div class="content">
\[\Delta L = L \times \alpha \times t\]
</div>
</div>
<div class="paragraph">
<p>If the expansion is prevented,<br>
\(\sigma = \epsilon \times E = \alpha t \times E\)<br>
If the supports yield by an amount of, say, \(\Delta\),</p>
</div>
<div class="stemblock">
<div class="content">
\[\Delta L = L \alpha t - \Delta\]
</div>
</div>
<div class="paragraph">
<p>\(\sigma = \epsilon \times E = \big( \alpha t - \frac{\Delta}{L} \big) \times E\)</p>
</div>
</td>
</tr>
</table>
</div>
<table class="tableblock frame-all grid-cols stretch">
<colgroup>
<col style="width: 33.3333%;">
<col style="width: 33.3333%;">
<col style="width: 33.3334%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top">S. No.</th>
<th class="tableblock halign-left valign-top">Material</th>
<th class="tableblock halign-left valign-top">Coefficient of linear expansion \(/^oC (\alpha)\)</th>
</tr>
</thead>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock">1.</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">Steel</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">\(11.5 \times 10^{-6}\ to\ 13 \times 10^{-6}\)</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock">2.</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">Wrought iron, Cast iron</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">\(11 \times 10^{-6}\ to\ 12 \times 10^{-6}\)</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock">3.</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">Aluminium</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">\(23 \times 10^{-6}\ to\ 24 \times 10^{-6}\)</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock">4.</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">Copper, Brass, Bronze</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">\(17 \times 10^{-6}\ to\ 18 \times 10^{-6}\)</p></td>
</tr>
</tbody>
</table>
<div class="sect2">
<h3 id="_stress_not_to_be_exceeded">3.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Stress not to be exceeded</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A brass rod \(2.5\ m\) long is fixed at both ends. If the thermal stress is not to exceed \(77\ MPa\), calculate the temperature through which the rod should be heated. Take the values of \(\alpha\) and \(E\) as \(17 \times 10^{-6}/K\) and \(90\ GPa\) respectively.</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p>\(\sigma = \epsilon \times E = \alpha t \times E\)<br>
\(t = \frac{\sigma}{\alpha \times E}\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_stress_when_temperature_falls">3.2. <span class="icon"><i class="fa fa-info-circle"></i></span> Stress when temperature falls</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>Two parallel walls \(6.5\ m\) apart are held together by a steel rod \(26\ mm\) diameter passing through metal plates and nuts at each end. The nuts are tightened when the rod is at a temperature of \(98^oC\). Determine the stress in the rod, when the temperature falls to \(60.5^oC\), if</p>
</div>
<div class="paragraph">
<p>(a) the ends do not yield, and<br>
(b) the ends yield by \(1.5\ mm\)<br>
Take \(E = 200\ GPa\) and \(\alpha = 12 \times 10^{-6}/^oC\)</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p>(a) \(\sigma = \alpha t \times E\)<br>
(b) \(\Delta L = L \alpha t - \Delta\)<br>
\(\sigma = \epsilon \times E = \big( \alpha t - \frac{\Delta}{L} \big) \times E\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_thermal_stress_of_a_tapered_bar">3.3. <span class="icon"><i class="fa fa-info-circle"></i></span> Thermal stress of a tapered bar</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A rigidly fixed circular bar \(1.5\ m\) long uniformly tapers from \(124\ mm\) diameter at one end to \(95\ mm\) diameter at the other. If the maximum stress in the bar is not to exceed \(108\ MPa\), find the temperature through which it can be heated. Take \(E\) and \(\alpha\) for the bar material as \(100\ GPa\) and \(18 \times 10^{-6}/ K\) respectively.</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p>\(\Delta L = L \alpha t\)<br>
\(\Delta L = \frac{4FL}{\pi E d D}\)<br>
\(L \alpha t = \frac{4FL}{\pi E d D}\)<br>
\(F = \alpha t \times \frac{\pi E d D}{4}\)<br>
\(\sigma = \frac{F}{A}\)<br>
\(\sigma = \frac{F}{(\frac{\pi}{4}D^2)}\)<br>
\(\sigma = \frac{ \alpha t \times \frac{\pi E d D}{4}}{(\frac{\pi}{4}D^2)}\)<br>
\(\sigma = \frac{ \alpha t E \times d}{D}\)<br>
\(t = \frac{\sigma D}{ \alpha E \times d}\)</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_stress_strain_and_modulus_of_elasticity_assignment">3.4. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Stress, strain, and modulus of elasticity <mark>ASSIGNMENT</mark></h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>(a) A test piece is cut from a brass bar and subjected to a tensile test. With a load of \(6.4\ kN\) the test piece, of diameter \(11.28\ mm\), extends by \(0.04\ mm\) over a gauge length of \(50\ mm\). Determine:</p>
</div>
<div class="paragraph">
<p>(i) the stress,<br>
(ii)the strain,<br>
(iii) the modulus of elasticity.</p>
</div>
<div class="paragraph">
<p>(b) A spacer is turned from the same bar. The spacer has a diameter of \(28\ mm\) and a length of \(250\ mm\). both measurements being made at \(20\ ^oC\).The temperature of the spaceris then increased to \(100\ ^oC\),the natural expansion being entirely prevented. Taking the coefficientof linear expansion to be \(18 \times 10^{-6}/^oC\) determine:</p>
</div>
<div class="paragraph">
<p>(i) the stress in the spacer,<br>
(ii) the compressive load on the spacer.</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-flag"></i></span> Please attempt this assignment.</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_stress_when_temperature_rises_assignment">3.5. <span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Stress when temperature rises <mark>ASSIGNMENT</mark></h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A steel rod of cross-sectional area \(600\ mm^2\) and a coaxial copper tube of cross-sectional area \(1000\ mm^2\) are firmly attached at their ends to form a compound bar. Determine the stress in the steel and the copper when the temperature of the bar is raised by \(80\ ^oC\) and an axial tensile force of \(60\ kN\) is applied.</p>
</div>
<div class="paragraph">
<p>For steel, \(E = 200\ GN/m^2\) with \(\alpha = 11 \times 10^{-6}/^oC\)<br>
For copper, \(E = 100\ GN/m^2\) with \(\alpha = 16.5 \times 10^{-6}/^oC\).</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="paragraph">
<p><span class="icon"><i class="fa fa-flag"></i></span> Please attempt this assignment.</p>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_tortion_of_circular_shafts">4. Tortion of Circular Shafts</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Torsion is the twisting of an object caused by a moment acting about the object&#8217;s longitudinal axis. <strong>Torque</strong> is the moment that causes the twisting.</p>
</div>
<div class="paragraph">
<p>Consider a shaft transmitting power.</p>
</div>
<div id="img-twist" class="imageblock text-left">
<div class="content">
<a class="image" href="https://siliconwit.com/solid-mechanics"><img src="data:image/png;base64," alt="twist" width="100%"></a>
</div>
<div class="title">Figure 6. Tortion of a circular shaft.</div>
</div>
<div class="admonitionblock tip">
<table>
<tr>
<td class="icon">
<i class="fa icon-tip" title="Tip"></i>
</td>
<td class="content">
<div class="stemblock">
<div class="content">
\[\text{The angel of twist, } \theta = \frac{TL}{GJ}\]
</div>
</div>
<div class="paragraph">
<p>Where \(T\) is the applied torque, \(L\) is the length of the bar, \(G\) is the <strong>shear modulus</strong>, and \(J\) is the <strong>polar moment of inertia</strong>. The value of \(G\) can be obtained using an experiment.</p>
</div>
<div class="ulist">
<ul>
<li>
<p>The polar moment of inertia describes a cross-section&#8217;s resistance to torsion due to its shape. The polar moment of inertia for a hollow bar shown below can be calculated as follows.</p>
</li>
</ul>
</div>
<div id="img-polarMom" class="imageblock text-left">
<div class="content">
<a class="image" href="https://siliconwit.com/solid-mechanics"><img src="data:image/png;base64," alt="polarMom" width="70%"></a>
</div>
<div class="title">Figure 7. Polar moment.</div>
</div>
<div class="stemblock">
<div class="content">
\[\text{The polar moment of inertia, } J = \frac{\pi}{2} \big( r_o^4 - r_i^4 \big)\]
</div>
</div>
<div class="paragraph">
<p>For a solid circular bar, \(J = \frac{\pi}{2} \big( r^4 \big)\)</p>
</div>
</td>
</tr>
</table>
</div>
<div class="sect2">
<h3 id="_twisting_solid_cylinder">4.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Twisting solid cylinder</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A moment of \(1500\ Nm\) is acting on a solid cylinder shaft with diameter \(150\ mm\) and length \(2\ m\). The shaft is made in steel with modulus of rigidity \(79\ GPa\).</p>
</div>
<div class="paragraph">
<p>(a) Calculate the angular deflection of the shaft.<br>
(b) Assuming the shaft is hollow with an inner diameter of \(50\ mm\), calculate the angular deflection of the shaft.</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top"></th>
</tr>
</thead>
</table>
</div>
</details>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_references">References</h2>
<div class="sectionbody">
<div class="ulist bibliography">
<ul class="bibliography">
<li>
<p><a id="EJ-Hearn"></a>[EJ-Hearn] E.J. Hearn. <em>Mechanics Of Materials: An Introduction to the Mechanics of Elastic and Plastic Deformation of Solids and Structural Materials</em> Oxford University Press, 2010. ISBN 0080523994, 9780080523996 <a href="https://www.google.com/books?id=7eKu5Kh0dHcC">books.google</a></p>
</li>
<li>
<p><a id="RSKhurmi"></a>[RSKhurmi] RS Khurmi | N Khurmi. <em>A Textbook of Strength of Materials</em> S. Chand Publishing, 2019. ISBN 935283397X, 9789352833979 <a href="https://www.google.com/books?id=FqEbEAAAQBAJ">books.google</a></p>
</li>
<li>
<p><a id="RSubramanian"></a>[RSubramanian] R. Subramanian. <em>Strength Of Materials</em> Elsevier, 1997. ISBN 0198061102, 9780198061106 <a href="https://www.google.com/books?id=7lCnSQAACAAJ">books.google</a></p>
</li>
</ul>
</div>
<!-- Step 1: Include the JavaScript SDK on your page once, ideally right after the opening body tag. -->
<!-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=787925512262196&autoLogAppEvents=1" nonce="hUpr0zj0"></script> -->

<!-- add the button! (body) -->
<!-- <applause-button style="width: 58px; height: 58px;"/> -->

<!-- Start facebook comment section -->
<!-- Step 2: Place this code wherever you want the plugin to appear on your page. -->
<!-- <hr>

<div class="fb-comments" data-href="https://siliconwit.com/solid-mechanics" data-width="" data-numposts="20"></div>

<hr> -->

<!-- End facebook comment section -->

<!-- Start commentics comment section -->

<!-- <div id="commentics"></div> -->

<!-- Start commentics php comment section -->

<?php
$cmtx_identifier = 'solid-mechanics';
$cmtx_reference  = 'solid-mechanics';
$cmtx_folder     = '/comments/';
require($_SERVER['DOCUMENT_ROOT'] . $cmtx_folder . 'frontend/index.php');
?>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.3/highlight.min.js"></script>
<script>
if (!hljs.initHighlighting.called) {
  hljs.initHighlighting.called = true
  ;[].slice.call(document.querySelectorAll('pre.highlight > code[data-lang]')).forEach(function (el) { hljs.highlightBlock(el) })
}
</script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  messageStyle: "none",
  tex2jax: {
    inlineMath: [["\\(", "\\)"]],
    displayMath: [["\\[", "\\]"]],
    ignoreClass: "nostem|nolatexmath"
  },
  asciimath2jax: {
    delimiters: [["\\$", "\\$"]],
    ignoreClass: "nostem|noasciimath"
  },
  TeX: { equationNumbers: { autoNumber: "all" } }
})
MathJax.Hub.Register.StartupHook("AsciiMath Jax Ready", function () {
  MathJax.InputJax.AsciiMath.postfilterHooks.Add(function (data, node) {
    if ((node = data.script.parentNode) && (node = node.parentNode) && node.classList.contains("stemblock")) {
      data.math.root.display = "block"
    }
    return data
  })
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.9/MathJax.js?config=TeX-MML-AM_HTMLorMML"></script>
<p class="footer-text">
<!-- footer -->

<!-- Copyright text  -->
SiliconWit.com &copy; 2021-<script>document.write(new Date().getFullYear())</script> <!-- &#9997; Sam Macharia, PhD -->
&emsp;
<!-- Subscribe button -->
<button class="button-3" onclick="location.href='https://50312631.sibforms.com/serve/MUIEAMNpGV92xSPcDr_46NegYWAVvHPghmb-X7Mk-vXlVoMCv9HHTuNuahdOqK57NP8x4zxM22qPmxUgAdBtg4XOOcWwqQzEDR3BrSfpzO2nagCGGlV1WXEBTOvf90PUd6UUMxZ1PmgLpZ4w0pXK0Iqg5brcEwooD91t2lP1hZd7LUtYh4SVBBKHJ2il_RHD5zB4dhSVuMbiVVSb';"> Subscribe</button>

</p>
</body>
</html>