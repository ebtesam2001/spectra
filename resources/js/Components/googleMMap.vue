<template >
  <GoogleMap api-key="AIzaSyC1NUvQ3FbdZzZYR-p9zKW1B_LIkJsY1fA" class="map" :center="center" :zoom="15"
  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
    <Marker :options="{ position: center }" />
  </GoogleMap>
</template>
<!-- <script>
import { GoogleMap, Marker } from 'vue3-google-map';
export default {
    name: "DemoComponent",
    components: {
        GoogleMap,
        Marker
    },

    data() {
        return {
            apiKey: "pgbhs7qlSTYMmRj6NKGD",
            lat: null,
            lng: null,
        }
    },
    created() {
        this.$getLocation()
            .then((coordinates) => {
                this.lat = coordinates.lat;
                this.lng = coordinates.lng;
            })
            .catch((error) => {
                console.log(error);
            });

    }
}
</script> -->
<style>
.map {
  width: 130%;
  height: 540px;
  position: absolute;
  bottom: 7%;
  right: 7%;

}

@media(max-width: 1024px) {
  .map {
    width: 100%;
    height: 430px;
    bottom: 5;
    right: 7%;
    width: 400px;
    height: 450;
  }
}

@media(max-width: 425px) {
  .map {
    width: 100%;
    height: 400px;
    bottom: 10;
    right: 8%;
  }
}

@media(max-width: 375px) {
  .map {
    width: 150%;
    height: 400px;
    bottom: 8;
    right: 10%;
  }
}
</style>
<script>
import { defineComponent } from "vue";
import { GoogleMap, Marker } from "vue3-google-map";

export default defineComponent({
  data() {
    return {
      mapOptions: {
        styles: [
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{ color: '#3A9494' }, { lightness: 17 }],
          },
          {
            featureType: 'landscape',
            elementType: 'geometry',
            stylers: [{ color: '#837676' }, { lightness: 20 }],
          },
          // Add more styling as needed
        ],
      },
    };
  },
  components: { GoogleMap, Marker },
  setup() {
    const center = { lat: 15.369445, lng: 44.191006 };

    return { center };
  },
});
</script>