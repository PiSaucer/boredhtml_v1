$file_to_search = "abc.pdf";

search_file('.',$file_to_search);




function search_file($dir,$file_to_search){

$files = scandir($dir);

foreach($files as $key => $value){

    $path = realpath($dir.DIRECTORY_SEPARATOR.$value);

    if(!is_dir($path)) {

        if($file_to_search == $value){
            echo "file found<br>";
            echo $path;
            break;
        }

    } else if($value != "." && $value != "..") {

        search_file($path, $file_to_search);

    }  
 } 
}