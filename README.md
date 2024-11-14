# Zimou Technical test

1. Create login/register UI
1. Create 5000 Stores for each store add 100 packages using seed or factories
1. Create item in the menu to show packages with the following columns: tracking_code, store name, package name, status, client full name, phone, wilaya, commune, delivery type, status name
1. Add a button to export all the packages in csv or excel file with the same columns above
1. (optional) If you add create package will be an extra point 😉

Notes:

- Dont need to send a PR, just fork the repo and work on your repo
- Please keep the commits and the DB structure as it is
- You are free to use any third party package or any UI dashboard

Good luck 😃

- the sql database used is included with the code.
- the code uses factory to create a randomized strore/package
- when you migrate using 'php artisan migrate' you will see that the db is empty.
- before seeding add wilaya/commune ,delivery type ,statuses to 
the Db because they are issential. 
- fist you need to migrate and if the seeds are not populated 
you need to do 'php artisan db:seed --class=StoreSeeder' and then
 'php artisan db:seed --class=PackageSeeder' 
- after that you need to create an account which will not take more then 2 min
- when you login it will redirect you directly to the
 dashboard where you find the seeded packages and their info.
- you can also export then by clicking on export button on the top .

