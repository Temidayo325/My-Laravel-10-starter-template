<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>--Assessment page--</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<style>
	/*	body{
			 Lined background 
	    	background-image: linear-gradient(#d1d5db 1px, transparent 0px);
	    	background-size: 100% 2em;

		    
		    Display the content on top of the lines.
		    The line height must be the same as the background size defined above
		    
	    	background-position-y: 1.5rem;
	    	line-height: 2.2em;
		}*/
	</style>
</head>
<body class="">
	<div class="mx-auto px-10 py-10">
		{{-- {{dd($questions);}} --}}
		<h2 class="font-medium text-2xl">Section B</h2>
		<ol class="list-decimal">
			@foreach($questions as $items)
				@foreach($items as $numbers)
					<li>
						@foreach($numbers as $numerals)
							{{$numerals[0]}}
							<ul class="list-roman ml-6">
								@for ($i = 1; $i < count($numerals); $i++)
							    	<li>{{ $numerals[$i] }}</li> 
								@endfor
							</ul>
						@endforeach
					</li>
				@endforeach
			@endforeach
		</ol>
		
	</div>
</body>
</html>