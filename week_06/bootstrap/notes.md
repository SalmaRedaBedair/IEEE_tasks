## grid
- put elements in rows and colums
```html
<!-- grid Example -->
    <div class="container">
        <div class="row">
            <div class="col">Test</div>
            <div class="col">Test</div>
            <div class="col">Test</div>
            <div class="col">Test</div>
        </div>
    </div>
```
## container
- created by default in bootstrap
## media query
```html
<!-- 
        col
        sm
        md
        lg
        xl
    -->
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1">Test</div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1">Test</div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1">Test</div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1">Test</div>
        </div>
    </div>
```
## justify-content & self
- justify-content: used for row
- self: used for column
- selt: take => right, left, center
- justify-content: take => center, around, between, start, end
## alert
- alert-primary: used to indicate important information
- alert-secondary: used for less important information
- alert-success: used to indicate success
- alert-danger: used to indicate danger or failure
- alert-warning: used to indicate a warning or caution
- alert-info: used to indicate general information
- alert-light: a light-colored variant of the alert component
- alert-dark: a dark-colored variant of the alert component
## btn
- btn-primary or btn-outline-primary
- it works for any other color
## btn group
```html
<div class="btn-group">
        <div class="btn btn-secondary">1</div>
        <div class="btn btn-danger">2</div>
        <div class="btn btn-success">3</div>
        <div class="btn btn-primary">4</div>
    </div>
```
## image card
- define its place up or down to make carves more beauty
## slide is made using bootstrap
```html
<div id="slide" class="carousel slide container w-75" data-ride="carousel" data-interval="2000" data-pause="hover">
        <ol class="carousel-indicators">
          <li data-target="#slide" data-slide-to="0" class="active"></li>
          <li data-target="#slide" data-slide-to="1"></li>
          <li data-target="#slide" data-slide-to="2"></li>
        </ol>
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="1.jpg" alt="" class="w-100">
          </div>
          <div class="carousel-item">
            <img src="2.jpg" alt="" class="w-100">
          </div>
          <div class="carousel-item">
            <img src="3.jpg" alt="" class="w-100">
          </div>
        </div>
      
        <a href="#slide" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
        <a href="#slide" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
</div>
```
## dropdown
```html
<div class="dropdown">
        <div class="btn btn-success dropdown-toggle" id="x" data-toggle="dropdown">test</div>
        <div class="dropdown-menu" aria-labelledby="x">
          <a href="#" class="dropdown-item">test1</a>
          <a href="#" class="dropdown-item">test2</a>
          <a href="#" class="dropdown-item">test3</a>
        </div>
</div>
```
## navigation bar(breadcrumb)
```html
<nav>
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="">home</a></li>
      <li class="breadcrumb-item"><a href="">about</a></li>
      <li class="breadcrumb-item"><a href="">courses</a></li>
    </ul>
  </nav>
```
## collapse
- you should add the same id to href or data-target
```html
<a href="#ahmed" class="btn btn-primary dropdown" data-toggle="collapse">info</a>
<h1 id="ahmed" class="collapse">bla bla bla</h1>
```
## form

