# Session 21

## Query String

A query string refers to the portion of a  URL that comes after question ('?') and includes parameter-value pairs. Query string can be accessed and extract its parameters using the `$_GET` superglobal variable.

```php
;// URL: http://exmaple.com/page.php?param1=value1&param2=value2

// Accessing the query string parameters
$param1 = $_GET['param1']; // "value1"
$param2 = $_GET['param2']; // "value2"
```

Value obtained from the `$_GET` superglobal are treated as strings.

## HTTP Methods


| SN | METHOD      | Description                                                                                                                                                                       |
| :--- | ------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1  | **GET**     | The GET method is used to retrieve information from the given server using a given URI. Requests using GET should only retrieve data and should have no other effect on the data. |
| 2  | **HEAD**    | Same as GET, but transfers the status line and header section only.                                                                                                               |
| 3  | **POST**    | A POST request is used to send data to the server, for example, customer information, file upload, etc. using HTML forms.                                                         |
| 4  | **PUT**     | Replaces all current representations of the target resource with the uploaded content.                                                                                            |
| 5  | **DELETE**  | Removes all current representations of the target resource given by a URI.                                                                                                        |
| 6  | **CONNECT** | Establishes a tunnel to the server identified by a given URI.                                                                                                                     |
| 7  | **OPTIONS** | Describes the communication options for the target resource.                                                                                                                      |
| 8  | **TRACE**   | Performs a message loop-back test along the path to the target resource.                                                                                                          |

## HTML Forms

Must include attributes in HTML forms to process data in PHP.

1. Actions in `<form>...</form>` tag
2. `type` and `name` in `<input>...</input>` tag
3. `type=submit` in button
