# Hack Kosice Marathon: OrderMealApp

*A template for projects submitted to HK Marathon 2021. You can [fork this repository](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo) and use it as a starting point.*

## Team

42

### Team members

- Breznický Timotej, SPŠE-PO
- Mazúr Matej, SPŠE-PO
- Poľanský Marko, SPŠE-PO

## Description

*A clear statement of the challenges, issues, problems or gaps that your project solves and a brief description of how your project tackles the areas. What is the value of your solution? Who are the target users?*

## Protoype

*Describe the basic functionality of your prototype. What are the features you were able to implement? What features would you like to implement?*

## How to try

*List any URLs relevant to demonstrating your prototype, e.g. a live url where judges can preview your app. Note that judges won't be able to setup anything in their computers.*

## Presentation

*List any links to your presentation or additional materials that you want to share with the judges.*

## Challenges and accomplishments

*Is there anything unexpected that you learned over the course of this project?*

*Is there something your team is particularly proud of, related to this project?*

## Next steps

*What do you need to do next to turn this prototype into a working solution?*

## License

*This repository includes an [unlicense](http://unlicense.org/) statement though you may want [to choose a different license](https://choosealicense.com/).*




## How to set up
1. [Stiahnuť php alebo xampp] (v xamppe je php a je tam este lokalny mail server aj mysql databaza ale malo by to byt jedno)
2. [Stiahnuť composer](https://getcomposer.org/)

3. po nainštalovaní do konzoly cd (miesto kde chcete projekt) ja mám C:\xampp/htdocs/laravelapps
```
https://github.com/42-HackKosice/1B-OrderMealApp.git
cd 1B-OrderMealApp
```
premenovať súbor **env.example na .env**
```
composer install
php artisan key:generate
php artisan migrate
php artisan serve - na spustenie webu lokalne 
```
 
 ## ABOUT PROJECT

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
