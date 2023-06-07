<?php
/*
Template Name: Contact
*/
?>
<?php require_once('contact_header.php'); ?>

<!-- Contact Details -->
<section class="container-fluid contactsection">
  <div class="container">
    <h2 class="getintouch"><?php the_field('contactsectiontag'); ?></h2>
    <img class="contacticon" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/map.png" alt="map icon"><p class="contactdetails"><?php the_field('address'); ?></p>
    <img class="contacticon2" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/phone.png" alt="phone icon"><p class="contactdetails"><?php the_field('phone'); ?></p>
    <img class="contacticon3" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/mail.png" alt="mail icon"><p class="contactdetails"><?php the_field('email'); ?></p>
  </div> <!-- Container -->
</section> <!-- Fluid Container -->

<!-- Calendar Section -->
<section class="container-fluid calendarsection">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="bookingheading"><?php the_field('calendarsectiontag'); ?></h3>
        <p class="bookingsectionpara"><?php the_field('calendarsectionparagraph'); ?></p>
      </div> <!-- Column -->
      <div class="col-md-6">
        <div class="month">
          <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>June<br><span style="font-size:18px">2023</span></li>
          </ul>
        </div> <!-- Month -->
        <ul class="weekdays">
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>
        <ul class="days">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li>10</li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
        </ul>
      </div> <!-- Column -->
    </div> <!-- Row -->
  </div> <!-- Container -->
</section> <!-- Fluid Container -->

<!-- FAQ SECTION -->
<section class="container-fluid faqsection">
  <div class="container">
    <h4 class="faq"><?php the_field('faqtag'); ?></h4>
    <div id="accordion">
      <!-- FAQ1 -->
      <div class="card">
        <div class="card-header" id="headingOne">
          <button class="btn btn-link collapsed faquestions" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <p><?php the_field('faqq1'); ?></p>
            <img alt="plus" class="plus" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/plus.png">
          </button>
        </div> <!-- Card Header -->
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
          <p><?php the_field('faqa1'); ?></p>
          </div> <!-- Card Body -->
        </div> <!-- Collapse -->
      </div> <!-- Card -->

      <!-- FAQ2 -->
      <div class="card">
        <div class="card-header" id="headingTwo">
          <button class="btn btn-link collapsed faquestions" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <p><?php the_field('faqq2'); ?></p>
            <img alt="plus" class="plus" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/plus.png">
          </button>
        </div> <!-- Card Header -->
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
          <p><?php the_field('faqa2'); ?></p>
          </div> <!-- Card Body -->
        </div> <!-- Collapse -->
      </div> <!-- Card -->

      <!-- FAQ3 -->
      <div class="card">
        <div class="card-header" id="headingThree">
          <button class="btn btn-link collapsed faquestions" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <p><?php the_field('faqq3'); ?></p>
            <img alt="plus" class="plus" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/plus.png">
          </button>
        </div> <!-- Card Header -->
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
          <p><?php the_field('faqa3'); ?></p>
          </div> <!-- Card Body -->
        </div> <!-- Collapse -->
      </div> <!-- Card -->

      <!-- FAQ4 -->
      <div class="card">
        <div class="card-header" id="headingFour">
          <button class="btn btn-link collapsed faquestions" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <p><?php the_field('faqq4'); ?></p>
            <img alt="plus" class="plus" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/plus.png">
          </button>
        </div> <!-- Card Header -->
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
          <p><?php the_field('faqa4'); ?></p>
          </div> <!-- Card Body -->
        </div> <!-- Collapse -->
      </div> <!-- Card -->

      <!-- FAQ5 -->
      <div class="card">
        <div class="card-header" id="headingFive">
          <button class="btn btn-link collapsed faquestions" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <p><?php the_field('faqq5'); ?></p>
            <img alt="plus" class="plus" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/plus.png">
          </button>
        </div> <!-- Card Header -->
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body">
          <p><?php the_field('faqa5'); ?></p>
          </div> <!-- Card Body -->
        </div> <!-- Collapse -->
      </div> <!-- Card -->

      <!-- FAQ6 -->
      <div class="card">
        <div class="card-header" id="headingSix">
          <button class="btn btn-link collapsed faquestions" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <p><?php the_field('faqq6'); ?></p>
            <img alt="plus" class="plus" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/plus.png">
          </button>
        </div> <!-- Card Header -->
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
          <div class="card-body">
            <p><?php the_field('faqa6'); ?></p>
          </div> <!-- Card Body -->
        </div> <!-- Collapse -->
      </div> <!-- Card -->

      <!-- FAQ7 -->
      <div class="card">
        <div class="card-header" id="headingSeven">
          <button class="btn btn-link collapsed faquestions extraborder" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <p><?php the_field('faqq7'); ?></p>
            <img alt="plus" class="plus" src="http://170.187.231.66/~mesh18/wp-content/themes/batavia_shipwreck_museum/images/plus.png">
          </button>
        </div> <!-- Card Header -->
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
          <div class="card-body">
            <p><?php the_field('faqa7'); ?></p>
          </div> <!-- Card Body -->
        </div> <!-- Collapse -->
      </div> <!-- Card -->
    </div> <!-- Accordion -->
  </div> <!-- Container -->
</section> <!-- Fluid Container -->
<?php get_footer(); ?>