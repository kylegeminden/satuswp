<?php
/*
Template Name: Grid
*/
?>

<style>

  body {
    word-wrap: normal;
  }

  #main pre ol {
    margin-bottom: 0;
  }

  #main .row.display {
    margin-bottom: 1em;
  }
  #main .row.display .column,
  #main .row.display .columns,
  #main .row.display [class*="span"] {
    min-height: 40px;
    background: #efefef;
    border: 1px solid #ccc;
  }
  #main .row.expand {
    min-height: 40px;
    background: #efefef;
    border: 1px solid #ccc;
  }
  #main .row.expand,
  #main .row.collapse,
  #main .row .row.expand,
  #main .row .row.collapse {
    margin-bottom: 1em;
  }
  #main .row.no-border .columns {
    border: none;
  }
  #main [class*="blockgrid"] > li {
    margin-bottom: 1em;
    min-height: 40px;
    padding-top: 5px;
    padding-bottom: 5px;
    background: #efefef;
    border: 1px solid #ccc;
  }
  /* Utility classes table
  ------------------------- */
  .responsive-utilities th small {
    display: block;
    font-weight: normal;
    color: #999;
  }
  .responsive-utilities tbody th {
    font-weight: normal;
  }
  .responsive-utilities td {
    text-align: center;
  }
  .responsive-utilities td.is-visible {
    color: #468847;
    background-color: #dff0d8 !important;
  }
  .responsive-utilities td.is-hidden {
    color: #ccc;
    background-color: #f9f9f9 !important;
  }

  /* Responsive tests
  ------------------------- */
  .responsive-utilities-test {
    margin-top: 5px;
    padding-left: 0;
    list-style: none;
    overflow: hidden; /* clear floats */
  }
  .responsive-utilities-test li {
    position: relative;
    float: left;
    width: 25%;
    height: 43px;
    font-size: 14px;
    font-weight: bold;
    line-height: 43px;
    color: #999;
    text-align: center;
    border: 1px solid #ddd;
    -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
            border-radius: 4px;
  }
  .responsive-utilities-test li + li {
    margin-left: 10px;
  }
  .responsive-utilities-test span {
    position: absolute;
    top:    -1px;
    left:   -1px;
    right:  -1px;
    bottom: -1px;
    -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
            border-radius: 4px;
  }
  .responsive-utilities-test span {
    color: #468847;
    background-color: #dff0d8;
    border: 1px solid #d6e9c6;
  }
</style>

<header>
  <hgroup>
    <h1>The Grid</h1>
    <h2>Inspired from Zurb's <a href="http://foundation.zurb.com">Foundation 3</a></h2>
  </hgroup>
</header>

<hr>
<p>Since Satus Framework uses <code>box-sizing="border-box"</code> on all elements, columns use pixel padding for gutters and percentage widths which makes this visually consistent when nesting the grid.</p>
<p>The grid is made up of rows columns. Rows have a max-width, have left and right padding, are centered and contain the columns. Columns are percentage widths and as mentioned above, gutters use padding and pixels.  For this to work properly place content within a row and column.</p>
<p>When in mobile the padding on all rows, columns and block grids are reduced to the mobile column gutter width.</p>

<h2>Examples</h2>
<hr>    
<p>The default grid is set for twelve total columns.</p>
<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="span8"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="span4"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
<div class="row display">
  <div class="span4">.span4</div>
  <div class="span4">.span4</div>
  <div class="span4">.span4</div>
</div>
<div class="row display">
  <div class="three columns span3">.span3</div>
  <div class="span6">.span6</div>
  <div class="three columns span3">.span3</div>
</div>
<div class="row display">
  <div class="two columns span2">.span2</div>
  <div class="eight columns span8">.span8</div>
  <div class="two columns span2">.span2</div>
</div>
<div class="row display">
  <div class="span1">.span1</div>
  <div class="span11">.span11</div>
</div>
<div class="row display">
  <div class="span2">.span2</div>
  <div class="span10">.span10</div>
