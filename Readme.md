ABOUT PROJECT
	The primary purpose is to show the current real-time situation of the COVID-19 patients reported in Sri Lanka. There is a HELP & GUIDE section and users secrtion


REQUIREMENTS:
	PHP installed
	MySql installed
	Node JS installed
	Up and running Apache and MySql servers (XAMPP v3.2.4 / WAMP)
	
TECH STACK AND VERSIONS
	PHP 8.0.3
	MySql 10.4.18-MariaDB
	XAMPP v3.2.4
	Laravel 8.0.3
	Node JS 14.15.4
	NuxtJS 2.15.7 (VueJS 2.6.14)

INSTRUCTIONS:
	* GIT clone the project.
	
	* Backend Configurations.

		-Create new database called "intervest".

		-Navigate to inside of "lahiru-madushan-intervest/backend" folder'.

		-Update dependancies.
			composer update

		-Run migration.
			php artisan migrate
			
		-Run below command to install passport .
			php artisan passport:install
			
		-SET Authentication clients
			Open the "oauth_clients" table in database and set below client 'secret' according to the client 'id'.
				Client ID 1 (Personal): q9IWMqp26JcEOLn61oCvtqCZpEr4Nzb2b5Dy1MDZ
				Client ID 2 (Password): wmLLo3R2qySIQ18Xvjnp8OJ25tmZRiG3cPVh1Itm
			OR
			Replace the newly generated 'client_secret' for client ID 2 in "frontend/components/login/login.vue/line number 62"
			
		-Start the API server.
			php artisan serve
			
		-Run below comand to get COVID updates from "The Health Promotion Bureau (HPB)" API.
			php artisan covidUpdate

	* Frontend Configurations.
	
		-Navigate to inside of "lahiru-madushan-intervest/frontend" folder'

		-Install dependancies.
			npm install

		-Run below command to start.
			npm run dev
				OR
			npm run start

	* Application is up and running.


LOGIN 
	URL: http://localhost:3000/login
	Email: interwest@mailinator.com
	Password: Abcd!234


Frontend running at: http://localhost:3000/
Backend Rinning at: http://127.0.0.1:8000/api/


Frontend URLs
	http://localhost:3000/login
	http://localhost:3000/ (public)
	http://localhost:3000/guides (public)
	http://localhost:3000/guides/new
	http://localhost:3000/users
	http://localhost:3000/users/new


Encryption keys generated.
	Personal access client created successfully.
	Client ID: 1
	Client secret: q9IWMqp26JcEOLn61oCvtqCZpEr4Nzb2b5Dy1MDZ
	
	Password grant client created successfully.
	Client ID: 2
	Client secret: wmLLo3R2qySIQ18Xvjnp8OJ25tmZRiG3cPVh1Itm


Update covide details using below command:
	php artisan covidUpdate
	
Composer Packages
	Laravel
	Laravel passport
	
NPM Packages
	NuxtJS (VueJS)
	Bootstrap-vue
	Axios
	Auth
	






// php artisan db:seed --class=ClientIDsSeeder