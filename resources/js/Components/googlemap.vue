<template >
   <GoogleMap api-key="YOUR_GOOGLE_MAPS_API_KEY" style="width: 100%; height: 500px" :center="{lat: lat ,lng:lng}" :zoom="15">
    <Marker :options="{ position: {lat: lat ,lng:lng} }" />
  </GoogleMap>
</template>
<script>
import { GoogleMap, Marker } from "vue3-google-map";
export default {
    components: { 
        GoogleMap, 
        Marker },

        data(){
            return{
                apiKey:"pgbhs7qlSTYMmRj6NKGD",
                let:null,
                lng:null,
            }
        },

    created() {
        this.getlocation()
            .then((coordinates) => {
              
                this.let=coordinates.let;
                this.lng=coordinates.lng;
            })
            .catch((error) => {
                console.log(error);
            });
    }
}
</script>