<template>
    <div>
        <!-- Note that 'ref' is important here (value can be anything). read the description about `ref` below. -->
        <vue-croppie 
            ref="croppieRef" 
            :enableOrientation="true"
            :boundary="{ width: 300, height: 300}"
            @result="result"
            @update="update">
        </vue-croppie>

        <!-- the result -->
        <img v-bind:src="cropped">
<v-btn @click="bind()">Bind</v-btn>
        <!-- <button @click="bind()">Bind</button> -->
        <!-- Rotate angle is Number -->
          <v-btn @click="rotate(-90)">Rotate Left</v-btn>
        <v-btn @click="rotate(90)">Rotate Right</v-btn>
        <v-btn @click="crop()">Crop Via Callback</v-btn>
        <v-btn @click="cropViaEvent()">Crop Via Event</v-btn>
    </div>
</template>

<script>
export default {
    mounted() {
        // Upon mounting of the component, we accessed the .bind({...})
        // function to put an initial image on the canvas.
        this.$refs.croppieRef.bind({
            url: 'http://i.imgur.com/fHNtPXX.jpg'
        })
    },
    data() {
        return {
            cropped: null,
            images: [
                'http://i.imgur.com/fHNtPXX.jpg',
                'http://i.imgur.com/ecMUngU.jpg',
                'http://i.imgur.com/7oO6zrh.jpg',
                'http://i.imgur.com/miVkBH2.jpg'
            ]
        }
    },
    methods: {
        bind() {
            // Randomize cat photos, nothing special here.
            let url = this.images[Math.floor(Math.random() * 4)]

            // Just like what we did with .bind({...}) on 
            // the mounted() function above.
            this.$refs.croppieRef.bind({
                url: url,
            });
        },
        // CALBACK USAGE
        crop() {
            // Here we are getting the result via callback function
            // and set the result to this.cropped which is being 
            // used to display the result above.
            let options = {
                format: 'jpeg', 
                circle: false
            }
            console.log(options);
            this.$refs.croppieRef.result(options, (output) => {
                this.cropped = output;
            });
        },
        // EVENT USAGE
        // cropViaEvent() {
        //     console.log(options);

        //     this.$refs.croppieRef.result(options);
        // },
        result(output) {
            this.cropped = output;
        },
        update(val) {
            console.log(val);
        },
        rotate(rotationAngle) {
            // Rotates the image
            this.$refs.croppieRef.rotate(rotationAngle);
        }
    }
}
</script>