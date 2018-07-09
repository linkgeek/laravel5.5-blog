<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404页面-{{ $config['WEB_NAME'] }}</title>
    <style>
        a{color: #259AEA;}

        #error{
            margin: 10% auto;
            width: 540px;
            height: 540px;
        }
        #error .cartoon {
            float: left;
            width: 143px;
            height: 118px;
            background: url(./images/home/error.png);
        }
        #error .text {
            float: left;
            margin-left: 20px;
            width: 294px;
        }
        #error .text h2 {
            font-size: 24px;
            color: #333;
            font-weight: normal;
            margin-top: 16px;
            background: url(./images/home/lost.png) no-repeat 2px center;
            text-indent: -9999px;
        }
        #error .text p {
            width: 294px;
            font-size: 14px;
            color: #838383;
            white-space: nowrap;
        }
    </style>
    <script>
        var i = 5;
        var intervalid;
        intervalid = setInterval("fun()", 1000);
        function fun() {
            if (i == 0) {
                window.location.href = "/";
                clearInterval(intervalid);
            }
            document.getElementById("mes").innerHTML = i;
            i--;
        }
    </script>
</head>
<body>
<div id="error">
    <div class="cartoon"></div>
    <div class="text">
        <h2>hi！真不巧，你要找的网页走丢了。</h2>
        <p>将在 <span id="mes">5</span> 秒钟后返回 <a href="/">{{ $config['WEB_NAME'] }}</a> 首页</p>
    </div>
</div>
</body>
</html>
