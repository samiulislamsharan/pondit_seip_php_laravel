# Session 25

## File Uploading

Use `$_FILES` to begin handling file.

NOTE: To upload large files configure it on `php.ini` file. Review those directives ini entries:

- `max_input_time`
- `max_execution_time`
- `upload_max_filesize`
- `post_max_size`

## Move uploaded files

The form layout for uploading files should be like this.

```html
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
  <!-- MAX_FILE_SIZE must precede the file input field -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <!-- Name of input element determines name in $_FILES array -->
  Send this file: <input name="userfile" type="file" />
  <input type="submit" value="Send File" />
</form>
```

`move_uploaded_file(string $from, string $to)`

This function checks to ensure that the file designated by from is a valid upload file (meaning that it was uploaded via PHP's HTTP POST upload mechanism). If the file is valid, it will be moved to the filename given by to.

```php
<?php
// Uploading multiple files
$uploads_dir = '/uploads';
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
?>
```