</div>
<div class="row display">
  <div class="span3">.span3</div>
  <div class="span9">.span9</div>
</div>
<div class="row display">
  <div class="span4">.span4</div>
  <div class="span8">.span8</div>
</div>
<div class="row display">
  <div class="span5">.span5</div>
  <div class="span7">.span7</div>
</div>
<div class="row display">
  <div class="span6">.span6</div>
  <div class="span6">.span6</div>
</div>
<div class="row display">
  <div class="span7">.span7</div>
  <div class="span5">.span5</div>
</div>
<div class="row display">
  <div class="span8">.span8</div>
  <div class="span4">.span4</div>
</div>
<div class="row display">
  <div class="span9">.span9</div>
  <div class="span3">.span3</div>
</div>
<div class="row display">
  <div class="span10">.span10</div>
  <div class="span2">.span2</div>
</div>
<div class="row display">
  <div class="span11">.span11</div>
  <div class="span1">.span1</div>
</div>
<div class="row display">
  <div class="span12">.span12</div>
</div>
<!-- End Examples -->    
  
<h2>Offsets</h2>
<hr>    
<p>To offset columns simply add a class of offset plus the number of columns desired to offset by to the column.</p>
<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="span1"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="span8 offset3"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
<div class="row display">
  <div class="span1">.span1</div>
  <div class="span11">.span11</div>
</div>
<div class="row display">
  <div class="span1">.span1</div>
  <div class="span10 offset1">.span10.offset1</div>
</div>
<div class="row display">
  <div class="span1">.span1</div>
  <div class="span9 offset2">.span9.offset2</div>
</div>
<div class="row display">
  <div class="span1">.span1</div>
  <div class="span8 offset3">.span8.offset3</div>
</div>
<div class="row display">
  <div class="span7 offset5">.span7.offset5</div>
</div>
<div class="row display">
  <div class="span6 offset6">.span6.offset6</div>
</div>
<div class="row display">
  <div class="span5 offset7">.span5.offset7</div>
</div>
<div class="row display">
  <div class="span4 offset8">.span4.offset8</div>
</div>
<!-- End Offsets -->  

<h2>Centered Columns</h2>
<hr>    
<p>When you need to center a single column and the class of center to the column.</p>
<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="span8 center"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
<div class="row display">
  <div class="span1 center">.span1.center</div>
</div>
<div class="row display">
  <div class="span2 center">.span2.center</div>
</div>
<div class="row display">
  <div class="span3 center">.span3.center</div>
</div>
<div class="row display">
  <div class="span4 center">.span4.center</div>
</div>
<div class="row display">
  <div class="span5 center">.span5.center</div>
</div>
<div class="row display">
  <div class="span6 center">.span6.center</div>
</div>
<div class="row display">
  <div class="span7 center">.span7.center</div>
</div>
<div class="row display">
  <div class="span8 center">.span8.center</div>
</div>
<div class="row display">
  <div class="span9 center">.span9.center</div>
</div>
<div class="row display">
  <div class="span10 center">.span10.center</div>
</div>
<div class="row display">
  <div class="span11 center">.span11.center</div>
</div>
<div class="row display">
  <div class="span12 center">.span12.center</div>
</div>

<h2>Block Grids</h2>
<hr>    
<p>Block grids are lists and can be used for things like images, etc. By default there are up to six across.</p>
<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="span12"&gt;</li><li>    &lt;ul class="blockgrid2"&gt;</li><li>      &lt;li&gt;&hellip;&lt;/li&gt;</li><li>      &lt;li&gt;&hellip;&lt;/li&gt;</li><li>    &lt;/ul&gt;</li><li>  &lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
<ul class="blockgrid6">
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
  <li>6 Across</li>
</ul>
<ul class="blockgrid5">
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
  <li>5 Across</li>
</ul>
<ul class="blockgrid4">
  <li>4 Across</li>
  <li>4 Across</li>
  <li>4 Across</li>
  <li>4 Across</li>
  <li>4 Across</li>
  <li>4 Across</li>
  <li>4 Across</li>
  <li>4 Across</li>
