<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik Sekolah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <style>
        body {
            background: url(<?php echo base_url('assets/img/slider/sliderB1.jpg')  ?>);
            padding: 0;
            margin: 0;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            overflow: hidden;
        }


        .vid-container {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .bgvid.back {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
        }

        .inner {
            position: absolute;
        }

        .inner-container {
            width: 400px;
            height: 400px;
            position: absolute;
            top: calc(50vh - 200px);
            left: calc(50vw - 200px);
            overflow: hidden;
        }

        .bgvid.inner {
            top: calc(-50vh + 200px);
            left: calc(-50vw + 200px);
            filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
            -webkit-filter: blur(10px);
            -ms-filter: blur(10px);
            -o-filter: blur(10px);
            filter: blur(10px);
        }


        .box {
            position: absolute;
            /* height: 130%; */
            /* width: 100%; */
            font-family: Helvetica;
            color: #fff;
            /* border: 2px solid white; */
            /* border-radius: 27px; */
            background: #E2EFFF;
        }

        .box h1 {
            text-align: center;
            margin: 30px 0;
            font-size: 30px;
        }

        .box input {
            display: block;
            width: 75%;
            margin: 20px auto;
            padding: 15px;
            background: rgba(0, 0, 0, 0.2);
            color: #fff;
            border: 0;
        }

        .box input:focus,
        .box input:active,
        .box button:focus,
        .box button:active {
            outline: none;
        }

        .box button {
            /* background: #6f72ff; */
            border: 0;
            color: #fff;
            padding: 10px;
            font-size: 20px;
            width: 330px;
            margin: 20px auto;
            display: block;
            cursor: pointer;
        }

        .box button:hover {
            /* background: #acaeff; */
            border: 0;
            color: #fff;
            padding: 10px;
            font-size: 20px;
            width: 330px;
            margin: 20px auto;
            display: block;
            cursor: pointer;
        }

        .box button:active {
            /* background: #acaeff; */
        }

        .box p {
            font-size: 14px;
            text-align: center;
        }

        .box p span {
            cursor: pointer;
            color: #666;
        }
    </style>

</head>

<body>

    <div class="vid-container">
        <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
            <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
        </video>
        <div class="inner-container">
            <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
                <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
            </video>
            <div class="box" style="margin-bottom:20px ;">
                <h1 style="color:#2e2e2e"> MASUKAN NIS </h1>
                <form method="POST" action="<?php echo base_url('c_login/siswa_cek')  ?>">

                    <div class="row">
                        <input type="number" min="0" placeholder="123456" name="nis" required />
                        <input type="number" min="0" placeholder="minimal 8-character" name="pass" required />
                        <div class="col-lg-12 ">
                            <button class="btn btn-primary" id="submit" type="submit" name="login">Masuk</button>
                            <br>
                            <a href=" <?php echo base_url('c_master') ?>">
                                <CENTER>
                                    <h5 style="color: red;">back </h5>
                                </CENTER>
                                <br>
                            </a>
                        </div>


                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>

</body>

</html>

<script>
    // Easy way to wait for all videos to load before start playing

    var promises = [];

    function makePromise(i, video) {
        promises[i] = new $.Deferred();
        // This event tells us video can be played all the way through, without stopping or buffering
        video.oncanplaythrough = function() {
            // Resolve the promise
            promises[i].resolve();
        }
    }
    // Pause all videos and create the promise array
    $('video').each(function(index) {
        this.pause();
        makePromise(index, this);
    })

    // Wait for all promises to resolve then start playing
    $.when.apply(null, promises).done(function() {
        $('video').each(function() {
            this.play();
        });
    });
</script>