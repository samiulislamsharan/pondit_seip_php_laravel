# Session 21

## PHP form handling

After getting input from user:

1. Sanitize
2. Validation
3. Image processing
4. Store as JSON data to JSON file

   ```php
   // Putting data to an associative array
   $slide = [
        // key    =>     value
        'id'      =>     $id,
        'uuid'    =>     $uuid,
        'src'     =>     $src,
        'alt'     =>     $alt,
        'title'   =>     $title,
        'caption' =>     $caption
   ];

   $oldDataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
   $slides = json_decode($oldDataSlides);

   $slides[] = (object) $slide;
   $newDataSlides = json_encode($slides);

   if(file_exists($datasource."slideritems.json"))
   {
        $result = file_put_content($datasource."slideritems.json", $newDataSlides);
   } else {
    echo "file not found";
   }
   ```

   Note: `key` in the associative array must match the the `object` properties of the JSON format.

5. Show appropriate message to user
