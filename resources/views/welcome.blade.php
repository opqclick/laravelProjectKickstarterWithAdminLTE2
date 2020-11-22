<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .bg-video-wrap {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;
            background: url(https://designsupply-web.com/samplecontent/vender/codepen/20181014.png) no-repeat center center/cover;
        }
        video {
            min-width: 100%;
            min-height: 100vh;
            z-index: 1;
        }
        .overlay {
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            background-image: linear-gradient(45deg, rgba(0,0,0,.3) 50%, rgba(0,0,0,.7) 50%);
            background-size: 3px 3px;
            z-index: 2;
        }
        h1 {
            text-align: center;
            color: #fff;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 3;
            max-width: 400px;
            width: 100%;
            height: 50px;
        }
    </style>
</head>
<body>
<div class="bg-video-wrap">
    <video src="{{asset('videos/intro.mp4')}}" loop controls autoplay>
    </video>
    <div class="overlay">
    </div>
    <h1>Welcome! to <a href="https://www.facebook.com/bdbhgaming">BD BraveHeart Gaming</a>...</h1>
    </h1>
</div>
</body>
</html>
