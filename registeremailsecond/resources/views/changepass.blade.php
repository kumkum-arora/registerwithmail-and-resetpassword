<html>

<head>
    <title>Register Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- component -->

    <body class="bg-gray-10 ">
        <form action="{{url('changepass-submit/')}}" method="post">
            {{csrf_field()}}
            <div class="flex justify-center h-screen w-screen items-center">
                <div class="w-full md:w-1/3 flex flex-col items-center ">
                    <!-- text login -->
                    <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">Forgot password?</h1>
                    <!--username input -->

                    <!-- email input -->
                    <div class="w-3/4 mb-6">
                        <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Enter Email">
                    </div>

                    <!-- button -->
                    <div class="w-3/4 mt-4">
                        <input type="submit" class="py-4 bg-blue-400 w-full rounded text-blue-50 font-bold hover:bg-blue-700" value="Reset Password">
                    </div>
        </form>
        </div>
        </div>
    </body>
</body>

</html>