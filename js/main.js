/* BagStyleCraft - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Leather Grain & Carry Volume Explorer
  const grainButtons = document.querySelectorAll('.grain-btn');
  const grainDisplay = document.getElementById('grain-detail');

  if (grainButtons.length > 0 && grainDisplay) {
    grainButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        grainButtons.forEach(b => b.classList.remove('active-grain'));
        this.classList.add('active-grain');
        const grainName = this.getAttribute('data-grain');
        const description = this.getAttribute('data-desc');
        const durability = this.getAttribute('data-durability');

        grainDisplay.innerHTML = `
          <div class="craft-card" style="border-left: 4px solid var(--accent-cognac); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-cognac); font-size: 1.5rem; margin-bottom: 0.5rem;">${grainName} Hide Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-mahogany); font-size: 0.95rem;">Empirical Durability Rating: ${durability}</strong>
          </div>
        `;
      });
    });
  }

  // Bag Style Diagnostic Quiz
  const bagQuizButtons = document.querySelectorAll('.bag-quiz-btn');
  const bagQuizResult = document.getElementById('bag-quiz-result');

  if (bagQuizButtons.length > 0 && bagQuizResult) {
    bagQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        bagQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        bagQuizResult.innerHTML = `
          <div class="craft-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-cognac);">
            <h4 style="color: var(--accent-cognac); margin-bottom: 0.5rem;">Your Curated Leather Carry Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
