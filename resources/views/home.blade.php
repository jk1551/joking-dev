@extends('layouts.guest')

@section('title', 'Home')

@section('content')
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                    Hi, I'm <span class="text-blue-600">Joseph King</span>
                </h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">
                    Software Engineer with experience in developing efficient and scalable applications.
                </p>
            </div>

            <div class="relative ms-4">
                <img class="w-full rounded-md" src="https://media.licdn.com/dms/image/C4E03AQGGVoUbeFEAwg/profile-displayphoto-shrink_800_800/0/1647121527291?e=1722470400&v=beta&t=b6NcLzMQ11DCVP4ge8zv49Wl4yT7_oAYjjdhCOgeDfg" alt="Joseph King">
                <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"></div>
            </div>
        </div>
        <!-- End Hero -->
    </div>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Timeline -->
        <div>
            <!-- Heading -->
            <div class="ps-2 my-2 first:mt-0">
                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-neutral-400">
                    May 2022 - Present
                </h3>
            </div>
            <!-- End Heading -->

            <!-- Item -->
            <div class="flex gap-x-3">
                <!-- Icon -->
                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                    <div class="relative z-10 size-7 flex justify-center items-center">
                        <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
                    </div>
                </div>
                <!-- End Icon -->

                <!-- Right Content -->
                <div class="grow pt-0.5 pb-8">
                    <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                        Software Engineer at Cynergy Wellness
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                        Designed and implemented HL7 parsers with C# to receive Clinical and Drug test results from Quest and Labcorp, transforming results into the FHIR model and reporting via REST APIs for internal review tools and customer reporting.
                        Built internal apps with React MUI and Typescript, improving tools for doctors and nurses.
                        Ensured code quality through unit and integration tests using XUnit for backend and Jest and Robot for frontend.
                        Managed Azure Cloud resources for better user experience and seamless deployments.
                    </p>
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Heading -->
            <div class="ps-2 my-2 first:mt-0">
                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-neutral-400">
                    Mar 2021 - May 2022
                </h3>
            </div>
            <!-- End Heading -->

            <!-- Item -->
            <div class="flex gap-x-3">
                <!-- Icon -->
                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                    <div class="relative z-10 size-7 flex justify-center items-center">
                        <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
                    </div>
                </div>
                <!-- End Icon -->

                <!-- Right Content -->
                <div class="grow pt-0.5 pb-8">
                    <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                        Technical Implementation Specialist at Everly Health
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                        Directed the configuration and maintenance of the Everly Health API with over 10 clients simultaneously.
                        Improved documentation and increased training material by at least 25% each quarter.
                        Achieved a 100% launch rate for assigned projects in 2022 and met Tech Support SLA goal of 95% responses within 24 hours.
                        Led client on-boarding from a technical perspective and guided them through user acceptance testing and production validation.
                    </p>
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Heading -->
            <div class="ps-2 my-2 first:mt-0">
                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-neutral-400">
                    Jan 2020 - March 2020
                </h3>
            </div>
            <!-- End Heading -->

            <!-- Item -->
            <div class="flex gap-x-3">
                <!-- Icon -->
                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                    <div class="relative z-10 size-7 flex justify-center items-center">
                        <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
                    </div>
                </div>
                <!-- End Icon -->

                <!-- Right Content -->
                <div class="grow pt-0.5 pb-8">
                    <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                        Intern at Motosho
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                        Assisted in creating forms in React for users to update information about their club.
                        Worked on the design of the form pages with MUI theme.
                    </p>
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Projects Heading -->
            <div class="ps-2 my-2 first:mt-0">
                <h3 class="text-xs font-medium uppercase text-gray-500 dark:text-neutral-400">
                    Projects
                </h3>
            </div>
            <!-- End Projects Heading -->

            <!-- Project Item -->
            <div class="flex gap-x-3">
                <!-- Icon -->
                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                    <div class="relative z-10 size-7 flex justify-center items-center">
                        <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
                    </div>
                </div>
                <!-- End Icon -->

                <!-- Right Content -->
                <div class="grow pt-0.5 pb-8">
                    <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                        Well Monitor
                    </h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                        Used Python to take inputs from a Raspberry Pi about well depth and other metrics like temperature and barometer.
                        Developed with Python FastAPI and Redis.
                    </p>
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Project Item -->
        </div>
        <!-- End Timeline -->
    </div>
@endsection
