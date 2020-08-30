# Live Chat

This application uses the [Lumen Framework](https://lumen.laravel.com/docs) (a laravel micro framework) under the hood.

For developing or running this application locally it is recommended to use *Homestead* and *Vagrant* tools 

As this application uses SQLite, you need to install php-sqlite on your machine.
for Ubuntu:

`$ sudo apt-get install php-sqlite3`

create an empty file for database:

`$ touch database/database.sqlite`
 
  
For executing Database migration:

`$ php artisan migrate`

`$ php artisan db:seed`

URLs for test:

Shawn: http://192.168.10.10/chat.html?token=UUU099HHJHGFhjgsdflkkcdls

Mason: http://192.168.10.10/chat.html?token=1234hjghsadf58hjgsdf

John: http://192.168.10.10/chat.html?token=123456DRFFYGHFKgsdafjhfdf

##Nice to add!
Currently, it uses AJAX pulling to retrieve new messages from the server.
 
Using push based mechanism will reduce the server load and decrease the message delivery latency.
The SSE(Server sent event) is one of the most useful APIs for developing server push mechanism.

Laravel do not support this technology out of the box and can be added with [EventSauce](https://eventsauce.io/).
