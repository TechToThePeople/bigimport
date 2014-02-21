## Avoid crashing your imports with a timeout when you have big files


Tired of the dreaded timeout when you import big files into civicrm? 

This module is a simple workaround to increase the time your server will wait before aborting when you send it a big number of contacts to import. 

I haven't put it in the core as altering the default timeout doesn't work when you are php secure. Not sure it matters as civi might not work anyway on php secure. Let me know if it's worthwhile to PR. It might be as well an issue specific to nginx. Anyway, this module helped us, we hope you'll enjoy it too.
