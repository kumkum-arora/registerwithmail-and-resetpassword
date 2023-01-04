<html>

<head>
    <title>Register Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- component -->

    <body class="bg-gray-10 ">
        <form action="{{url('sign-submit/')}}" method="post">
            {{csrf_field()}}
            <div class="flex justify-center h-screen w-screen items-center">
                <div class="w-full md:w-1/3 flex flex-col items-center ">

                    <!-- text login -->
                    <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">REGISTER</h1>
                    <!--username input -->
                    <div class="w-3/4 mb-6">
                        <input type="text" name="username" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Username">
                    </div>
                    <!-- email input -->
                    <div class="w-3/4 mb-6">
                        <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Email">
                    </div>

                    <!-- password input -->
                    <div class="w-3/4 mb-6">
                        <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " placeholder="Password">
                    </div>
                    <!-- remember input -->
                    <div class="w-3/4 flex flex-row justify-between">
                        <div class=" flex items-center gap-x-1">

                            <label for="" class="text-sm text-slate-400"><a href="login">Already Registered ?</a></label>
                        </div>
                        <div>
                            <a href="#" class="text-sm text-slate-400 hover:text-blue-500">Forgot?</a>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="w-3/4 mt-4">
                        <input type="submit" class="py-4 bg-blue-400 w-full rounded text-blue-50 font-bold hover:bg-blue-700" name="save" value="Register">
                    </div>
                </div>
            </div>
        </form>
    </body>
</body>

</html>