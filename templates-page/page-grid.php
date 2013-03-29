<?php
/*
Template Name: Grid
*/
?>

<style>

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
    width: 16.6666666666667%;
    height: 43px;
    font-size: 14px;
    font-weight: bold;
    line-height: 43px;
    color: #999;
    text-align: center;
    border: 1px solid #ddd;
    border-left: none;
  }
  .responsive-utilities-test li:first-child {
    border-left: 1px solid #ddd;
  }
  .responsive-utilities-test span {
    position: absolute;
    top:    -1px;
    left:   -1px;
    right:  -1px;
    bottom: -1px;
  }
  .responsive-utilities-test span {
    color: #468847;
    background-color: #dff0d8;
    border: 1px solid #C1D3B1;
  }

  .responsive-vis-list dd {
    margin: 0;
  }
  .responsive-vis-list dd ol {
    list-style: none;
    padding: 0;
  }
  .responsive-vis-list li {
    display: inline-block;
  }
</style>

<div class="row nocolumns">
  <header>
    <hgroup>
      <h1>The Grid</h1>
      <h2>Inspired from <a href="https://github.com/stubbornella/oocss/tree/master/core/grid">Object Oriented CSS Framework</a></h2>
    </hgroup>
  </header>
  
  <p class="h4">The grid is used for dividing space fractionaly and can be nested.</p>
  
  <hr>
</div>

<div class="row nocolumns">
  <h2>Grid Classes</h2>
  <hr>
  
  <dl>
    <dt><code>.row</code></dt>
    <dd>Contains the columns. The outermost rows contain padding. Nested rows have the padding removed and negative left and right margin added for grid alignment.</dd>
    <dt><code>.nocolumns</code></dt>
    <dd>Extension for the row class for outermost rows that contain no columns. It doubles the padding of the row to ensure proper grid alignment.</dd>
    <dt><code>.fullwidth</code></dt>
    <dd>Extension for the row class for rows that need to be full width. It removes the padding and for nested rows it removes negative margin.</dd>
    <dt><code>.collapse</code></dt>
    <dd>Extension for nested rows when a background color is needed. It removes the negative margin for grid alignment and adds padding.</dd>
    <dt><code>.column</code></dt>
    <dd>Base class for making columns. Contains float and padding. By default columns are set to stack when the screen width is below 768 pixels.</dd>
    <dt><code>.widthXofY</code></dt>
    <dd>Extension for the column class and can be used independently if desired. Widths can be thirds, quarters, fifths, halves or full. Total columns in a row must equal 1, for example &frac13; plus &frac23; equals 1.</dd>
  </dl>
</div>

<div class="row nocolumns">
  <h2>Responsive Visibility Classes</h2>
  <hr>
  <p>While these are not specific to the grid, these are helpful for quickly showing and hiding elements on a page. These are not meant for creating entirely different page layouts and should be used sparingly.</p>
  <p>Each class name is associated with the query width and up from that, so you could have an element with the classes <code>.show768.hide0</code> to hide on all but the 768 query width or you could use <code>.show768</code> to show an element from 768 and up.</p>
  <dl class="responsive-vis-list">
    <dt>Class Names</dt>
    <dd>
      <ol>
        <li><code>.hide0</code> <code>.show0</code></li>
        <li><code>.hide480</code> <code>.show480</code></li>
        <li><code>.hide768</code> <code>.show768</code></li>
        <li><code>.hide800</code> <code>.show800</code></li>
        <li><code>.hide992</code> <code>.show992</code></li>
        <li><code>.hide1382</code> <code>.show1382</code></li>
      </ol>
    </dd>
  </dl>

  <h3>Visible on&hellip;</h3>
  <ol class="responsive-utilities-test">
    <li>0<span class="">✔ 0</span></li>
    <li>480<span class="show480 hide0">✔ 480</span></li>
    <li>600<span class="show600 hide0">✔ 600</span></li>
    <li>768<span class="show768 hide0">✔ 768</span></li>
    <li>992<span class="show992 hide0">✔ 992</span></li>
    <li>1382<span class="show1382 hide0">✔ 1382</span></li>
  </ol>

  <h3>Hidden on&hellip;</h3>
  <ol class="responsive-utilities-test hidden-on">
    <li>0<span class="hide0">✔ 0</span></li>
    <li>480<span class="hide480">✔ 480</span></li>
    <li>600<span class="hide600">✔ 600</span></li>
    <li>768<span class="hide768">✔ 768</span></li>
    <li>992<span class="hide992">✔ 992</span></li>
    <li>1382<span class="hide1382">✔ 1382</span></li>
  </ol>
