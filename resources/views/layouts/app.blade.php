<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yuki Official</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">    
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            .topics {
                height: 400px;
                background-color: white;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:18px;
            }

            .release {
                height: 700px;
                background-color: #efffef;
                display:flex;
                align-items:center;
                justify-content:center;
                color: black;
            }

            .portfolio {
                height: 1200px;
                background-color: white;
                display:flex;
                align-items:center;
                justify-content:center;
            }

            .more {
                text-align: center;
            }

            .header_space {
                height: 55px;
            }

            body {
                font-family: 'Nanum Myeongjo', serif;
            }

            .sub {
                color: gray;
                font-size: 14px;
            }

            .title a:hover{
                color:black;
            }

            .menu {
                text-align: right;
                font-size: 20px;
                padding : 0 15px;
            }

            .menu a:hover {
                color:gray;
            }

            .image {
                height: auto;
            }

            .text {
                font-size: 12px;
            }

            .music_date {
                font-size: 10px;
                color:gray;
            }

            .topic {
                font-size: 18px;
            }

            a:hover {
                color:gray;
            }

            .date {
                color:gray;
                font-size:15px;
            }

            .hour  {
                font-size: 14px;
            }

            .prof_img {
                text-align: center;
            }

            .profile {
                font-size: 13px;
            }

            .works_image {
                text-align: center;
            }

            span {
            display: inline-block;
            font-size: 8px;
            color:gray;
            }

            html, body {
            height: 100%;
            margin: 0;
            }

            .wrapper {
            min-height: 100%;
            margin-bottom: -50px;
            }

            footer {
                width:100%
            }

            .news_link {
                color:royalblue;
            }

            .movie-wrap {
                position: relative;
                padding-bottom: 56.25%; /*アスペクト比 16:9の場合の縦幅*/
                height: 0;
                overflow: hidden;
            }
            
            .movie-wrap iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            @media screen and (max-width:480px) {
                .topics {
                    font-size: 15px;
                }
                .date {
                    font-size:11px;
                }
                .mobile_img {
                    width:100%;
                }
                .release {
                    height: 550px;
                }
                .portfolio {
                    height: 750px;
                }
            }
        }

        
        </style>
    </head>
    <body>
    <div class="container">
        <div class="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="{{ url('/') }}">&emsp;Yuki Official&nbsp;<span>Yuki Yoshida Official Website</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon"></div>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">&emsp;Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/news') }}">&emsp;News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">&emsp;Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/works') }}">&emsp;Works</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/music') }}">&emsp;Music</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/radio') }}">&emsp;Radio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://qiita.com/y2_engineer" target="_blank">&emsp;Qiita&emsp;</a>
            </li>
            </div>
            </nav>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        </div>    
    </div>   
    <div class="header_space"></div> 
        @yield('content')
        <br>
        <footer id='footer'>
            <footer class="text-left bg-dark text-white">
                    <div class="container">
                        <br>
                        <div class="hour"> TOTAL INPUT TIME : 463 HOURS </div>
                        <a href="https://twitter.com/y2_engineer?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @y2_engineer</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <!-- Place this tag where you want the button to render. -->
                        <a class="github-button" href="https://github.com/y2world" aria-label="Follow @y2world on GitHub">Follow @y2world</a>
                        <!-- Place this tag in your head or just before your close body tag. -->
                        <script async defer src="https://buttons.github.io/buttons.js"></script>  
                        <br>
                        <br>
                    </div> 
            </footer>  
        </footer>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>

    <script>

        $(function(){
        //フッターを最下部に固定
            var $footer = $('#footer');
            if(window.innerHeight > $footer.offset().top + $footer.outerHeight() ) {
                $footer.attr({'style': 'position:fixed; top:' + (window.innerHeight - $footer.outerHeight()) + 'px;' });
            }
        })

    </script>     
    </body>
</html>
