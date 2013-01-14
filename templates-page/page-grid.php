<?php
/*
Template Name: Grid
*/
?>

<header>
  <hgroup>
    <h1>The Grid</h1>
    <h2>Inspired from <a href="https://github.com/stubbornella/oocss/tree/master/core/grid">Object Oriented CSS Framework</a></h2>
  </hgroup>
</header>

<p class="h4">The grid is used for dividing space fractionaly and can be nested.</p>

<hr>

<h2>Grid Classes</h2>
<hr>

<dl>
  <dt><code>row</code></dt>
  <dd>Contains the columns.</dd>
  <dt><code>column</code></dt>
  <dd>Base class for making columns. Contains float, padding and min-height to prevent empty columns from collapsing. By default columns are set to stack when the screen width is below 768 pixels.</dd>
  <dt><code>widthXofY</code></dt>
  <dd>Used in conjuction with the column class. Defines the width of the column. Columns can be thirds, quarters, fifths, halves or full. Total columns in a row must equal 1, for example &frac13; plus &frac23; equals 1.</dd>
</dl>

<h2>Grid Examples</h2>
<hr>

<h3>Fifths</h3>

<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width2of5"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width3of5"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>

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

<h3>Fourths</h3>

<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width3of4"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width1of4"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>

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
  <div class="column width1of2">
    <h4>1/2</h4>
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

<h3>Thirds</h3>

<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width1of3"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width2of3"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>

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

<h3>Halves</h3>

<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width1of2"&gt;&hellip;&lt;/div&gt;</li><li>  &lt;div class="column width1of2"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>

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

<h3>Full</h3>

<pre><ol><li>&lt;div class="row"&gt;</li><li>  &lt;div class="column width1of1"&gt;&hellip;&lt;/div&gt;</li><li>&lt;/div&gt;</li></ol></pre>

<div class="row">
  <div class="column width1of1">
    <h4>1/1</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur quam sed sapien bibendum sit amet sodales arcu accumsan. Nam fringilla vulputate tincidunt. Mauris sed sem ante, at luctus justo. Fusce et tempor nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pharetra nisl nec tortor convallis rutrum vestibulum felis consectetur. Nullam mi nisi, tincidunt id ornare ut, auctor non mi. Cras sagittis bibendum venenatis. In hac habitasse platea dictumst. Nulla in velit orci, quis venenatis lacus. Etiam mauris sem, tincidunt ac bibendum eget, tincidunt a odio. Vivamus scelerisque sagittis lacus condimentum posuere. Donec viverra lectus nec erat feugiat rutrum.</p>
  </div>
</div>
<!-- End Grid Examples -->

<h2>Grid Nesting</h2>
<hr>

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