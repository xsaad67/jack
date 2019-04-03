<?php

function changeDateTime($string,$format='F d, Y'){
	try{
		return Carbon\Carbon::parse(trim($string))->format('Y-m-d H:i:s');
	}catch(\Exception $e){
		return NULL;
	}
	
}

function removeTrailingSlash($string){
	return trim(preg_replace('/\s\s+/', ' ', $string));
}

function newGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
    return $guidText;
}


function savingTags($tags,$id){
        $tags = explode(",",$tags);
        foreach($tags as $tag){
            $tag =  \App\Tag::firstOrCreate([ 'name'=>strtolower($tag) ]);
            if($tag->id){
                $taggable = new \App\Taggable();
                $taggable->tag_id = $tag->id;
                $taggable->taggable_id = $id;
                $taggable->taggable_type = "App\Quote";
                $taggable->save();
            }
        }
    }


if(!function_exists('zipData')){
    function zipData($folder, $zipTo) {
        if (extension_loaded('zip') === true) {
            if (file_exists($source) === true) {
                $zip = new ZipArchive();
                if ($zip->open($destination, ZIPARCHIVE::CREATE) === true) {
                    $source = realpath($source);
                    if (is_dir($source) === true) {
                        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
                        foreach ($files as $file) {
                            $file = realpath($file);
                            if (is_dir($file) === true) {
                                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                            } else if (is_file($file) === true) {
                                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                            }
                        }
                    } else if (is_file($source) === true) {
                        $zip->addFromString(basename($source), file_get_contents($source));
                    }
                }
                return $zip->close();
            }
        }
        return false;
    }
}

// public function indexNewOldOrValue(){
//     $quotes = Post::quotes()->where('')
// }
?>