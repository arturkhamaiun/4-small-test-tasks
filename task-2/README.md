### Task "Check a Pull Request"
Documentation states the following:
```
ENDPOINT: https://api.supermetrics.com/assignment/register
METHOD: POST
PARAMS:
    client_id: ju16a6m81mhid5ue1z3v2g0uh
    email: your@email.address
    name: Your Name
RETURNS:
    sl_token: This token string should be used in the subsequent query. Please note that this token will only last 1 hour
    from when the REGISTER call happens. You will need to register and fetch a new token when you need it.
    client_id: returned for informational purposes only
email: returned for informational purposes only
```
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
2. The code is sending query string parameters, but if the endpoint only accepts POST requests, I think it only accepts body parameters and it's not secure to send user data using query string parameters.
3. Parameters should not be hardcoded.
4. Concatenated parameters can be improved e.g. using http_build_query function.
5. I would change the variable name to $responseBody because it more accurately describes the contents of the variable.
