<?php 
/* Template Name: Contact */
get_header(); 
?>

<div class="contact-container">

  <h1>Contact Us</h1>

  <div class="hero-banner">
  </div>

  <div class="map container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493278.0396836172!2d31.508136727511648!3d-0.5459382778413472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d79b47ef816c93%3A0x86269b4b97b29096!2sTekera+Resource+Centre+Clinic!5e0!3m2!1sen!2sca!4v1497404593897"
      width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div class="contact-info container">
    <div class="uganda">
      <img src=“<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/Tekera_Icon_Uganda.png”>
      <div class="info-uganda">
        <h2>uganda</h2>
        <div class="address info-div">
          <p>Tekera Resource </p>
          <p>Center P.O. Box 960</p>
          <p>Masaka, Uganda</p>
        </div>
        <div class="email info-div">
          <p>E-mail:</p>
          <p>tekera resource center@gmail.com</p>
        </div>
        <div class="director1 info-div">
          <p>ICEF Country Director</p>
          <p>Maureen Nakalinza</p>
          <p>+256 773 195 441</p>
        </div>
        <div class="director2 info-div">
          <p>TRC Program Coordinator</p>
          <p>Dan Ahimbisibwe</p>
          <p>+256 0701 589 765</p>
        </div>
      </div>
    </div>

    <div class="canada">
      <img src=“<?php echo get_template_directory_uri(); ?>”>
      <div class="info-canada">
        <h2>canada</h2>
        <div class="address info-div">
        </div>
        <p>ICEF</p>
        <p>5730 Sherwood Blvd</p>
        <p>Delta, B.C. V4L 2C6 Canada</p>
        <div class="e-mail info-div">
        <p>E-mail:</p>
        <p>info@icefcanada.org</p>  
        </div>
      </div>
    </div>
  </div>

  <div class="thanks container">
    <div class="arrow-down container">
    </div>
    <div class="thanks-text">
      <h3>Thank you for your visit</h3>
      <p>You can use the form bleow to send us an e-mail.</p>
    </div>
  </div>

  <form class="container">
    <fieldset>
      First name:
      <input type="text"> Last name:
      <input type="text"> E-mail Address:
      <input type="email">
      <textarea rows="10" placeholder="Write your message here..."></textarea>
    </fieldset>
    <button type="button">
      send
    </button>
  </form>


</div>
<?php get_footer(); ?>