</ul>
<ul class="blockgrid3">
  <li>3 Across</li>
  <li>3 Across</li>
  <li>3 Across</li>
  <li>3 Across</li>
  <li>3 Across</li>
  <li>3 Across</li>
</ul>
<ul class="blockgrid2">
  <li>2 Across</li>
  <li>2 Across</li>
  <li>2 Across</li>
  <li>2 Across</li>
</ul>
<!-- End Block Grids -->    

<h2>Small Gutters</h2>
<hr>    
<p>Sometimes you need smaller gutters than the default, when you do simply add a class of small to the row.</p>
<pre><ol><li>&lt;div class="row small"&gt;</li><li>  &lt;div class="span4&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="span8&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li><li></li><li>&lt;div class="row small"&gt;</li><li>  &lt;div class="span12"&gt;</li><li>    &lt;ul class="blockgrid2"&gt;</li><li>      &lt;li&gt;&hellip;&lt;/li&gt;</li><li>      &lt;li&gt;&hellip;&lt;/li&gt;</li><li>    &lt;/ul&gt;</li><li>  &lt;/div&gt;</li></ol></pre>
<!-- End Small Gutters -->

<h2>Collapse Rows &amp; Columns</h2>
<hr>
<p>When you need rows and columns not to have margins and padding add collapse to the row.</p>
<pre><ol><li>&lt;div class="row collapse"&gt;</li><li>  &lt;div class="span8"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="span4"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
  
<div class="row collapse display">
  <div class="span8">.span8</div>
  <div class="span4">.span4</div>
</div>
<!-- End Collapse Rows -->

<h2>Expand Rows</h2>
<hr>
<p>If you don't need columns inside of a row, like a header for example, and have the gutters equal with rows with columns add a class of expand to the row.</p>
<pre><ol><li>&lt;div class="row expand"&gt;&hellip;&lt;/div&gt;</li></ol></pre>
<div class="row expand display">.row.expand</div>
<!-- End Expand Row -->

<h2>Mobile Grids</h2>
<hr>    
<p>By default there are a total of four mobile columns in the mobile grid.</p>
<p>To make existing columns mobile simply add the class of mobile with a number up to a total of four to your existing column class.</p>
<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="span8 mobile3&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="span4 mobile1&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
<div class="row display">
  <div class="span8 mobile3">.span8.mobile3</div>
  <div class="span4 mobile1">.span4.mobile1</div>
</div>
<p>To have block grids function on mobile devices simply add on the class of mobile to the <code>ul</code> or <code>ol</code>.</p>
<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="span12"&gt;</li><li>    &lt;ul class="blockgrid2 mobile"&gt;</li><li>      &lt;li&gt;&hellip;&lt;/li&gt;</li><li>      &lt;li&gt;&hellip;&lt;/li&gt;</li><li>    &lt;/ul&gt;</li><li>  &lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
<div class="row">
  <div class="span12">
    <ul class="blockgrid2 mobile">
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
    </ul>
  </div>
</div>
<!-- End Mobile Grid -->

<h2>Grid Nesting</h2>
<hr>

