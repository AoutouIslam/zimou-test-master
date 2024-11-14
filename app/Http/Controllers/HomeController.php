<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->check()) {
            // User is logged in
            $user = auth()->user();
            $packages = Package::with(['Commune','Store','PackageStatus','DeliveryTypes'])->paginate(20);
            //dd($packages);
            return view('home',compact('packages'));
          } else {
            return redirect("login");
            // User is not logged in
          }
       
    }


    public function exportCSV()
    {
        $filename = 'employee-data.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];
    
        return   response()->stream(function () {
            $handle = fopen('php://output', 'w');
    
            // Add CSV headers
            fputcsv($handle, [
                'tracking_code',
                'store name',
                'package name',
                'status',
                'clinet full name',
                'phone',
                'willya',
                'commune',
                'delivery type',
                'status name'
            ]);
    
             // Fetch and process data in chunks
            Package::with(['Commune','Store','PackageStatus','DeliveryTypes'])->chunk(100, function ($packages) use ($handle) {
                foreach ($packages as $package) {
             // Extract data from each employee.
                    $data = [
                        isset($package->tracking_code)? $package->tracking_code : '',
                        isset($package->store->name)? $package->store->name : '',
                        isset($package->name)? $package->name : '',
                        isset($package->store->status)? $package->store->status : '',
                        isset($package->client_first_name)? $package->client_first_name . ' ' . $package->client_last_name : '',
                        isset($package->client_phone)? $package->client_phone : '',
                        isset($package->commune->willaya->name)? $package->commune->willaya->name : '',
                        isset($package->commune->name)? $package->commune->name : '',
                        isset($package->DeliveryTypes->name)? $package->DeliveryTypes->name : '',
                        isset($package->PackageStatus->name)? $package->PackageStatus->name : '',
                    ];
    
             // Write data to a CSV file.
                    fputcsv($handle, $data);
                }
            });
    
            // Close CSV file handle
            fclose($handle);
        }, 200,$headers);

        return view("home");
    }

    
    

}

