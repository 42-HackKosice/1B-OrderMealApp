# 1B-OrderMealApp
App to order meal for company lunch


## How to set up
1. [Stiahnuť php alebo xampp] (v xamppe je php a je tam este lokalny mail server aj mysql databaza ale malo by to byt jedno)
2. [Stiahnuť composer](https://getcomposer.org/)

    po nainštalovaní do konzoly cd <miesto kde chcete projekt>
  - clone https://github.com/42-HackKosice/1B-OrderMealApp.git
  - cd 1B-OrderMealApp
  - premenovať súbor .env.example na .env
  - composer install
  - php artisan key:generate
  - php artisan migrate 
  - php artisan serve na spustenie webu lokalne 


- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).




For the open part, let's take a look into how and when we order lunch.Currently, it can take us up to 30 minutes to figure this out. This is a lot of time we'd rather save and spend on building products.
There are 3 questions we need to answer each day:
1. Who is ordering today?
2. Which restaurant we want to order from?
3. When do we want to order?  

Your mission is to optimise this process.  The result could be a chatbot, a mobile app or a web app. If you feel like doing a bit of extra work, you could store the information gathered in the process and expose statistical data about our favourite meals, restaurants.
Keep in mind, that the app could very well be later developed by someone else, so make sure your code is clean!
If you are not a programmer, a UX, or a design for an app would be great!
For you data scientists out there, it'd be great if we could have a data model that would serve as a recommendation machine for helping us with lunch decisions.
I guess there is nothing else to say, then we are looking forward to your submissions. Good luck!