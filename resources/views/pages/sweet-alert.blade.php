@extends('layouts.app', [
    'namePage' => 'Sweet alert',
    'class' => 'sidebar-mini',
    'activePage' => 'alert',
    'activeNav' => 'components',
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Sweet Alert</h2>
      <p class="category">A beautiful plugin, that replace the classic alert, Handcrafted by our friend
        <a target="_blank" href="https://twitter.com/t4t5">Tristan Edwards</a>. Please check out the
        <a href="https://sweetalert2.github.io/" target="_blank">full documentation.</a>
      </p>
    </div>
  </div>
  <div class="content">
    <div class="places-sweet-alerts">
      <div class="row">
        <div class="col-md-3 ml-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">Basic example</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('basic')">Try me!</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 mr-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">A success message</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('success-message')">Try me!</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ml-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">Custom HTML description</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('custom-html')">Try me!</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 mr-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">A warning message, with a function attached to the "Confirm" Button...</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('warning-message-and-confirmation')">Try me!</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ml-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">Modal window with input field</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('input-field')">Try me!</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 mr-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">A title with a text under</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('title-and-text')">Try me!</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ml-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">A message with auto close timer set to 2 seconds</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('auto-close')">Try me!</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 mr-auto">
          <div class="card ">
            <div class="card-body text-center">
              <p class="card-text">...and by passing a parameter, you can execute something else for "Cancel"</p>
              <button class="btn btn-primary btn-fill" onclick="demo.showSwal('warning-message-and-cancel')">Try me!</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection