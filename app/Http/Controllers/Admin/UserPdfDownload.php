<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class UserPdfDownload extends Controller
{
    public function downloadPdf($id)
    {
        $user=User::find($id);
       //return storage::download(storage_path().'/app'.'/'.$user->file_path,'MyDocument');
       //return response()->download(storage_path().'/app'.'/'.$user->file_path);
        //storage::download(storage_path().'/app'.'/'.$request->filePath,'MyDocument');
        $headers = array(
            'Content-Type: application/pdf',
          );
        return Response::download(storage_path().'/app'.'/'.$user->file_path, $user->email.'.pdf', $headers);
    }

    public function deletePdf($id)
    {
        $user=User::find($id);
        Storage::delete(storage_path().'/app'.'/'.$user->file_path);
        $user->update([
            'file_path'=>'',
            'pdf_password'=>'',
        ]);
        return back();
       //return storage::download(storage_path().'/app'.'/'.$user->file_path,'MyDocument');
       //return response()->download(storage_path().'/app'.'/'.$user->file_path);
        //storage::download(storage_path().'/app'.'/'.$request->filePath,'MyDocument');
       
    }
}
