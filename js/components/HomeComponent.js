

export default {

  template: `
  <div>

  <div class="col  text-center ">
    <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active text-center p-4 ">

          ​<picture>
            <source media="(min-width: 768px)" srcset="images/home_page/chat_bubble_desktop.svg"
              type="image/svg+xml">
            <img class="img-fluid " src="images/home_page/chat_bubble.svg" alt="chat bubble" />
          </picture>


          <img class="img-fluid col-md-8 float-right teens" src="images/home_page/hero_img.jpg" alt="hero img 1" />
          <div class="col-md-6 m-1">
            <h3>LIVING WITH HIV/AIDS</h3>
            <p class="text-lg-left"> Telling someone you have HIV is your decision. You don’t
              have to disclose your status to family, friends, or healthcare
              providers outside of your HIV healthcare provider. </p>
            <button class="blue-btn">
              <router-link class="router-link" to="/living_with_hiv">More info</router-link>
            </button>
          </div>


        </div>

        <div class="carousel-item text-center p-4">
          ​<picture>
            <source media="(min-width: 768px)" srcset="images/home_page/chat_bubble_desktop.svg"
              type="image/svg+xml">
            <img class="img-fluid " src="images/home_page/chat_bubble.svg" alt="chat bubble" />
          </picture>


          <img class="img-fluid col-md-8 float-right teens" src="images/home_page/hero_img.jpg" alt="hero img 1" />
          <div class="col-md-6 m-1">
            <h3>LIVING WITH HIV/AIDS</h3>
            <p class="text-lg-left"> Telling someone you have HIV is your decision. You don’t
              have to disclose your status to family, friends, or healthcare
              providers outside of your HIV healthcare provider. </p>
            <button class="blue-btn">
              <router-link class="router-link" to="/living_with_hiv">More info</router-link>
            </button>
          </div>


        </div>
        <div class="carousel-item text-center p-4">
          ​<picture>
            <source media="(min-width: 768px)" srcset="images/home_page/chat_bubble_desktop.svg"
              type="image/svg+xml">
            <img class="img-fluid " src="images/home_page/chat_bubble.svg" alt="chat bubble" />
          </picture>


          <img class="img-fluid col-md-8 float-right teens" src="images/home_page/hero_img.jpg" alt="hero img 1" />
          <div class="col-md-6 text m-1">
            <h3>LIVING WITH HIV/AIDS</h3>
            <p class="text-lg-left"> Telling someone you have HIV is your decision. You don’t
              have to disclose your status to family, friends, or healthcare
              providers outside of your HIV healthcare provider. </p>
            <button class="blue-btn">
              <router-link class="router-link" to="/living_with_hiv">More info</router-link>
            </button>
          </div>

        </div>
        <div class="carousel-indicators">
          <img data-target="#client-testimonial-carousel" data-slide-to="0" class="active m-2"
            src="images/home_page/slide_dot_bold.svg" />
          <img data-target="#client-testimonial-carousel" data-slide-to="1" class=" m-2"
            src="images/home_page/slide_dot_dull.svg" />
          <img data-target="#client-testimonial-carousel" data-slide-to="2" class="m-2"
            src="images/home_page/slide_dot_dull.svg" />
        </div>
      </div>

    </div>

  </div>

  <h1 class="title text-center m-4">HIV NUMBERS</h1>
  <div class="numbers  row">
    <div class="col-md-3">
      <h3>24 500 000</h3>
      <p> people were accessing
        antiretroviral therapy
      </p>
    </div>

    <div class="col-md-3">
      <h3>17 000 000 </h3>
      <p> people became newly
        Infected with HIV
      </p>
    </div>
    <div class="col-md-3">
      <h3>37 900 000 </h3>
      <p> people globally were
        living with HIV

      </p>
    </div>
  </div>

  <h1 class="title text-center m-4">Do you know...</h1>
  <div class="know text-center container">

    <div>
      <div class="m-2">
        <h2 class="m-2">What HIV/AIDS is?</h2>
        <p>HIV stands for Human Immunodeficiency Virus. It is a virus that attacks the
          immune system. It attacks and destroys white blood cells and makes copies of
          itself in these cells, which are our body’s natural defence against illness. </p>
        <button class="blue-btn">
          <router-link class="router-link" to="/living_with_hiv">More info</router-link>
        </button>
      </div>

      <div class="m-2">
        <h2>... how people living
          with HIV/AIDS be like?</h2>
        <p>Currently, over 30% of all new HIV infections globally are estimated to occur among youth ages 15 to 25
          years. Also, increasingly, children infected at birth grow into adolescents who have to deal with their
          HIV positive status. Combining the two, there is 5 million youth living with HIV. </p>
        <button class="blue-btn">
          <router-link class="router-link" to="/living_with_hiv">More info</router-link>
        </button>
      </div>

      <div class="presudo m-2">
        <h2>... about stigma?</h2>
        <p>HIV stands for Human Immunodeficiency Virus. It is a virus that attacks the
          immune system. It attacks and destroys white blood cells and makes copies of
          itself in these cells, which are our body’s natural defence against illness. </p>
        <button class="blue-btn">
          <router-link class="router-link" to="/living_with_hiv">More info</router-link>
        </button>
      </div>
    </div>

  </div>





  <div id="floating-panel">
    <input id="address" type="textbox" value="">
    <input id="submit" type="button" value="Geocode">
  </div>
  <div id="map"></div>
</div>

    `,

  data() {
    return {
      articles: null,
      number: {

      }
    }
  },

  mounted() {
    console.log('mounted')
    let url = 'https://newsapi.org/v2/everything?qInTitle=hiv&apiKey=0b89d19105dc493bb2b0465a8152dec8&pageSize=4&sortBy=relevancy&fbclid=IwAR1OBl735Dd52VkjVPhSBe_tdsb6aUCIFx7o6JBmcmrVefni2vJ6NqEmSJs'
    fetch(url)
      .then(res => res.json())
      .then(data => this.articles = data.articles)





    //google map api
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: { lat: -34.397, lng: 150.644 }
    });
    var geocoder = new google.maps.Geocoder();

    document.getElementById('submit').addEventListener('click', function () {
      geocodeAddress(geocoder, map);
    });


    function geocodeAddress(geocoder, resultsMap) {
      var address = document.getElementById('address').value;
      geocoder.geocode({ 'address': address }, function (results, status) {
        if (status === 'OK') {
          resultsMap.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
            map: resultsMap,
            position: results[0].geometry.location
          });

          console.log(results[0].geometry.location)
          var request = {
            location: results[0].geometry.location,
            radius: 1000,
            query: 'medical center'
          };

          var service = new google.maps.places.PlacesService(map);

          service.textSearch(request, function (type_results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
              for (var i = 0; i < type_results.length; i++) {
                createMarker(type_results[i]);
              }

              map.setCenter(results[0].geometry.location);
            }
          });

        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }








    function createMarker(place) {
      var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
      });

      google.maps.event.addListener(marker, 'click', function () {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
      });
    }




  },
  created() {

  }



}