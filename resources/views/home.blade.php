@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div>
        
        <a  href="{{ route('export') }}" target="_blank" class="btn btn-success">Export dat to  CSV</a >
      
        </div>

            <div class="card">
                
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
            <tr>
                <th scope="col" class="px-8 py-3">
                tracking_code
                </th>
                <th scope="col" class="px-8 py-3">
                store name
                </th>
                <th scope="col" class="px-8 py-3">
                package name
                </th>
                <th scope="col" class="px-8 py-3">
                status
                </th>
                <th scope="col" class="px-8 py-3">
                client full name
                </th>
                <th scope="col" class="px-8 py-3">
                phone
                </th>
                <th scope="col" class="px-8 py-3">
                wilaya
                </th>
                <th scope="col" class="px-8 py-3">
                commune
                </th>
                <th scope="col" class="px-8 py-3">
                delivery type
                </th>
                <th scope="col" class="px-8 py-3">
                status name
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $package)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$package->tracking_code}}
                </th>
                <td class="px-6 py-4">
                {{$package->store->name}}
                </td>
                <td class="px-6 py-4">
                {{$package->name}}
                </td>
                <td class="px-6 py-4">
                {{$package->store->status}}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$package->client_first_name . '  ' . $package->client_last_name}}
                </th>
                <td class="px-6 py-4">
                {{$package->client_phone .  ' ' . $package->client_phone2 }}
                </td>
                <td class="px-6 py-4">
                {{$package->commune->willaya->name}}
                </td>
                <td class="px-6 py-4">
                {{$package->commune->name}}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$package->DeliveryTypes->name}}
                </th>
                
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$package->PackageStatus->name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
<div class="mt-4">
    {{  $packages->links('pagination::bootstrap-4') }}

</div>
                </div>
            
            </div>
        </div>
    </div>
   
</div>

@endsection
