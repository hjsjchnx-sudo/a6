<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BagStyleCraft — Artisan Leather Bags, Handcrafted Totes & Carry Gear Journal</title>
  <meta name="description" content="BagStyleCraft explores full-grain leather hides, hand saddle stitching, weekend duffle bags, solid brass hardware, and patina building.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-grain {
      background: var(--accent-cognac) !important;
      color: #fff !important;
      border-color: var(--accent-cognac) !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Bag<span>StyleCraft</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Craft Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Artisan Leathercraft & Carry Architecture</span>
        <h1 class="hero-title">The Art of Handcrafted Leather Bags</h1>
        <p class="hero-desc">Discover the synthesis of full-grain Tuscan hides, traditional hand saddle stitching, solid brass hardware, and rich patina development over decades of carry.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-cognac">Explore Craft Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Atelier Philosophy</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Leathercraft & Bag Architecture Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Craft Standards</span>
        <h2 class="section-title">The Four Pillars of Leather Bag Architecture</h2>
      </div>
      <div class="grid-4">
        <div class="craft-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">👜</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cognac); margin-bottom: 0.75rem;">Full-Grain Tuscan Hide</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Sourcing uncorrected top-layer cowhide that preserves natural grain and develops a rich amber patina.</p>
        </div>
        <div class="craft-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧵</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cognac); margin-bottom: 0.75rem;">Two-Needle Saddle Stitch</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Hand-stitching with waxed linen thread so seams never unravel even if a single stitch is cut.</p>
        </div>
        <div class="craft-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🔗</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cognac); margin-bottom: 0.75rem;">Solid Brass Hardware</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Equipping stress points with sand-cast brass rivets, heavy YKK zippers, and solid D-rings.</p>
        </div>
        <div class="craft-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🌿</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cognac); margin-bottom: 0.75rem;">Vegetable Bark Tanning</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Tanning hides with natural chestnut and mimosa wood extracts for eco-purity and earthy aroma.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Leather Grain & Carry Volume Explorer -->
  <section class="section" id="grain-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Hide Explorer</span>
        <h2 class="section-title">The Leather Grain & Bag Selector</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a leather hide and bag style to inspect its grain characteristics and durability score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark grain-btn active-grain" data-grain="Full-Grain Tuscan Cognac Tote" data-desc="Uncorrected 4oz vegetable-tanned shoulder hide with raw suede interior and solid copper rivets." data-durability="10/10 Lifetime Patina Potential (50+ Year Lifespan)">Full-Grain Cognac Tote</button>
          <button class="btn btn-outline-dark grain-btn" data-grain="Pull-Up Mahogany Travel Duffle" data-desc="Wax-infused oil-tanned 5oz bullhide that lightens in color when flexed, creating rich visual depth." data-durability="9.5/10 Heavy Travel Resilience (Water-Resistant Finish)">Pull-Up Duffle Bag</button>
          <button class="btn btn-outline-dark grain-btn" data-grain="Bridle Leather Executive Briefcase" data-desc="Stiff vegetable-tanned bridle leather dressed with tallow and wax for rigid structural protection." data-durability="10/10 Scratch-Resistant Executive Structure">Bridle Leather Briefcase</button>
          <button class="btn btn-outline-dark grain-btn" data-grain="Soft Pebble-Grain Crossbody" data-desc="Supple tumbled calfskin with natural pebble texture that resists surface scuffs and scratches." data-durability="9/10 Flexible Everyday Comfort & Scuff Masking">Pebble Crossbody Bag</button>
        </div>
        <div id="grain-detail">
          <div class="craft-card" style="border-left: 4px solid var(--accent-cognac);">
            <h3 style="color: var(--accent-cognac); font-size: 1.5rem; margin-bottom: 0.5rem;">Full-Grain Tuscan Cognac Tote Hide Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Uncorrected 4oz vegetable-tanned shoulder hide with raw suede interior and solid copper rivets.</p>
            <strong style="color: var(--accent-mahogany); font-size: 0.95rem;">Empirical Durability Rating: 10/10 Lifetime Patina Potential (50+ Year Lifespan)</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Full-Grain Vegetable Tanning & Hardware Metallurgy Spotlight -->
  <section class="section" id="tanning-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Metallurgy & Tanning</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Vegetable Bark Tannins & Brass Hardware</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The distinction between disposable fashion bags and heirloom leathercraft lies in tanning chemistry and hardware metallurgy. At BagStyleCraft, we evaluate tree bark tannins, brass tensile strength, and edge burnishing wax.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🪵 <strong style="color:var(--text-primary);">Chestnut Bark Extracts:</strong> Natural organic tannins that give leather structural firmness and organic scent.</li>
            <li style="margin-bottom: 0.75rem;">🔨 <strong style="color:var(--text-primary);">Sand-Cast Solid Brass:</strong> Heavy-duty hardware that oxidizes naturally alongside leather patina.</li>
            <li style="margin-bottom: 0.75rem;">🐝 <strong style="color:var(--text-primary);">Beeswax Edge Beveling:</strong> Hand-rubbed wax burnishing that seals raw cut leather edges against moisture.</li>
          </ul>
          <a href="about.html" class="btn btn-cognac">Our Atelier Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=800&q=80" alt="Handcrafted Leather Bag with Brass Hardware" style="border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(28,18,12,0.12);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Bag Style & Carry Diagnostic Quiz -->
  <section class="section" id="bag-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Carry Diagnostic</span>
        <h2 class="section-title">Leather Bag Style Matcher</h2>
      </div>
      <div class="craft-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-cognac); margin-bottom: 1rem;">What Is Your Primary Daily Carry Needs or Travel Style?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="bag-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Executive Laptop Briefcase: Rigid Bridle Leather + Padded 16-Inch Sleeve + Solid Brass Lock Clasp.">
            A. Professional Office & Client Meetings with 15-Inch Laptop & Files
          </button>
          <button class="bag-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Heritage Travel Duffle: 45L Pull-Up Leather Duffle + Reinforced Base + Padded Shoulder Strap.">
            B. Weekend Getaways & Frequent Airline Carry-On Travel
          </button>
          <button class="bag-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Everyday Utility Tote: Unlined Full-Grain Cognac Leather Tote + Key Clip + Internal Drop Pocket.">
            C. Everyday Urban Commuting, Farmers Market Shopping & Casual Carry
          </button>
        </div>
        <div id="bag-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Leather Patina Longevity & Tensile Strength Benchmarks Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Craft Benchmarks</span>
        <h2 class="section-title">Bag Style Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="craft-card" style="text-align: center;">
          <h3 class="metric-number text-cognac" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="craft-card" style="text-align: center;">
          <h3 class="metric-number text-cognac" data-target="50" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Years Hide Longevity</p>
        </div>
        <div class="craft-card" style="text-align: center;">
          <h3 class="metric-number text-cognac" data-target="100" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">% Vegetable Tanned</p>
        </div>
        <div class="craft-card" style="text-align: center;">
          <h3 class="metric-number text-cognac" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Master Leather Artisans & Bag Designer Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Artisan Acclaim</span>
        <h2 class="section-title">Endorsements From Master Leather Artisans</h2>
      </div>
      <div class="grid-3">
        <div class="craft-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "BagStyleCraft provides the definitive technical guide for leather selection, saddle stitching techniques, and hide patina progression."
          </p>
          <strong style="color: var(--accent-cognac); display: block;">— Matteo Bellini</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Master Leather Artisan, Florence</span>
        </div>
        <div class="craft-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their essays on solid brass hardware metallurgy, vegetable tanning chemistry, and conditioning care set a new standard in leather journalism."
          </p>
          <strong style="color: var(--accent-cognac); display: block;">— Harrison Vance</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Bespoke Bag Designer, London</span>
        </div>
        <div class="craft-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding full-grain hide grading, travel duffle ergonomics, and lifetime repairability."
          </p>
          <strong style="color: var(--accent-cognac); display: block;">— Sophia Laurent</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Leather Goods Conservator, Paris</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Leathercraft Dispatches & Article Grid + Newsletter -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Atelier Dispatches</span>
        <h2 class="section-title">Latest Leathercraft Essays</h2>
      </div>
      <div class="grid-3" style="margin-bottom: 4rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=800&q=80" alt="Full Grain Leather Guide">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Hide Grading</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-art-of-full-grain-leather-understanding-hides-and-tanning.html">The Art of Full-Grain Leather</a></h3>
            <p class="blog-excerpt">Evaluating uncorrected top-layer hides, bark tannins, and rich patina evolution.</p>
            <a href="blog/the-art-of-full-grain-leather-understanding-hides-and-tanning.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?auto=format&fit=crop&w=800&q=80" alt="Hand Saddle Stitching">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Hand Stitching</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/hand-saddle-stitching-vs-machine-sewing-in-artisan-leather-bags.html">Hand Saddle Stitching Mastery</a></h3>
            <p class="blog-excerpt">Two-needle waxed linen thread technique vs lockstitch machine sewing durability.</p>
            <a href="blog/hand-saddle-stitching-vs-machine-sewing-in-artisan-leather-bags.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&q=80" alt="Leather Tote Guide">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Tote Architecture</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/choosing-the-perfect-leather-tote-for-work-and-everyday-travel.html">Choosing The Perfect Leather Tote</a></h3>
            <p class="blog-excerpt">Evaluating shoulder strap drop lengths, raw suede linings, and internal organizing pockets.</p>
            <a href="blog/choosing-the-perfect-leather-tote-for-work-and-everyday-travel.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>

      <!-- Newsletter Dispatch Container -->
      <div class="craft-card" style="text-align: center; max-width: 800px; margin: 0 auto; background: var(--bg-secondary); border-color: var(--accent-cognac);">
        <span class="section-subtitle">Atelier Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem;">Subscribe to The Leather Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of leather hide grading, patina care guides, and artisan craft techniques.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to BagStyleCraft Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: #fff; border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
          <button type="submit" class="btn btn-cognac">Subscribe</button>
        </form>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Bag<span>StyleCraft</span></a>
          <p>BagStyleCraft is a premier editorial platform dedicated to artisan leather bags, handcrafted totes, travel carry gear, and leathercraft architecture.</p>
          <p style="margin-top: 1rem; color: var(--accent-cognac);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Craft Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Craft Focus</h4>
          <p>Deconstructing full-grain hides, saddle stitching, travel duffles, solid brass hardware, and patina building globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 BagStyleCraft. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Leathercraft Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>

</body>
</html>
