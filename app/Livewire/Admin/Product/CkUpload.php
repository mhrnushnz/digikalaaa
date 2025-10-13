<?php

namespace App\Livewire\Admin\Product;


use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Livewire\Component;

class CkUpload extends Component{

    use UploadFile; //برای استفاده از trait باید نام ان تریت رو تو کلاسی که میخواهیم استفاده کنیم ب این صورت وارد کنیم تکرار میکنم نام فایل تریت رو وارد میکنیم


    public function upload($productId ,Request $request){
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $this->uploadImageInWebpFormat($file, $productId, null, null, 'content');

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('product/') . $productId . '/content/' . pathinfo($file->hashName(), PATHINFO_FILENAME) . '.webp';
            $msg = 'Image uploaded successfully';
            $response = "<script> window.parent.CKEDITOR.tools.callFunction('$CKEditorFuncNum', '$url', '$msg') </script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }



    public function render(){
        return view('livewire.admin.product.ck-upload')->layout('layouts.admin.app');
    }
}
