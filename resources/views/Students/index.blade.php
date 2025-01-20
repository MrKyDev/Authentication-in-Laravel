@include('partials.header')
    <x-messages />
    <section class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold text-green-800 text-center mb-3">List of Student</h1>

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-green-700">
                <thead class="text-md text-white uppercase bg-green-700">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            First Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Last Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Age
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-green-100 border-b">
                        <td class="py-4 px-6">
                            {{ $student->first_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->last_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->age }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@include('partials.footer')
