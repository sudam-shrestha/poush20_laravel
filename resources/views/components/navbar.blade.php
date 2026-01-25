<nav class="container flex justify-between items-center">
    <div>
        <img class="h-[40px]" src="https://codeit.com.np/storage/01KE9MC5P5YCRYWVW7HQ7JVDEK.png" alt="Logo">
    </div>

    <div class="space-x-4">
        <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'text-[red]' : '' }} ">Home</a>
        <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'text-[red]' : '' }} ">About</a>
        <a href="{{ route('service') }}" class="{{ Request::routeIs('service') ? 'text-[red]' : '' }} ">Service</a>
        <a href="{{ route('course_list') }}" class="{{ Request::routeIs('course_list') ? 'text-[red]' : '' }} ">Course</a>
        <a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'text-[red]' : '' }} ">Contact</a>
    </div>
</nav>
