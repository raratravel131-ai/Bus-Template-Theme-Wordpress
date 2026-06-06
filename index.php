<?php
/**
 * Main theme template.
 */

get_header();
?>

<main>
  <section class="hero">
    <div class="hero-content">
      <p class="eyebrow">Premium bus transportation</p>
      <h1>Safe, comfortable bus trips for every journey.</h1>
      <p class="hero-copy">
        Rara Travel & Tour delivers dependable bus travel for tours, family holidays,
        company outings, school trips, and private charters.
      </p>
      <div class="hero-actions">
        <a href="#contact" class="btn btn-primary">Reserve Your Bus</a>
        <a href="#services" class="btn btn-secondary">Explore Services</a>
      </div>
      <div class="hero-stats" aria-label="Company highlights">
        <div>
          <strong>24/7</strong>
          <span>Booking support</span>
        </div>
        <div>
          <strong>50+</strong>
          <span>Route options</span>
        </div>
        <div>
          <strong>98%</strong>
          <span>Happy passengers</span>
        </div>
      </div>
    </div>

    <div class="hero-card" aria-label="Trip quote card">
      <div class="trip-card">
        <span class="badge">Most requested</span>
        <h2>Jakarta → Bandung</h2>
        <p>Executive bus charter with experienced driver, clean cabin, AC, reclining seats, and flexible departure time.</p>
        <div class="trip-meta">
          <span>Comfort Class</span>
          <span>From Rp 2.500.000</span>
        </div>
      </div>
    </div>
  </section>

  <section class="section partners" aria-label="Trusted by">
    <span>Trusted for</span>
    <strong>Tour Groups</strong>
    <strong>Companies</strong>
    <strong>Schools</strong>
    <strong>Families</strong>
    <strong>Events</strong>
  </section>

  <section class="section" id="services">
    <div class="section-heading">
      <p class="eyebrow">What we offer</p>
      <h2>Transportation services built around your schedule.</h2>
      <p>Choose reliable bus solutions for short transfers, long-distance trips, and fully managed group travel.</p>
    </div>

    <div class="service-grid">
      <article class="service-card">
        <span class="icon">🚌</span>
        <h3>Bus Charter</h3>
        <p>Private bus rental for tours, weddings, meetings, community trips, and multi-city travel.</p>
      </article>
      <article class="service-card">
        <span class="icon">📍</span>
        <h3>City Transfer</h3>
        <p>Point-to-point pickup and drop-off with punctual drivers and clear route planning.</p>
      </article>
      <article class="service-card">
        <span class="icon">🏞️</span>
        <h3>Tour Packages</h3>
        <p>Comfortable group transport for tourism destinations, family holidays, and weekend escapes.</p>
      </article>
      <article class="service-card">
        <span class="icon">💼</span>
        <h3>Corporate Trips</h3>
        <p>Professional transportation for company outings, staff shuttle needs, seminars, and events.</p>
      </article>
    </div>
  </section>

  <section class="section fleet" id="fleet">
    <div class="fleet-copy">
      <p class="eyebrow">Our fleet</p>
      <h2>Clean, modern buses with comfort-first facilities.</h2>
      <p>
        Every trip is supported by routine vehicle checks, polite drivers, and well-maintained passenger facilities.
      </p>
      <ul class="feature-list">
        <li>Air conditioning and spacious legroom</li>
        <li>Reclining seats and entertainment system</li>
        <li>Experienced, licensed, friendly drivers</li>
        <li>Flexible pickup points and trip planning</li>
      </ul>
    </div>

    <div class="fleet-panel">
      <div class="fleet-row">
        <span>Mini Bus</span>
        <strong>15-25 seats</strong>
      </div>
      <div class="fleet-row">
        <span>Medium Bus</span>
        <strong>30-35 seats</strong>
      </div>
      <div class="fleet-row">
        <span>Big Bus</span>
        <strong>45-59 seats</strong>
      </div>
    </div>
  </section>

  <section class="section" id="routes">
    <div class="section-heading">
      <p class="eyebrow">Popular routes</p>
      <h2>Ready for city, intercity, and tourism destinations.</h2>
    </div>

    <div class="route-grid">
      <div class="route-card">
        <span>01</span>
        <h3>Jakarta - Bandung</h3>
        <p>Business trips, family tours, and shopping travel.</p>
      </div>
      <div class="route-card">
        <span>02</span>
        <h3>Jakarta - Yogyakarta</h3>
        <p>Culture tours, school programs, and group holidays.</p>
      </div>
      <div class="route-card">
        <span>03</span>
        <h3>Bandung - Pangandaran</h3>
        <p>Beach tours, company outings, and weekend trips.</p>
      </div>
    </div>
  </section>

  <section class="section testimonials" id="testimonials">
    <div class="section-heading">
      <p class="eyebrow">Passenger reviews</p>
      <h2>Customers travel with confidence.</h2>
    </div>

    <div class="testimonial-carousel" aria-label="Passenger reviews slider">
      <button class="testimonial-nav prev" type="button" aria-label="Previous review">‹</button>

      <div class="testimonial-viewport">
        <div class="testimonial-track">
          <article class="testimonial-card">
            <div class="testimonial-stars" aria-label="5 out of 5 stars">★★★★★</div>
            <p>“The bus was clean, comfortable, and arrived on time. Our company outing went smoothly from start to finish.”</p>
            <strong>Andi Pratama</strong>
            <span>Corporate Client</span>
          </article>
          <article class="testimonial-card">
            <div class="testimonial-stars" aria-label="5 out of 5 stars">★★★★★</div>
            <p>“Very helpful team. They arranged pickup points, route, and timing perfectly for our family tour.”</p>
            <strong>Siti Rahma</strong>
            <span>Family Trip</span>
          </article>
          <article class="testimonial-card">
            <div class="testimonial-stars" aria-label="5 out of 5 stars">★★★★★</div>
            <p>“Professional driver and great cabin comfort. Recommended for school and group travel.”</p>
            <strong>Dewi Lestari</strong>
            <span>School Coordinator</span>
          </article>
        </div>
      </div>

      <button class="testimonial-nav next" type="button" aria-label="Next review">›</button>
    </div>

    <div class="testimonial-dots" aria-label="Review pagination">
      <button class="dot active" type="button" aria-label="Go to review 1"></button>
      <button class="dot" type="button" aria-label="Go to review 2"></button>
      <button class="dot" type="button" aria-label="Go to review 3"></button>
    </div>
  </section>

  <section class="section payment-section" aria-label="Supported payment and partner brands">
    <div class="section-heading">
      <p class="eyebrow">Payment & partners</p>
      <h2>Supported payment methods.</h2>
    </div>

    <div class="payment-marquee" aria-hidden="true">
      <div class="payment-track">
        <div class="payment-row">
          <div class="payment-card">QRIS</div>
          <div class="payment-card">Mastercard</div>
          <div class="payment-card">VISA</div>
          <div class="payment-card">BCA</div>
          <div class="payment-card">BNI</div>
          <div class="payment-card">BRI</div>
          <div class="payment-card">BSI</div>
          <div class="payment-card">CIMB Niaga</div>
          <div class="payment-card">Danamon</div>
          <div class="payment-card">Mandiri</div>
          <div class="payment-card">PermataBank</div>
          <div class="payment-card">RokU</div>
          <div class="payment-card">OVO</div>
          <div class="payment-card">ShopeePay</div>
          <div class="payment-card">Kredivo</div>
          <div class="payment-card">Akulaku</div>
          <div class="payment-card">Indomaret</div>
          <div class="payment-card">Alfamart</div>
        </div>
        <div class="payment-row" aria-hidden="true">
          <div class="payment-card">QRIS</div>
          <div class="payment-card">Mastercard</div>
          <div class="payment-card">VISA</div>
          <div class="payment-card">BCA</div>
          <div class="payment-card">BNI</div>
          <div class="payment-card">BRI</div>
          <div class="payment-card">BSI</div>
          <div class="payment-card">CIMB Niaga</div>
          <div class="payment-card">Danamon</div>
          <div class="payment-card">Mandiri</div>
          <div class="payment-card">PermataBank</div>
          <div class="payment-card">RokU</div>
          <div class="payment-card">OVO</div>
          <div class="payment-card">ShopeePay</div>
          <div class="payment-card">Kredivo</div>
          <div class="payment-card">Akulaku</div>
          <div class="payment-card">Indomaret</div>
          <div class="payment-card">Alfamart</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact-section" id="contact">
    <div class="contact-copy">
      <p class="eyebrow">Book your journey</p>
      <h2>Request a bus quote today.</h2>
      <p>Tell us your destination, passenger count, and travel date. Our team will prepare the best bus option for you.</p>
      <div class="contact-info">
        <a href="tel:+6281234567890">+62 812-3456-7890</a>
        <a href="mailto:booking@raratravel.com">booking@raratravel.com</a>
        <span>Open daily, 08:00 - 22:00</span>
      </div>
    </div>

    <form class="booking-form" id="bookingForm">
      <label>
        Full Name
        <input type="text" name="name" placeholder="Your name" required />
      </label>
      <label>
        Phone Number
        <input type="tel" name="phone" placeholder="+62..." required />
      </label>
      <label>
        Destination
        <input type="text" name="destination" placeholder="Jakarta to Bandung" required />
      </label>
      <label>
        Travel Date
        <input type="date" name="date" required />
      </label>
      <label>
        Passengers
        <select name="passengers" required>
          <option value="">Select passengers</option>
          <option>1 - 25 passengers</option>
          <option>26 - 35 passengers</option>
          <option>36 - 59 passengers</option>
          <option>60+ passengers</option>
        </select>
      </label>
      <button type="submit" class="btn btn-primary">Send Request</button>
      <p class="form-message" id="formMessage" role="status" aria-live="polite"></p>
    </form>
  </section>
</main>

<?php
get_footer();