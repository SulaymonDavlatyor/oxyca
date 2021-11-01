@extends('adminlte::page')


@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet"  type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@endsection

@section('content')
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('customers.update', $customer->id) }}">
                @csrf
                @method('PUT')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="first_name" class="block font-medium text-sm text-gray-700">First name</label>
                        <input type="text" name="first_name" id="first_name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{$customer->first_name}} " />
                        @error('first_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="middle_name" class="block font-medium text-sm text-gray-700">Middle name</label>
                        <input type="text" name="middle_name" id="middle_name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('middle_name', $customer->middle_name) }}" />
                        @error('middle_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="last_name" class="block font-medium text-sm text-gray-700">Last name</label>
                        <input type="text" name="last_name" id="last_name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('last_name', $customer->last_name) }}" />
                        @error('last_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="phone_number" class="block font-medium text-sm text-gray-700">Phone number</label>
                        <input type="text" name="phone_number" id="phone_number" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('phone_number', $customer->phone_number) }}" />
                        @error('phone_number')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                        <input type="text" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('email', $customer->email) }}" />
                        @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="hidden" name="id" id="id" type="text"
                           value="{{$id}}" />


                    <div class=" px-4 py-3 bg-gray-50  sm:px-6">
                        <button class="btn btn-primary inline-flex items-center px-4 py-2  uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
