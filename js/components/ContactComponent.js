export default {
    template: `
    <div>
    <div class="jumbotron text-center hero-basic">
    <div class="hero-img-talk text-center p-4 row flex-row-reverse align-items-end">

    ​<picture>
      <source media="(min-width: 768px)" srcset="images/home_page/chat_bubble_desktop.svg"
        type="image/svg+xml">
      <img class="img-fluid " src="images/home_page/chat_bubble.svg" alt="chat bubble" />
    </picture>


    <img class="img-fluid col-md-6 float-right teens" src="images/hiv_test_hero_img.jpg" alt="hero img 1" />
    <div class="col-md-5 px-3 mb-lg-5">
      <h3>CONTACT</h3>
      <p class="text-lg-center"> HIV Testing is the only way to know for sure if you have HIV.
      The HIV test is a blood test. There are two ways this test can be done.</p>
        <div class="d-flex row justify-content-center m-auto">

        <object data="images/youtube.svg" type="image/svg+xml" class="img-fluid "></object>
            <object data="images/twitter.svg" type="image/svg+xml" class="img-fluid "></object>
            <object data="images/snapchat.svg" type="image/svg+xml" class="img-fluid "></object>
            <object data="images/instagram.svg" type="image/svg+xml" class="img-fluid "></object>
            <object data="images/facebook.svg" type="image/svg+xml" class="img-fluid "></object>
    
        </div>
    
    </div>

        </div>
        </div>

    <div class="container">

    <h1 class="title text-center m-4 p-4">Support</h1>
      <h2 class="text-center mb-3">Need help? Contact Us!</h2>
     <div class="d-flex m-4 text-center row">
  
     <div class="col-md-6">
     <h4>Email:</h4>
     <p>teentalks@teentalks.ca</p>
     </div>

     <div class="col-md-6">
     <h4>Mailling Adress:</h4>
     <p>186 Spadina Avenue 
     Units 1‑5
     Toronto, ONM5T 3B2</p>
     </div>
    
    
     <div class="col-md-6">
     <h4>Phone:</h4>
     <p class="p-2">(Toronto Area)
     (416) 628-6948 
     (toll-free in North America)
     (877) 755-1595</p>
     </div>
   <div class="col-md-6">
   <h4>Social Media</h4>
  <div class="d-flex  justify-content-center">

  <object data="images/youtube.svg" type="image/svg+xml" class="img-fluid p-2 "></object>
  <object data="images/twitter.svg" type="image/svg+xml" class="img-fluid p-2"></object>
  <object data="images/snapchat.svg" type="image/svg+xml" class="img-fluid p-2"></object>
  <object data="images/instagram.svg" type="image/svg+xml" class="img-fluid p-2"></object>
  <object data="images/facebook.svg" type="image/svg+xml" class="img-fluid p-2 "></object>

</div>

</div>
<h1 class="title text-center mt-5 p-4">Have Any Questions?</h1>
      <h2 class="text-center mb-3">We are guarantee to respond to you
      within 3 business days. </h2>
      <div class="contactForm">
      <form class="d-block d-md-flex flex-wrap row justify-content-center support">
            <div class="formColumn  col-md-6  mt-3">
              <input placeholder="First Name" />
              <input placeholder="Last Name" />
              <input placeholder="Phone" />
              <input placeholder="Email" />
            </div>
            <textarea name="comments" class="m-3  col-md-6" placeholder="Message"></textarea>
          </form>
          <button>Send</button>

      </div>
   </div>
   </div>
    </div>
    `
}