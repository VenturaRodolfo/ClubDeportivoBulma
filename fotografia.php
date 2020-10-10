<?php 
session_start();
  require_once 'header.php'; 
  //if (!$loggedin) die ("</div></body></html>");
  echo
'
<!-- /.hero -->

<!-- .section -->

<div class="container">
  <div class="columns">
    <div class="column">
      <article class="media notification is-info">
        <figure class="media-left">
          <span class="icon is-medium">
            <i class="fab fa-2x fa-css3-alt"></i>
          </span>
        </figure>
        <div class="media-content">
          <div class="content">
            <h1 class="title is-size-4">Bulma?</h1>
            <p class="is-size-5">
              Bulma is a modern CSS framework from @jgthms, based on Flexbox.
              Using Bulma, we can describe our websites design using just classes. <span class="emoticon">ᕕ( ᐛ )ᕗ</span>
            </p>
          </div>
        </div>
      </article>
    </div>
    <div class="column">
      <article class="media notification is-primary">
        <figure class="media-left">
          <span class="icon is-medium">
            <i class="fas fa-2x fa-align-justify"></i>
          </span>
        </figure>
        <div class="media-content">
          <div class="content">
            <h1 class="title is-size-4">…Flexbox?</h1>
            <p class="is-size-5">
              Flexbox is a CSS spec that makes sectioning and aligning more natural.
              We dont need to know Flexbox but its how Bulma works behind-the-scenes. <span class="emoticon">⦤(^ー^)⦥</span>
            </p>
          </div>
        </div>
      </article>
    </div>
    <div class="column">
      <article class="media notification is-warning">
        <figure class="media-left">
          <span class="icon is-medium">
            <i class="fas fa-2x fa-shield-alt"></i>
          </span>
        </figure>
        <div class="media-content">
          <div class="content">
            <h1 class="title is-size-4">…Classes?</h1>
            <p class="is-size-5">
              Instead of writing our CSS per-element, we can use predefined classes.
              With enough classes, we can describe our website design using semantics. <span class="emoticon">٩(^ᴗ^)۶</span>
            </p>
          </div>
        </div>
      </article>
    </div>
</div>



<div class="container">
    <div class="columns">
    <div class="column">

    <div class="card">
      <div class="card-image">
          <figure class="media-left">
            <img src="" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">John Smith</p>
              <p class="subtitle is-6">@johnsmith</p>
            </div>
          </div>

          <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
            <a href="#">#css</a> <a href="#">#responsive</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
          </div>
       </div>
        </div>
    </div>

 
</div>


';
?>
  