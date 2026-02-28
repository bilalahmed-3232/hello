

    <style>
   /* ===== GALLERY FILTER BAR ===== */
.project-filters {
  display: flex;
  gap: 12px;
  margin-top: 30px;
  padding-bottom: 10px;
  overflow-x: auto;
  scrollbar-width: none;
}

.project-filters::-webkit-scrollbar {
  display: none;
}

.filter-btn {
  padding: 10px 18px;
  font-size: 14px;
  font-weight: 600;
  color: var(--secondary-color);
  background: transparent;
  border: 1.5px solid var(--secondary-color);
  border-radius: 4px;
  cursor: pointer;
  white-space: nowrap;
  transition: all 0.25s ease;
}

.filter-btn:hover {
  background: rgba(52, 152, 219, 0.12);
}

.filter-btn.active {
  background: #1f6bff;
  border-color: #1f6bff;
  color: #fff;
}

@media (max-width: 768px) {
  .filter-btn {
    font-size: 13px;
    padding: 8px 14px;
  }
}

.filter-buttons button {
    white-space: nowrap;
}



    </style>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 fw-bold mb-3">Our Gallery</h1>
                    <p class="lead">Showcasing premium printing projects with high-quality materials, precise finishing, and professional results for brands and businesses.<br> <br>
                        A refined showcase of our finest printing projects, where superior materials, meticulous precision, and elegant design come together to create exceptional print experiences for distinguished brands.
                        <br><br>
                    </p>
                </div>
            </div>
        </div>
    </section>

        <!-- Filters -->
<div class="filter-buttons d-flex flex-wrap justify-content-center gap-2"
id="gallery-filters"></div>

<!-- Gallery Grid -->
<div class="row g-4 mt-4" id="galleryGrid"></div>

<!-- No Results -->
<div id="noResults" class="text-center mt-5 d-none">
<h4>No projects found</h4>
</div>


    <!-- Testimonials Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Client Testimonials</h2>
                <p class="section-subtitle">What our clients say about our work</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card-sm">
                        <div class="testimonial-content">
                            <p>"The business cards we ordered were absolutely perfect! Premium quality and fast delivery."</p>
                        </div>
                        <div class="testimonial-author">
                            <h5>Sarah Ahmed</h5>
                            <p class="text-muted">Marketing Manager</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card-sm">
                        <div class="testimonial-content">
                            <p>"Our event banners were a huge success! Vibrant colors and durable material."</p>
                        </div>
                        <div class="testimonial-author">
                            <h5>Ali Raza</h5>
                            <p class="text-muted">Event Organizer</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card-sm">
                        <div class="testimonial-content">
                            <p>"The wedding invitations were exquisite. Attention to detail was remarkable."</p>
                        </div>
                        <div class="testimonial-author">
                            <h5>Zara Khan</h5>
                            <p class="text-muted">Satisfied Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Inspired by Our Work?</h2>
                    <p class="mb-0">Let's create something amazing for your business.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="order.html" class="btn btn-light btn-lg">Start Your Project</a>
                </div>
            </div>
        </div>
    </section>

    
    <script>
      document.addEventListener("DOMContentLoaded", async () => {
  const filtersContainer = document.getElementById("gallery-filters");
  const galleryGrid = document.getElementById("galleryGrid");
  const noResults = document.getElementById("noResults");

  const res = await fetch("services.json");
  const data = await res.json();

  // ---------------- FILTER BUTTONS ----------------
  data.categories.forEach((cat, index) => {
    const btn = document.createElement("button");
    btn.className = `btn btn-outline-primary ${index === 0 ? "active" : ""}`;
    btn.dataset.filter = cat.id;
    btn.textContent = cat.label;
    filtersContainer.appendChild(btn);
  });

  // ---------------- GALLERY CARDS ----------------
  function renderGallery(filter = "all") {
    galleryGrid.innerHTML = "";

    const filtered = filter === "all"
      ? data.projects
      : data.projects.filter(p => p.category === filter);

    if (!filtered.length) {
      noResults.classList.remove("d-none");
      return;
    }

    noResults.classList.add("d-none");

    filtered.forEach(project => {
      galleryGrid.innerHTML += `
        <div class="col-lg-4 col-md-6 gallery-item"
             data-category="${project.category}">
          <div class="gallery-image" data-id="${project.id}">
            <img src="${project.image}" class="img-fluid" alt="${project.title}">
            <div class="gallery-overlay">
              <h5>${project.title}</h5>
              <p>${project.description}</p>
            </div>
          </div>
        </div>`;
    });
  }

  renderGallery();

  // ---------------- FILTER LOGIC ----------------
  filtersContainer.addEventListener("click", e => {
    if (!e.target.dataset.filter) return;

    document.querySelectorAll("[data-filter]").forEach(btn =>
      btn.classList.remove("active")
    );
    e.target.classList.add("active");

    renderGallery(e.target.dataset.filter);
  });

  // ---------------- MODAL ----------------
  const modal = new bootstrap.Modal(document.getElementById("projectModal"));

  document.addEventListener("click", e => {
    const card = e.target.closest(".gallery-image");
    if (!card) return;

    const project = data.projects.find(
      p => p.id === card.dataset.id
    );

    document.getElementById("modalImage").src = project.image;
    document.getElementById("modalTitle").textContent = project.title;
    document.getElementById("modalCategory").textContent = project.category;
    document.getElementById("modalDescription").textContent = project.description;

    const specs = document.getElementById("modalSpecs");
    specs.innerHTML = "";
    project.specs.forEach(s => specs.innerHTML += `<li>${s}</li>`);

    document.getElementById("modalFeedback").textContent = project.feedback;

    modal.show();
  });
});

        
        // Add custom styles for gallery
        document.head.insertAdjacentHTML('beforeend', `
            <style>
                .gallery-image {
                    position: relative;
                    overflow: hidden;
                    border-radius: var(--radius-lg);
                    box-shadow: var(--shadow-md);
                    cursor: pointer;
                    height: 300px;
                }
                
                .gallery-image img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 0.3s ease;
                }
                
                .gallery-image:hover img {
                    transform: scale(1.1);
                }
                
                .gallery-overlay {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
                    color: white;
                    padding: var(--spacing-lg);
                    transform: translateY(100%);
                    transition: transform 0.3s ease;
                }
                
                .gallery-image:hover .gallery-overlay {
                    transform: translateY(0);
                }
                
                .testimonial-card-sm {
                    background: var(--bg-primary);
                    padding: var(--spacing-lg);
                    border-radius: var(--radius-lg);
                    box-shadow: var(--shadow-sm);
                    border: 1px solid var(--border-light);
                    height: 100%;
                }
                
                @media (max-width: 768px) {
                    .gallery-image {
                        height: 250px;
                    }
                    
                    .btn-group {
                        flex-wrap: wrap;
                    }
                    
                    .btn-group .btn {
                        margin-bottom: 5px;
                    }
                }
            </style>
        `);
    </script>
