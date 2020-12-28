@extends('dashboard.master')
@section('title')
Predictions
@endsection
@section('pageHeader')
<h3 class="card-header">Breast Cancer Prediction</h3>
@endSection
@section('content')
    <style>
        /* Make sure nothing inside buttons can send click events so we can catch button clicks with delegated events. */
        button * {
            pointer-events: none;
        }

        /* Just a really naive css example to swap the button contents with the spinner. Bring your own spinner & styles. */
        /*.loading {*/
        /*    opacity: 10;*/
        /*}*/
        /*.loading span {*/
        /*    display: none;*/
        /*    !*background-color: red;*!*/

        /*}*/

        .loading {
            opacity: 10;
            /*display: none;*/
            /*border: 16px solid #f3f3f3;*/
            /*border-top: 16px solid #43A5F5;*/
            /*border-radius: 30%;*/
            /*width: 10px;*/
            /*height: 10px;*/
            /*animation: spin 2s linear infinite;*/
            /*margin-top: 10px;*/
            /*background-color: blue;*/
        }
        .loading span {
            display: none;
            /*border: 16px solid #f3f3f3;*/
            /*border-top: 16px solid #43A5F5;*/
            /*border-radius: 30%;*/
            /*width: 10px;*/
            /*height: 10px;*/
            /*animation: spin 2s linear infinite;*/
            /*margin-top: 10px;*/
        }

        /*@keyframes spin {*/
        /*    0% {*/
        /*        transform: rotate(0deg);*/
        /*    }*/
        /*    100% {*/
        /*        transform: rotate(360deg);*/
        /*    }*/
        /*}*/

        /* Side note: I'm using opacity here to make the button look disabled. But you probably shouldn't set disable=true for the button on submit, even to prevent multiple clicks. There could be a server error, network problem or whatever. The user should be able to try to submit the form again any time without reloading the page. Also remember to have screen reader accessible text on your spinner. Take care of accessiblity! */
    </style>
    @include('message')

  <div class="card-body">
      <form id="example" action="/predict" method="POST" enctype="multipart/form-data">
{{--      <form action="/predict" method="POST" enctype="multipart/form-data">--}}

      @csrf
  <div class="form-group">
    <label for="Image">Upload Mammogram Image</label>

      <input type="file" class="form-control form-control-primary" name="image" id="image" required>

{{--      <input type="file" name="image" class="form-control form-control-primary" id="image" accept="image/*" onchange="previewFile(this);" required>--}}

    <small id="imageHelp" class="form-text text-muted">** Strictly, Only mammogram images should be uploaded</small>
  </div>

  <center>
{{--  <img id="previewImg" src="/examples/images/transparent.png">--}}
  </center><br/>
 <center>

{{--  <button type="submit" id="btnFetch" class="btn btn-primary btn-out-dashed">Predict</button>--}}
     <button type="submit" class="btn btn-primary btn-out-dashed" >Predict</button>
{{--     <div class="loading2"></div>--}}
{{--<div class="loading" ></div>--}}



</center>
</form>


  </div>
    <script>
        /* Example on how to use this at the bottom here. Implementation first. */

        function LoadingSpinner (form, spinnerHTML) {
            form = form || document

            //Keep track of button & spinner, so there's only one automatic spinner per form
            var button
            var spinner = document.createElement('div')
            spinner.innerHTML = spinnerHTML
            spinner = spinner.firstChild

            //Delegate events to a root element, so you don't need to attach a spinner to each individual button.
            form.addEventListener('click', start)

            //Stop automatic spinner if validation prevents submitting the form
            //Invalid event doesn't bubble, so use capture
            form.addEventListener('invalid', stop, true)

            //Start spinning only when you click a submit button
            function start (event) {
                if (button) stop()
                button = event.target
                if (button.type === 'submit') {
                    LoadingSpinner.start(button, spinner)
                }
            }

            function stop () {
                LoadingSpinner.stop(button, spinner)
            }

            function destroy () {
                stop()
                form.removeEventListener('click', start)
                form.removeEventListener('invalid', stop, true)
            }

            return {start: start, stop: stop, destroy: destroy}
        }

        //I guess these would be called class methods. They're useable without instantianing a new LoadingSpinner so you can start & stop spinners manually on any elements, for ajax and stuff.
        LoadingSpinner.start = function (element, spinner) {
            element.classList.add('loading')
            return element.appendChild(spinner)
            // return element.classList.add('loading')

        }

        LoadingSpinner.stop = function (element, spinner) {
            element.classList.remove('loading')
            return spinner.remove()
        }




        //Example on how to use LoadingSpinner

        //Bring your own spinner. You can use any html as the spinner. You can find lots of cool spinners for example here on Codepen. I'm using just plain text. Maybe technically not a spinner, but this is more about the script than graphics.
        // var exampleForm = document.querySelector('#example')
        var exampleForm = document.querySelector('#example')

        // var examp = document.querySelector('loading')

        // var exampleLoader = new LoadingSpinner(exampleForm, 'ion in Progress...')
        var exampleLoader = new LoadingSpinner(exampleForm,"ion in Progress...")

        //Delay submit so you can see the spinner spinning, then stop the loading spinner instead of submitting because we're on Codepen.
        // exampleForm.addEventListener('submit', function (event) {
        //     event.preventDefault()
        //     setTimeout(function () {
        //         exampleLoader.stop()
        //     }, 2000)
        // })

    </script>
@endsection
