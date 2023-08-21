# WEATHER_FILE
Weather Forecast Application


 Project Overview

The Weather Forecast Website is a web-based tool designed to provide users with accurate and up-to-date weather information. By utilizing external APIs, PHP for data processing, and HTML/CSS for user interface design, the application fetches and displays a weather forecast for a specified location like cities.

Features

Real-Time Weather Data
The application fetches weather data from an external API, ensuring that users receive the latest and most accurate information. The application dynamically generates weather forecast, complete with weather icons, dates, and temperature information.
 Also enhance the forecast to include additional weather information such as wind speed, and atmospheric pressure. Enhance error handling to provide meaningful feedback to users in case of API failures or data processing issues.

 File Directories

•	index.php file: The signup page allows new users to create accounts by providing their necessary information.
Features
Registration fields: Name, email/username, password. Also add google  oauth signup and facebook sign up button which work with the help of their api’s. 

•	Signin.php file: The login page provides users with a secure way to access their accounts. Users enter their registered email/username and password to authenticate. And Google oauth
•	style.css file: In this file main work is to style the html file so that website look beautiful, attractive and responsive also.
•	Script.js file: It is optional if you want to try dynamically change.
•	user.php file: Which is most important file where php script that handles the API request, data processing, and HTML generation. 
•	news.php file: In this file we add newsapi and fetch the data with the help of api. And display The Top 10 news From BBC News.
•	data.json file: An optional JSON file for caching weather data, 5days weather cast data and  news data reducing API requests.


 Project Implementation

Day 1: Project Setup and HTML Layout and CSS 

I have to decide how to build the project and how many files will be created and what should be the user interface also. Then create the index.html and style.css  file with the basic HTML structure and Simple CSS . Set up the main container for the weather forecast. Make directories so that simplify the way how to complete it. 

Day 2: Fetching API Data with PHP 

	Set up the user.php file for handling API requests. Like- News Api and weather forecast Api also.
	Obtain an API key from a weather data provider (Open weather map). Open weather map is an online service, owned by Open weather Ltd, that provides global weather data via API, including current weather data, forecasts, nowcasts and historical weather data for any geographical location. Fetch and validate weather data from the API.
	Obtain an API key from a news data provider (News Api). It is a web service and API (Application Programming Interface) that provides developers with access to a wide range of news articles from various news sources worldwide. It allows developers to retrieve structured and up-to-date news content programmatically, which can then be integrated into their applications, websites, or services.
	Facebook OAuth Login: With the help of apiid and api secret  
	 Google OAuth Login: Which is basically used in signin.php file. OAuth 2.0 allows users to share specific data with an application while keeping their usernames, passwords, and other information private. For example, an application can use OAuth 2.0 to obtain permission from users to store files in their Google Drives. This OAuth 2.0 flow is specifically for user authorization.


Day 3: Processing Data and Generating PHP

	Process the JSON data retrieved from the API in user.php.
	Extract relevant information such as dates, temperatures, weather humidity, date and time.
	Integrate the PHP-generated content into the index.html layout. Generate dynamic HTML content to display the weather forecast. And  testing weather search ability and their functionalities also.

User Interface and Interactions

View Current Weather Forecast:
When user opening the application and search cities, they are immediately presented with a weather forecast.
Day and Date: Displays the day of the week and the date. 
Temperature: Shows the temperature for the day, presented in degrees Celsius (°C). Users might also see details such as humidity, wind speed, and atmospheric pressure.
Also add 5 Days Weather Forecast Shows the temperature for the next five day, presented in degrees Celsius (°C). Users might also see details such as humidity, wind speed, and atmospheric pressure, date, and gust.

View Current News Nation:
	Display top 10 news on the news.php page which is come from BBC News. Where we see their images and title, description, author and published time.   



Usage Instructions

	Obtain an API key from a weather data provider (OpenWeatherMap).Which is free to use online.
	Replace 'YOUR_API_KEY' and 'YOUR_API_URL' in user.php with your API information.
	Open user.php in a web browser to access the weather forecast for the specified location.
	Obtain an API key from a weather data provider (NewsApi). Which is free to use online.
	Replace 'YOUR_API_KEY' and 'YOUR_API_URL' in news.php with your API information.
	Open news.php in a web browser to access the weather forecast for the specified location.