<div class="row no-border">
  <div class="span8">

    <div class="row">
      <div class="span6">
        <img src="http://placehold.it/400x300">    
        <p>.span6</p>
      </div>
      <div class="span6">
        <img src="http://placehold.it/400x300">    
        <p>.span6</p>
      </div>
    </div>

    <div class="row">
      <div class="span3">
        <img src="http://placehold.it/400x300">    
        <p>.span3</p>
      </div>
      <div class="span3">
        <img src="http://placehold.it/400x300">    
        <p>.span3</p>
      </div>
      <div class="span3">
        <img src="http://placehold.it/400x300">    
        <p>.span3</p>
      </div>
      <div class="span3">
        <img src="http://placehold.it/400x300">    
        <p>.span3</p>
      </div>
    </div>

    <div class="row">
      <div class="span4">
        <img src="http://placehold.it/400x300">    
        <p>.span4</p>
      </div>
      <div class="span4">
        <img src="http://placehold.it/400x300">    
        <p>.span4</p>
      </div>
      <div class="span4">
        <img src="http://placehold.it/400x300">    
        <p>.span4</p>
      </div>
    </div>
  </div>
  <div class="span4">

    <div class="row small">
      <div class="span3 mobile1">
        <img src="http://placehold.it/100x100"></div>
      <div class="span9 mobile3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus sem sed enim scelerisque pharetra.
        <br>    
        <br></div>
    </div>
    <div class="row small">
      <div class="span3 mobile1">
        <img src="http://placehold.it/100x100"></div>
      <div class="span9 mobile3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus sem sed enim scelerisque pharetra.
        <br>    
        <br></div>
    </div>
    <div class="row small">
      <div class="span3 mobile1">
        <img src="http://placehold.it/100x100"></div>
      <div class="span9 mobile3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus sem sed enim scelerisque pharetra.
        <br>    
        <br></div>
    </div>
    <div class="row small">
      <div class="span3 mobile1">
        <img src="http://placehold.it/100x100"></div>
      <div class="span9 mobile3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus sem sed enim scelerisque pharetra.
        <br>    
        <br></div>
    </div>
    <ul class="blockgrid4 mobile small">
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
      <li>4 Across</li>
    </ul>
  </div>
</div>
<!-- End Grid Nesting -->

<h2>Responsive Utilities <small>from <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a></small></h2>
<hr>
<p>These are to quickly enable showing and hiding content on different widths. <strong>Use these sparingly.</strong></p>
<table class="table responsive-utilities">
  <thead>
    <tr>
      <th>Class</th>
      <th>Phones <small>767px and below</small></th>
      <th>Tablets <small>979px to 768px</small></th>
      <th>Desktops <small>Default</small></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><code>.visible-phone</code></th>
      <td class="is-visible">Visible</td>
      <td class="is-hidden">Hidden</td>
      <td class="is-hidden">Hidden</td>
    </tr>
    <tr>
      <th><code>.visible-tablet</code></th>
      <td class="is-hidden">Hidden</td>
      <td class="is-visible">Visible</td>
      <td class="is-hidden">Hidden</td>
    </tr>
    <tr>
      <th><code>.visible-desktop</code></th>
      <td class="is-hidden">Hidden</td>
      <td class="is-hidden">Hidden</td>
      <td class="is-visible">Visible</td>
    </tr>
    <tr>
      <th><code>.hidden-phone</code></th>
      <td class="is-hidden">Hidden</td>
      <td class="is-visible">Visible</td>
      <td class="is-visible">Visible</td>
    </tr>
    <tr>
      <th><code>.hidden-tablet</code></th>
      <td class="is-visible">Visible</td>
      <td class="is-hidden">Hidden</td>
      <td class="is-visible">Visible</td>
    </tr>
    <tr>
      <th><code>.hidden-desktop</code></th>
      <td class="is-visible">Visible</td>
      <td class="is-visible">Visible</td>
      <td class="is-hidden">Hidden</td>
    </tr>
  </tbody>
</table>
<h4>Visible on&hellip;</h4>
<ul class="responsive-utilities-test">
  <li>Phone<span class="visible-phone">✔ Phone</span></li>
  <li>Tablet<span class="visible-tablet">✔ Tablet</span></li>
  <li>Desktop<span class="visible-desktop">✔ Desktop</span></li>
</ul>
<h4>Hidden on&hellip;</h4>
<ul class="responsive-utilities-test hidden-on">
  <li>Phone<span class="hidden-phone">✔ Phone</span></li>
  <li>Tablet<span class="hidden-tablet">✔ Tablet</span></li>
  <li>Desktop<span class="hidden-desktop">✔ Desktop</span></li>
</ul>
<!-- End Responsive Utilities -->