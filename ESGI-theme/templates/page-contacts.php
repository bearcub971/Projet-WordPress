<?php
/*
 * Template Name: Contacts
 */
get_header();
?>

<main class="contacts-page">

  <!-- Intro & coordonnées -->
  <section class="contacts-intro container">
    <h1 class="contacts-title">Contacts.</h1>
    <p class="contacts-subtitle">
      A desire for a big big party or a very select congress? Contact us.
    </p>

    <div class="contacts-info">
      <div class="info-block">
        <h4>Location</h4>
        <address>
          242 Rue du Faubourg Saint‑Antoine<br>
          75020 Paris FRANCE
        </address>
      </div>
      <div class="info-block">
        <h4>Manager</h4>
        <p>+33 1 53 31 25 23<br>info@company.com</p>
      </div>
      <div class="info-block">
        <h4>CEO</h4>
        <p>+33 1 53 31 25 25<br>ceo@company.com</p>
      </div>
    </div>
  </section>

  <!-- Grande image -->
  <section class="contacts-image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/10.png" alt="Contacts Hero">
  </section>

  <!-- Formulaire de contact -->
  <section class="contacts-form container">
    <h2>Write us here</h2>
    <p class="form-intro">Go! Don’t be shy.</p>

    <!-- Exemple de formulaire statique -->
    <form action="#" method="post" class="form-grid">
      <div class="form-field">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject">
      </div>
      <div class="form-field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-field">
        <label for="phone">Phone no.</label>
        <input type="tel" id="phone" name="phone">
      </div>
      <div class="form-field form-message">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4"></textarea>
      </div>
      <div class="form-submit-wrapper">
        <button type="submit" class="btn-submit">Submit</button>
      </div>
    </form>
  </section>

</main>

<?php get_footer(); ?>
