
# Hack Kosice Marathon: OrderMealApp

*A template for projects submitted to HK Marathon 2021. You can [fork this repository](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo) and use it as a starting point.*

## Team

42

### Team members

- Breznický Timotej, SPŠE-PO
- Mazúr Matej, SPŠE-PO
- Poľanský Marko, SPŠE-PO

## Description

Our project about meal ordering for example for Sudolabs, shows at the home page who order from where and when.  
After logging in you can see your profile in which are data like what are you ordering today, and your order history. If you are today orderer, you can see the list of orders from all people so you can see what they want.

## Presentation of Protoype

[![Obrázok1](https://user-images.githubusercontent.com/41269745/114224997-199d6900-9972-11eb-81e4-a4f3dd65ea29.png)](https://youtu.be/064sRkHrSnY)

## How to try

[Link for website: https://ordermeal.azurewebsites.net/](https://ordermeal.azurewebsites.net/)

You can register as new user of the system.  
Or you can use the preset account from us:
```
Mail: test@profile.me
Password: zgt39nqcDzsw:gS
```

![](https://mazur.blob.core.windows.net/obrazky/Screenshot%202021-04-09%20160304.png?sp=rl&st=2021-04-09T13:50:44Z&se=2092-12-10T13:50:00Z&sv=2020-02-10&sr=b&sig=UX5GOhtkkZIMzvjg55C4rEVm1FPFm4Af51mzRNcxm%2FY%3D)

## Presentation

*List any links to your presentation or additional materials that you want to share with the judges.*

## Challenges and accomplishments

Our team is proud on ourselves because this is for 2/3 of team members first hackathon.

*Is there anything unexpected that you learned over the course of this project?*

*Is there something your team is particularly proud of, related to this project?*

## Next steps

[ ] Fill the web with real Data  
[ ] 

*What do you need to do next to turn this prototype into a working solution?*

## License

[MIT License](https://github.com/42-HackKosice/1B-OrderMealApp/blob/main/LICENSE)



</br>  
</br>  
</br>  
</br>  

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
 
 ## Project Challenge

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
