<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="tailwind.css" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
  </head>
  <body>
    <section class="bg-gray-50 font-poppins">
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
          <a href="#" class="flex items-center mb-6 text-5xl font-semibold text-gray-900">
              NoshNow    
          </a>
          <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <h1 class="text-xl font-semibold leading-tight tracking-tight text-gray-900 md:text-2xl">
                      Create an account
                  </h1>
                  <form class="space-y-4 md:space-y-6" action="#">
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                          <input type="form" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                      </div>
                      <div>
                          <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                          <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                      </div>
                      
                      <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Create an account</button>
                      <p class="text-sm font-light text-gray-500 ">
                          Already have an account? <a href="signin.html" class="font-medium text-primary-600 hover:underline ">Login here</a>
                      </p>
                  </form>
              </div>
          </div>
      </div>
    </section>


    <!-- React stuff idfk -->
    <div id="root"></div>
    <script type="module" src="/src/main.jsx"></script>
  </body>
</html>
