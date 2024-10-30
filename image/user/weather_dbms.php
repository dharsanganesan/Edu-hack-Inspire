<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-image:url("../image/backweather.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}

.container {
  flex-grow: 1;
  overflow: hidden;
  max-width: 425px;
  border-radius: 10px;
  position: relative;
  background:white;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.search-section {
  display: flex;
  gap: 10px;
  padding: 25px;
  align-items: center;
}

.search-section .input-wrapper {
  height: 54px;
  width: 100%;
  position: relative;
}

.search-section .input-wrapper span {
  position: absolute;
  top: 50%;
  left: 17px;
  pointer-events: none;
  transform: translateY(-50%);
}

.search-section .search-input {
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 1rem;
  font-weight: 500;
  border-radius: 6px;
  text-transform: uppercase;
  padding: 0 20px 0 50px;
  border: 1px solid #beb0ff;
  background: #fff;
  transition: 0.1s ease;
}

.search-section .search-input:focus {
  border-color: #5f41e4;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.14);
}

.search-section .search-input::placeholder {
  text-transform: none;
}

.search-section .location-button {
  height: 54px;
  width: 56px;
  cursor: pointer;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  background: #fff;
  color: #5f41e4;
  border: 1px solid #beb0ff;
  transition: 0.3s ease;
}

.search-section .location-button:hover {
  color: #fff;
  background: #5f41e4;
  border-color: #5f41e4;
}

.search-section .location-button span {
  font-size: 1.3rem;
}

.no-results {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 100%;
  display: none;
  padding: 40px;
  text-align: center;
  align-items: center;
  flex-direction: column;
  transform: translate(-50%, -50%);
  transition: 0.2s ease;
}

body.show-no-results .no-results {
  display: flex;
}

.no-results .title {
  font-weight: 700;
  margin: 25px 0 15px;
}

.no-results .message {
  font-weight: 500;
  line-height: 23px;
}

body.show-no-results .weather-section {
  visibility: hidden;
}

.weather-section .current-weather {
  display: flex;
  padding: 20px 0 50px;
  flex-direction: column;
  align-items: center;
}

.current-weather .weather-icon {
  width: 140px;
  aspect-ratio: 1;
}

.current-weather .temperature {
  font-size: 3.38rem;
  margin: 23px 0;
  display: flex;
}

.current-weather .temperature span {
  font-size: 1.56rem;
  font-weight: 500;
  margin: 5px 0 0 2px;
}

.current-weather .description {
  font-weight: 500;
  font-size: 1.25rem;
}

.hourly-weather {
  padding: 16px 25px;
  border-top: 1px solid #d5ccff;
}

.hourly-weather .weather-list {
  display: flex;
  gap: 41px;
  overflow-x: auto;
  padding-bottom: 16px;
  margin-bottom: -16px;
  scrollbar-width: thin;
  scrollbar-color: transparent transparent;
}

.hourly-weather:hover .weather-list {
  scrollbar-color: #bfbfbf transparent;
}

.hourly-weather .weather-list .weather-item {
  display: flex;
  gap: 7px;
  width: 60px;
  font-weight: 500;
  flex-direction: column;
  align-items: center;
}

.hourly-weather .weather-item .weather-icon {
  width: 28px;
  aspect-ratio: 1;
}


/* Responsive media query code for small screen */
@media (max-width: 624px) {
  body {
    padding: 15px;
  }

  .search-section {
    padding: 20px;
  }

  .no-results {
    padding: 30px;
  }

  .hourly-weather {
    padding: 16px 20px;
  }

  .hourly-weather .weather-list {
    gap: 32px;
  }
}
  </style>
<body>

  <div class="container">
    <!-- Search section -->
    <div class="search-section">
      <div class="input-wrapper">
        <span class="material-symbols-rounded">search</span>
        <input type="search" placeholder="Enter a city name" class="search-input">
      </div>
      <button class="location-button">
        <span class="material-symbols-rounded">my_location</span>
      </button>
    </div>

    <!-- No results message -->
    <div class="no-results">
      <img src="./image/result.png" alt="No results found" class="icon">
      <h3 class="title">Something went wrong!</h3>
      <p class="message">We're unable to retrieve the weather details. Enure you've entered a valid city or try again later.</p>
    </div>

    <!-- Container for displaying weather data -->
    <div class="weather-section">
      <div class="current-weather">
        <img src="../image/clear.png" class="weather-icon">
        <h2 class="temperature">00<span>°C</span></h2>
        <h5 class="description">Weather description</h5>
      </div>

      <!-- Hourly weather forecast list -->
      <div class="hourly-weather">
        <ul class="weather-list"></ul>
      </div>
    </div>
  </div>
<!-- 
  <script src="script.js"></script> -->
</body>
<script>
  const searchInput = document.querySelector(".search-input");
const locationButton = document.querySelector(".location-button");
const currentWeatherDiv = document.querySelector(".current-weather");
const hourlyWeather = document.querySelector(".hourly-weather .weather-list");

const API_KEY = "cc48c9d4fbf54014bcc160951242708"; // API key

// Weather codes for mapping to custom icons
const weatherCodes = {
  clear: [1000],
  clouds: [1003, 1006, 1009],
  mist: [1030, 1135, 1147],
  rain: [1063, 1150, 1153, 1168, 1171, 1180, 1183, 1198, 1201, 1240, 1243, 1246, 1273, 1276],
  moderate_heavy_rain: [1186, 1189, 1192, 1195, 1243, 1246],
  snow: [1066, 1069, 1072, 1114, 1117, 1204, 1207, 1210, 1213, 1216, 1219, 1222, 1225, 1237, 1249, 1252, 1255, 1258, 1261, 1264, 1279, 1282],
  thunder: [1087, 1279, 1282],
  thunder_rain: [1273, 1276],
}

// Display the hourly forecast for the next 24 hours
const displayHourlyForecast = (hourlyData) => {
  const currentHour = new Date().setMinutes(0, 0, 0);
  const next24Hours = currentHour + 24 * 60 * 60 * 1000;

  // Filter the hourly data to only include the next 24 hours
  const next24HoursData = hourlyData.filter(({ time }) => {
    const forecastTime = new Date(time).getTime();
    return forecastTime >= currentHour && forecastTime <= next24Hours;
  });

  // Generate HTML for each hourly forecast and display it
  hourlyWeather.innerHTML = next24HoursData.map((item) => {
    const temperature = Math.floor(item.temp_c);
    const time = item.time.split(' ')[1].substring(0, 5);
    const weatherIcon = Object.keys(weatherCodes).find(icon => weatherCodes[icon].includes(item.condition.code));

    return `<li class="weather-item">
            <p class="time">${time}</p>
            <img src="../image/${weatherIcon}.png" class="weather-icon">
            <p class="temperature">${temperature}°</p>
          </li>`;
  }).join('');
};

// Fetch and display weather details
const getWeatherDetails = async (API_URL) => {
  window.innerWidth <= 768 && searchInput.blur();
  document.body.classList.remove("show-no-results");

  try {
    // Fetch weather data from the API and parse the response as JSON
    const response = await fetch(API_URL);
    const data = await response.json();

    // Extract current weather details
    const temperature = Math.floor(data.current.temp_c);
    const description = data.current.condition.text;
    const weatherIcon = Object.keys(weatherCodes).find(icon => weatherCodes[icon].includes(data.current.condition.code));

    // Update the current weather display
    currentWeatherDiv.querySelector(".weather-icon").src = `../image/${weatherIcon}.png`;
    currentWeatherDiv.querySelector(".temperature").innerHTML = `${temperature}<span>°C</span>`;
    currentWeatherDiv.querySelector(".description").innerText = description;

    // Combine hourly data from today and tomorrow
    const combinedHourlyData = [...data.forecast?.forecastday[0]?.hour, ...data.forecast?.forecastday[1]?.hour];

    searchInput.value = data.location.name;
    displayHourlyForecast(combinedHourlyData);
  } catch (error) {
    document.body.classList.add("show-no-results");
  }
}

// Set up the weather request for a specific city
const setupWeatherRequest = (cityName) => {
  const API_URL = `https://api.weatherapi.com/v1/forecast.json?key=${API_KEY}&q=${cityName}&days=2`;
  getWeatherDetails(API_URL);
}

// Handle user input in the search box
searchInput.addEventListener("keyup", (e) => {
  const cityName = searchInput.value.trim();

  if (e.key == "Enter" && cityName) {
    setupWeatherRequest(cityName);
  }
});

// Get user's coordinates and fetch weather data for the current location
locationButton.addEventListener("click", () => {
  navigator.geolocation.getCurrentPosition(
    (position) => {
      const { latitude, longitude } = position.coords;
      const API_URL = `https://api.weatherapi.com/v1/forecast.json?key=${API_KEY}&q=${latitude},${longitude}&days=2`;
      getWeatherDetails(API_URL);
      window.innerWidth >= 768 && searchInput.focus();
    },
    () => {
      alert("Location access denied. Please enable permissions to use this feature.");
    }
  );
});

// Initial weather request for London as the default city
setupWeatherRequest("New Delhi");
  </script>
</html>