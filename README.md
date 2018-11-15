# Online-users-tracking

This simple PHP script will give you the feature to see your online users in your website.

You can see the online users details, for this you must have user management in your application. This script will provide yout list of users from your users master who are online.

There is a flat file to store online users data. This file will be updated whenever a new user login to your website

In this script I have used dummy users list, you have to replace that part with your user master.

# Sample result
<img src='https://github.com/manimuthu/online-users-tracking/blob/master/output-sample.png' alt='track online users - PHP' />

# Getting Started

Just include the `send-request.php` in the footer of your application file and this script will start work on your website.
Make sure there is a read/write permission for your PHP application to the flat file `online-users.txt`

update the session value in `store-users.php` and pass your users unique value to this.
Based on this value, query your users master at `fetch-users.php`

In `view-users.php` every minute you can see the updated list of users. Here I have used one minute delay to request the server
