### Task
You receive a pull request with the following line of code. Please comment/review on this code.

- What do you think about its quality?
- Can you find any problems?
- How would you suggest to improve it?

```
<?php
$tokenInfo = file_get_contents(
    'https://api.supermetrics.com/assignment/register?'
    . 'client_id=ju16a6m81mhid5ue1z3v2g0uh'
    . '&email=my@name.com'
    . '&name=My%20Name'
);
```

### Answer
1. I believe the code is not working because it is sending a GET request, but according to the documentation, the endpoint only accepts POST requests.
2. The code is sending query string parameters, but if the endpoint only accepts POST requests, I think it only accepts body parameters. Also I think it's not secure to send user data using query string parameters.
3. I would change the variable name to $responseBody because it more accurately describes the contents of the variable.
4. Parameters should not be hardcoded.
5. Concatenated parameters can be improved e.g. using http_build_query function.
