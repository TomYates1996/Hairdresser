Use as a base for copying to create other projects that use my cms-core package.

Setup Instructions
1) Copy the file to your own folder - run the following in order;
   git clone https://github.com/tomyates1996/cms-base.git [CLIENT_NAME]
2) Remove old git
   cd [CLIENT_NAME]
   rm -rf .git or Remove-Item -Recurse -Force .git
3) Initialise a new git project
   git init
   git add .
   git commit -m "Initial Commit"
3.5) Create a repo on github then in cmd/powershell
   git remote add origin https://github.com/YOUR_GITHUB/REPO_NAME.git
   git branch -M main
4) Push your new project to github
   git push -u origin main
5) Open your project in code editor and run:
   cp .env.example .env
6) run: composer install
7) run: php artisan key:generate
8) Fill out the .env with the settings you want to use.
9) composer update
10) php artisan migrate
11) npm install
12) for Herd, navigate to C:\Windows\System32\drivers\etc\ and open hosts in notepad and add: 127.0.0.1 [address-given-on-herd].test near the bottom (might need to run as admin)
13) php artisan vendor:publish --provider="BaseCms\Providers\CmsServiceProvider" --tag=cms-config  (If error logging in and class App\Models\User not found)
14) npm install vue-chartjs chart.js driver.js
15) php artisan storage:link
