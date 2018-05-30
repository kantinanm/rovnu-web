<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
class DownloadController extends Controller
{
    //
    public function download( $filename = '' ) {
    // Check if file exists in storage directory
        $file_path = storage_path() ."\\". $filename;
        //dd($file_path);

        if ( file_exists( $file_path ) ) {
            // Send Download
            return \Response::download( $file_path, $filename );

        } else {
            // Error exit( 'Requested file does not exist on our server!' );
        }
    }

    public function getDownloadPDF($filename = ''){

        $file = public_path()."\\download\\".$filename;
        //dd($file);
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, $filename,$headers);
    }
}
