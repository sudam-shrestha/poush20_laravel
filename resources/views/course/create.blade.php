<x-layout>


    <section class="py-10">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Course Create</h1>
                <a href="{{ route('course_list') }}" class="bg-[green] text-white px-4 py-1 rounded-4xl">
                    go back
                </a>
            </div>


            <div class="mt-8">
                <form action="{{ route('course_store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="border border-gray-300 w-full px-2 py-1" placeholder="Course Name">
                        </div>

                        <div>
                            <label for="price">Price (in Rs.)</label>
                            <input type="number" name="price" id="price"
                                class="border border-gray-300 w-full px-2 py-1" value="999">
                        </div>

                        <div>
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="duration"
                                class="border border-gray-300 w-full px-2 py-1">
                        </div>

                        <div class="col-span-2">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="6" class="border border-gray-300 w-full px-2 py-1"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="bg-[green] text-white px-5 py-2 rounded-lg">Save
                                Record</button>
                        </div>
                    </div>

                    {{-- <div>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" class="border border-gray-300">
                    </div>

                    <div>
                        <label for="gender">Gender</label>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" value="male"
                            class="border border-gray-300">

                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female" value="female"
                            class="border border-gray-300">
                    </div>

                    <div>
                        <label for="course">Course</label>
                        <label for="web">Web</label>
                        <input type="checkbox" name="course" id="web" value="web"
                            class="border border-gray-300">

                        <label for="app">Mobile App</label>
                        <input type="checkbox" name="course" id="app" value="app"
                            class="border border-gray-300">
                    </div>

                    <div>
                        <label for="qualification">Qualification</label>
                        <select name="qualification" id="qualification" class="border border-gray-300">
                            <option value="see">SEE</option>
                            <option value="intermediate">+2/intermediate</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="master">Master</option>
                            <option value="other">Other</option>
                        </select>
                    </div> --}}
                </form>
            </div>
        </div>
    </section>

</x-layout>
