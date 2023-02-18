### Task "Legacy Code Refactoring"
Refactor the following piece of legacy code.

You do not need to write code, you may instead describe all the problems you see and how you would refactor this legacy piece of
code. Bonus for thinking in an object-oriented way. Of course you may also submit stubs of the code refactored if you have time.

```
if ($_REQUEST['email']) {
    $masterEmail = $_REQUEST['email'];
}

$masterEmail = isset($masterEmail) && $masterEmail
    ? $masterEmail
    : array_key_exists('masterEmail', $_REQUEST) && $_REQUEST["masterEmail"]
    ? $_REQUEST['masterEmail'] : 'unknown';

echo 'The master email is ' . $masterEmail . '\n';

$conn = mysqli_connect('localhost', 'root', 'sldjfpoweifns', 'my_database');
$res = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $masterEmail . "'");
$row = mysqli_fetch_row($res);

echo $row['username'] . "\n";
```

### Answer
1. There are too many options for receiving the email parameter in the current code. The email can be received via $_POST, $_GET, or $_COOKIES, and the parameter name can be either email or masterEmail. I think that having so many options is unnecessary. But if so many options are required, then the code is not readable and it's possible to write those check's in my readable way.
2. The email parameter is not properly validated. Proper validation, such as checking whether it is a valid email and limiting the maximum number of characters, can help to avoid unnecessary requests to the database.
3. If validation fails, an error should be returned.
4. The credentials should not be kept in the repository. Instead, it is better to keep them in environment variables.
5. Rather than calling mysqli functions directly, it is better to create an abstraction for interacting with storage and use an implementation for MySQL.
6. Even if the input is validated, it is still better to use prepared statements with bound parameters instead of passing user input directly to a SQL query, as it can cause security vulnerabilities if the input is not validated properly.
7. If the user is not found, an error should be returned.