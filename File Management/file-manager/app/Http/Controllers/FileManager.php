<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;

class FileManager extends Controller
{
    public function index(Request $request)
    {
        $temp = array();
        $path = 'public/storage/';
        $prev_folder = "";

        $new = str_replace('-',"/",$request->name);
        if($request->name != null){
            $prev_folder = $request->name;
            $path .= $new."/";
        }

        $arr = explode('-', $request->name);

            for ($i = 0; isset($arr[$i]); $i++) {
                if (!isset($arr[$i + 2])) {
                    unset($arr[$i]);
                }
            }

            $arr = implode('-', $arr);

        $count = 0;

        foreach(Storage::Directories($path) as $files){
            $a = explode("/",$files);
            for($i = 0;isset($a[$i]);$i++){
                if(!isset($a[$i+1])){
                    $count++;
                    $temp[$count]['file_or_folder'] = "Folder";
                    $temp[$count]['filename'] = $a[$i];
                    $temp[$count]['foldername'] = $request->name.$temp[$count]['filename'];
                    if($path == 'public/storage/'){
                        $temp[$count]['prevfoldername'] = "/";
                    }else{
                        $temp[$count]['prevfoldername'] = $arr."-";
                    }
                    $temp[$count]['filesize'] = 0;
                    $temp[$count]['filelastmodified'] = 0;
                }
            }
       }

        foreach(Storage::Files($path) as $files){
            $a = explode("/",$files);
            for($i = 0;isset($a[$i]);$i++){
                if(!isset($a[$i+1])){
                    $count++;
                    $temp[$count]['file_or_folder'] = "File";
                    $temp[$count]['foldername'] = $path;
                    $temp[$count]['filename'] = $a[$i];
                    $temp[$count]['prevfoldername'] = $arr."-";
                    $temp[$count]['filesize'] = Storage::size($path.$a[$i]);
                    $temp[$count]['filelastmodified'] = Storage::lastModified($path.$a[$i]);
                }
            }
       }

       if($temp == null){
        $temp['empty']=true;
       }

        return view('welcome', [
            "files_info" => $temp
        ]);
    }

    public function show_edit_file(Request $request)
    {
        $url = html_entity_decode($request->url);
        $url = str_replace("-","/",$url);

        $get = "public/storage".$url.$request->name;

        $content = Storage::get($get);

        return Response()->json(array(
            'error'=>$get,
            'content'=>$content,
            'filename'=>$request->name,
        ));
    }

    public function edit_file(Request $request)
    {
        $url = html_entity_decode($request->url);
        $url = str_replace("-","/",$url);

        $get = "public/storage".$url.$request->edit_file_filename;


        $result = Storage::put($get, $request->edit_file_content);


        return Response()->json(array(
            'hello'=>'this is a response',
            'response'=>$result
        ));
    }

    public function add_file(Request $request)
    {
        $url = html_entity_decode($request->url);
        $url = str_replace("-","/",$url);

        $get = "public/storage".$url.$request->add_file_filename;


        $result = Storage::put($get, $request->add_file_content);


        return Response()->json(array(
            'hello'=>'this is a response',
            'response'=>$result
        ));
    }

    public function add_folder(Request $request)
    {
        $url = html_entity_decode($request->url);
        $url = str_replace("-","/",$url);

        $get = "public/storage".$url.$request->add_folder_name;


        $result = Storage::makeDirectory($get);


        return Response()->json(array(
            'hello'=>'this is a response',
            'response'=>$result
        ));
    }

    public function delete(Request $request)
    {
        $url = html_entity_decode($request->url);
        $url = str_replace("-","/",$url);


        if($request->folder_or_file == 'file'){
            $get = "public/storage".$url.$request->filename;
            $result = Storage::delete($get);
        }else{
            $get = "public/storage/".$request->filename;
            $get = str_replace("-","/",$get);
            $result = Storage::deleteDirectory($get);
        }


        return Response()->json(array(
            'hello'=>'this is a response',
            'response'=>$result
        ));
    }
}
