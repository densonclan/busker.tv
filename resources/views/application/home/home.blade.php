<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="og:title" content="@yield('title')" >
    <meta name="twitter:title" content="@yield('title')">
    <meta name="description" property="og:description" content="@yield('description')">
    <meta name="twitter:description" content="@yield('description')">
    <link rel="stylesheet" type="text/css" href="{{ url( elixir('css/application.css') ) }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    	<link rel="stylesheet" type="text/css" href="{{ url( elixir('css/application.css') ) }}">

	</head>
	<body>

	<nav class="navbar navbar-fixed-top navbar-inverse">
	    <div class="container">
	        <div class="inside">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                    <span class="sr-only">Toggle</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="{{  route('root') }}">{{ Session::get('current_lang')->site_title }}</a>
	            </div>
	            <div id="navbar" class="navbar-collapse collapse">
	                @include('partials.menu.application')
	            </div>
	        </div>
	    </div>
	</nav>		<!-- /.navbar -->

		<!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<h1>Bootstrap three column image gallery</h1>
						<p>Posted by <span class="glyphicon glyphicon-user"></span> <a href="#">Matthijs Jansen</a> on <span class="glyphicon glyphicon-time"></span> 12 January 2015 10:00 am</p>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="row margin-b-2">
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="row margin-b-2">
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="row margin-b-2">
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="row margin-b-2">
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive thumbnail" src="http://placehold.it/700x350" alt="">
					<div class="caption">
						<h4><a href="#">Image title</a></h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<hr>
			<footer class="margin-tb-3">
				@include('partials.common.languages', ['languages' => Config::get('languages'), 'route' => 'app.language.change' ])

				<script>
				    @if(!empty(Config::get('settings')->analytics_id))
				        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				        ga('create', '{{ Config::get('settings')->analytics_id }}', 'auto');
				        ga('send', 'pageview');
				    @endif
				    @if(!empty(Config::get('settings')->disqus_shortname))
				        var disqus_shortname = '{{ Config::get('settings')->disqus_shortname }}',
				            disqus_config = function () {
				                this.language = "{{ session('language_code') }}";
				            };
				        (function() {
				            var d = document, s = d.createElement('script');
				            s.src = '//'+ disqus_shortname + '.disqus.com/embed.js';
				            s.setAttribute('data-timestamp', +new Date());
				            (d.head || d.body).appendChild(s);
				        })();
				    @endif
				</script>
			</footer>
		</div>
		<!-- /.container-fluid -->

		<!-- JQuery scripts -->
<script src="{{ url( elixir('js/application.js') ) }}" type="text/javascript"></script>
  </body>
</html>

