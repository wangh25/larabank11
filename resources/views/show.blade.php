<!DOCTYPE html>
<html>
 <head>
 <title>Account {{ $account->id }}</title>
 </head>
 <body>
 <h1>Account no {{ $account->accountno }}</h1>
 <ul>
 <li>Balance: {{ $account->balance }}</li>
 <li>Interest: {{ $account->interest }}</li>
 </ul>
 </body>
</html>