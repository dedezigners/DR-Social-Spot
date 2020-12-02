<template>
    <div class="card is-weather-card has-background-image" style="background-image: url('/assets/img/illustrations/cards/weather-bg.svg');">
        <div class="card-body">
            <div class="temperature">
                <span>71</span>
            </div>
            <div class="weather-icon">
                <div>
                    <load-svg feather="sun" />
                    <h4>Sunny</h4>
                    <div class="details">
                        <span>Real Feel: 78° </span>
                        <span>Rain Chance: 5%</span>
                    </div>
                </div>
            </div>
            <div class="previsions">
                <div class="day">
                    <span>Mon</span>
                    <load-svg feather="sun" />
                    <span>69°</span>
                </div>
                <div class="day">
                    <span>Tue</span>
                    <load-svg feather="cloud-lightning" />
                    <span>74°</span>
                </div>
                <div class="day">
                    <span>Wed</span>
                    <load-svg feather="cloud-lightning" />
                    <span>73°</span>
                </div>
                <div class="day">
                    <span>Thu</span>
                    <load-svg feather="sun" />
                    <span>68°</span>
                </div>
                <div class="day">
                    <span>Fri</span>
                    <load-svg feather="cloud-drizzle" />
                    <span>55°</span>
                </div>
                <div class="day">
                    <span>Sat</span>
                    <load-svg feather="cloud-rain" />
                    <span>58°</span>
                </div>
                <div class="day">
                    <span>Sun</span>
                    <load-svg feather="sun" />
                    <span>64°</span>
                </div>
            </div>
            <div class="current-date-location has-text-centered">
                <span class="date">Sunday, 18th 2018</span>
                <span class="location"> <i data-feather="map-pin"></i> Los Angeles, CA</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Weather'
}
</script>
