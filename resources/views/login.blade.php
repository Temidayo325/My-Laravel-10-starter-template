<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login to take your Exam</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center h-screen w-screen overflow-x-hidden bg-gray-100">
	<form class="bg-white md:px-12 md:py-8 py-5 px-10 shadow-md hover:shadow-lg border-2 border-gray-200" method="post" action="">
		@csrf
		<h1 class="font-bold text-3xl py-0 pb-3 ">Log in to start exam</h1>
		@error('admission_number')
        	<p class="text-red-500 py-1 text-sm">{{ $message }}</p>
        @enderror
		<label for="admission_number" class="block font-medium mb-2">Admission number</label>
		<input type="text" name="admission_number" id="admission_number" class="py-2 px-4 border-2 border-gray-400 mb-6 w-full">

		@error('gender')
        	<p class="text-red-500 py-1 text-sm">{{ $message }}</p>
        @enderror
		<label for="gender" class="block font-medium mb-2">Choose gender</label>
		<select name="gender" id="gender" class="py-2 px-4 border-2 border-gray-400 mb-6 w-full">
			<option value="" ></option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>

		@error('state')
        	<p class="text-red-500 py-1 text-sm">{{ $message }}</p>
        @enderror
		<label for="state" class="block font-medium mb-2">State</label>
		<select name="state" id="state" class="py-2 px-4 border-2 border-gray-400 w-full">
			<option value="" ></option>
			<option value="Ekiti">Ekiti</option>
			<option value="Lagos">Lagos</option>
			<option value="Ogun">Ogun</option>
			<option value="Osun">Osun</option>
			<option value="Oyo">Oyo</option>
			<option value="kwara">Kwara</option>
		</select>

		@error('school_type')
        	<p class="text-red-500 py-1 text-sm">{{ $message }}</p>
        @enderror
		<label for="school_type" class="block font-medium mb-2">School type</label>
		<select name="school_type" id="school_type" class="py-2 px-4 border-2 border-gray-400 w-full">
			<option value="" ></option>
			<option value="public">Public</option>
			<option value="private">Private</option>
		</select>

		<div class="text-center my-2">
			<button type="submit" class="px-10 mx-auto my-2 py-4 bg-black text-white ">Start exam</button>
		</div>
	</form>
</body>
</html>