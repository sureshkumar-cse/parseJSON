# parseJSON
To parse complex JSON data file.

To parse json file in php following are the steps used in parseJSON.php file:
  1.  Read the JSON file using file_get_contents();
  2.  Decode the JSON file using json_decode(); Use two parameters in this method first to pass json file data and second pass TRUE to convert decoded json into associative array.
  3.   Now use foreach loop to traverse the JSON decoded array's elements. Use foreach($json_array as $objects){} to traverse a JSON array and use foreach($objects as $key => $value){} to traverse a JSON object.