</div>

<div class="row nocolumns">
  <h2>Grid Examples</h2>
  <hr>
  
  <h3>Fifths</h3>
  
  <pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width2of5"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width3of5"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
</div>

<div class="row">
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row">
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width3of5">
    <h4>3/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus. Etiam mauris sem, tincidunt ac bibendum eget, tincidunt a odio. Vivamus scelerisque sagittis lacus condimentum posuere. Donec viverra lectus nec erat feugiat rutrum.</p>
  </div>
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row">
  <div class="column width2of5">
    <h4>2/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width3of5">
    <h4>3/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row">
  <div class="column width4of5">
    <h4>4/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus. Etiam mauris sem, tincidunt ac bibendum eget, tincidunt a odio. Vivamus scelerisque sagittis lacus condimentum posuere. Donec viverra lectus nec erat feugiat rutrum.</p>
  </div>
  <div class="column width1of5">
    <h4>1/5</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row nocolumns">
  <h3>Fourths</h3>
  
  <pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width3of4"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width1of4"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
</div>

<div class="row">
  <div class="column width1of4">
    <h4>1/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of4">
    <h4>1/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of4">
    <h4>1/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of4">
    <h4>1/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row">
  <div class="column width1of4">
    <h4>1/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width2of4">
    <h4>2/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus.</p>
  </div>
  <div class="column width1of4">
    <h4>1/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row">
  <div class="column width3of4">
    <h4>3/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus. Etiam mauris sem, tincidunt ac bibendum eget, tincidunt a odio. Vivamus scelerisque sagittis lacus condimentum posuere. Donec viverra lectus nec erat feugiat rutrum.</p>
  </div>
  <div class="column width1of4">
    <h4>1/4</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row nocolumns">
  <h3>Thirds</h3>
  
  <pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width1of3"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width2of3"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
</div>

<div class="row">
  <div class="column width1of3">
    <h4>1/3</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of3">
    <h4>1/3</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of3">
    <h4>1/3</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row">
  <div class="column width1of3">
    <h4>1/3</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width2of3">
    <h4>2/3</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus. Etiam mauris sem, tincidunt ac bibendum eget, tincidunt a odio.</p>
  </div>
</div>

<div class="row nocolumns">
  <h3>Halves</h3>
  
  <pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width1of2"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width1of2"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
</div>

<div class="row">
  <div class="column width1of2">
    <h4>1/2</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
  <div class="column width1of2">
    <h4>1/2</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>

<div class="row nocolumns">
  <h3>Full</h3>
  
  <pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width1of1"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
</div>

<div class="row">
  <div class="column width1of1">
    <h4>1/1</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus. Etiam mauris sem, tincidunt ac bibendum eget, tincidunt a odio. Vivamus scelerisque sagittis lacus condimentum posuere. Donec viverra lectus nec erat feugiat rutrum.</p>
  </div>
</div>
<!-- End Grid Examples -->

<div class="row nocolumns">
  <h2>Grid Nesting</h2>
  <hr>
  
  <pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width2of3"&gt;</li><li>    &lt;div class="row"&gt;</li><li>      &lt;div class="column width1of2"&gt;&hellip;&lt;/div&gt;</li><li>      &lt;div class="column width1of2"&gt;&hellip;&lt;/div&gt;</li><li>    &lt;/div&gt;</li><li>  &lt;/div&gt;</li><li>  &lt;div class="column width1of3"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>
</div>

<div class="row">
  <div class="column width2of3">
    <h3>2/3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus. Etiam mauris sem, tincidunt ac bibendum eget, tincidunt a odio.</p>
    <div class="row">
      <div class="column width1of2">
        <h4>1/2</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
      </div>
      <div class="column width1of2">
        <h4>1/2</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
      </div>
    </div>
  </div>
  <div class="column width1of3">
    <h3>1/3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc.</p>
  </div>
</div>