<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>jQuery Date Range Picker Demo</title>
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="dist/daterangepicker.min.css" />
    <style type="text/css">
        #wrapper {
            width: 800px;
            margin: 0 auto;
            color: #333;
            font-family: Tahoma, Verdana, sans-serif;
            line-height: 1.5;
            font-size: 14px;
        }

        .demo {
            margin: 30px 0;
        }

        .date-picker-wrapper .month-wrapper table .day.lalala {
            background-color: orange;
        }

        .options {
            display: none;
            border-left: 6px solid #8ae;
            padding: 10px;
            font-size: 12px;
            line-height: 1.4;
            background-color: #eee;
            border-radius: 4px;
        }

        .date-picker-wrapper.date-range-picker19 .day.first-date-selected {
            background-color: red !important;
        }

        .date-picker-wrapper.date-range-picker19 .day.last-date-selected {
            background-color: orange !important;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <section>
        <form action="/dat" method="post">
        @csrf
            <h2 id="demonstrations">Demonstrations</h2>
            <ol>
                <li class="demo">
                    Default settings: <input type="string" name="timerange" id="date-range0" value="">
                    <pre class="options">
                    {}</pre>
                </li>
            </ol>
            <button type="submit">View</button>
            </form>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
            type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js"
            type="text/javascript"></script>
        <script src="src/jquery.daterangepicker.js"></script>
        <script src="demo.js"></script>

        <script>
            $(function () {
                $('a.show-option').click(function (evt) {
                    evt.preventDefault();
                    $(this).siblings('.options').slideToggle();
                });
            })
        </script>
    </div>
</body>

</html>
