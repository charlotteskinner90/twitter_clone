**Getting Started**

To get started, setup Laravel as per the guide [https://laravel.com/docs/master/installation]
<br />[https://laravel.com/docs/master/configuration]<br />

To get your application running, run<br />
`npm run watch` & `php artisan serve`

**Application structure**

```
resources 
│
│ - main.js
│   //This is the starting point for your app, this controls everything
│    
│ - app.vue
│   //This is the default vue file that includes your app component
│
└─js   
 │
 └─components
 │     │
 │     └─ views
 │          └─ home.vue
 │          //This is the default file that your router points to
 └─router
 │   └─ index.js 
 │   // This file contains all the routing for your vue project
 │   
 └─store     
      └─ index.js 
      //This file contains all the vuex persisted state code for sessions etc...
      

```
To add additional pages, you must add them to the router file.
I have added some as an example.

_All items I have added as part of this tutorial contain the string `laravel-vue-git-code`_

You can see that home.vue calls a component called `<userHub />`<br />
which in turn calls a component called `<userName />`.

`<userName />` fires off an axios request to an endpoint within the routing called getUser.<br />
To test this, run the migration using `php artisan migrate fresh` and add a user to your database.

**Now you have the basics, get creating!**



