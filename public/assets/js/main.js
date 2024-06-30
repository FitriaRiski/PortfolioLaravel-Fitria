/**
* Template Name: MyResume
* Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
* Updated: Mar 17 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos,
      behavior: 'smooth'
    })
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function (e) {
    select('body').classList.toggle('mobile-nav-active')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function (e) {
    if (select(this.hash)) {
      e.preventDefault()

      let body = select('body')
      if (body.classList.contains('mobile-nav-active')) {
        body.classList.remove('mobile-nav-active')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Hero type effect
   */
  const typed = select('.typed')
  if (typed) {
    let typed_strings = typed.getAttribute('data-typed-items')
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function (direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function (e) {
        e.preventDefault();
        portfolioFilters.forEach(function (el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function () {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Initiate portfolio details lightbox 
   */
  const portfolioDetailsLightbox = GLightbox({
    selector: '.portfolio-details-lightbox',
    width: '90%',
    height: '90vh'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });







  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();
  /**
     * blog try
     */
  

    // Helper functions...
    // (Tidak perlu diubah)

    /**
     * Function to save and retrieve blog posts from local storage
     */

    // const getBlogPosts = () => {
    //   return JSON.parse(localStorage.getItem('blogPosts')) || [];
    // }

    // const saveBlogPosts = (posts) => {
    //   localStorage.setItem('blogPosts', JSON.stringify(posts));
    // }

    // const addBlogPost = (post) => {
    //   const posts = getBlogPosts();
    //   posts.push(post);
    //   saveBlogPosts(posts);
    // }

    // const addBlogPost = (post) => {
    //   let posts = getBlogPosts(); // Dapatkan semua posting blog yang sudah ada
    //   posts.push(post); // Tambahkan posting baru
    //   saveBlogPosts(posts); // Simpan kembali semua posting (termasuk yang baru)
    // }

    // const deleteBlogPost = (index) => {
    //   const posts = getBlogPosts();
    //   posts.splice(index, 1);
    //   saveBlogPosts(posts);
    // }

    // const updateBlogPost = (index, updatedPost) => {
    //   const posts = getBlogPosts();
    //   posts[index] = updatedPost;
    //   saveBlogPosts(posts);
    // }

    /**
     * Function to render the list of blog posts
     */
    // const renderBlogPosts = () => {
    //   const posts = getBlogPosts();
    //   const blogList = document.querySelector('.blog-list'); // Menggunakan document.querySelector() untuk memilih elemen
    //   if (blogList) {
    //     blogList.innerHTML = '';
    //     posts.forEach((post, index) => {
    //       const listItem = document.createElement('li');
    //       listItem.innerHTML = `

    //         <h3>${post.title}</h3>
    //         <p>${post.date}</p>
    //         <p>${post.content.substring(0, 50)}...</p>
    //         <button class="edit-post" data-index="${index}">Edit</button>
    //         <button class="delete-post" data-index="${index}">Delete</button>`;
    //       blogList.appendChild(listItem);
    //     });
    //   }
    // }


    // Event listeners...

    /**
     * Event listener for submitting a new blog post
     */
    // document.getElementById('blog-form').addEventListener('submit', function (e) {
    //   e.preventDefault();
    //   const title = document.getElementById('blog-title').value;
    //   const date = document.getElementById('blog-date').value;
    //   const content = document.getElementById('blog-content').value;
    //   const newPost = {
    //     title,
    //     date,
    //     content
    //   };
    //   addBlogPost(newPost);
    //   renderBlogPosts();
    // Additional logic to clear the form if needed
    // });

    /**
     * Event listener for deleting a blog post
     */
    // document.addEventListener('click', function (e) {
    //   if (e.target && e.target.classList.contains('delete-post')) {
    //     const index = parseInt(e.target.getAttribute('data-index'));
    //     deleteBlogPost(index);
    //     renderBlogPosts();
    //   }
    // });


    // Function to handle saving edited blog post
    // const handleSaveEdit = (index, updatedPost) => {
    //   const posts = getBlogPosts();
    //   posts[index] = updatedPost;
    //   saveBlogPosts(posts);
    //   renderBlogPosts();
    // }


    /**
 * Event listener for editing a blog post.................................
 * ..................................................................
 */
// blog mulai sini
document.addEventListener('DOMContentLoaded', function() {
  const postsDiv = document.getElementById('posts');
  const newPostForm = document.getElementById('newPostForm');
  const searchInput = document.getElementById('searchInput');

  // Ambil postingan dari localStorage
  let posts = JSON.parse(localStorage.getItem('posts')) || [];

  // Fungsi untuk menyimpan postingan ke localStorage
  function savePosts() {
      localStorage.setItem('posts', JSON.stringify(posts));
  }

  // Fungsi untuk menampilkan postingan
  function displayPosts(filteredPosts = posts) {
      postsDiv.innerHTML = ''; // Kosongkan konten sebelumnya

      // Loop melalui setiap postingan dan tampilkan di halaman
      filteredPosts.forEach((post, index) => {
          const article = document.createElement('article');

          const titleElement = document.createElement('h3');
          titleElement.textContent = post.title;

          const contentElement = document.createElement('p');
          contentElement.textContent = post.content;

          const dateElement = document.createElement('time');
          dateElement.dateTime = post.date; // Format ISO 8601
          dateElement.textContent = new Date(post.date).toLocaleDateString('id-ID');

          // Tambahkan tombol update dan delete
          const updateButton = document.createElement('button');
          updateButton.textContent = 'Update';
          updateButton.addEventListener('click', () => updatePost(index));

          const deleteButton = document.createElement('button');
          deleteButton.textContent = 'Delete';
          deleteButton.addEventListener('click', () => deletePost(index));

          // Tambahkan elemen ke dalam article
          article.appendChild(titleElement);
          article.appendChild(contentElement);
          article.appendChild(dateElement);
          article.appendChild(updateButton);
          article.appendChild(deleteButton);

          postsDiv.appendChild(article);
      });
  }

  // Fungsi untuk menambah postingan baru
  newPostForm.addEventListener('submit', function(event) {
      event.preventDefault();

      const title = document.getElementById('title').value;
      const content = document.getElementById('content').value;

      // Dapatkan tanggal saat ini
      const date = new Date().toISOString();

      // Tambahkan postingan ke array
      posts.push({ title, content, date });

      // Simpan postingan ke localStorage
      savePosts();

      // Tampilkan postingan baru
      displayPosts();

      // Reset form
      newPostForm.reset();
  });

  // Fungsi untuk memperbarui postingan
  function updatePost(index) {
      const newTitle = prompt('Masukkan judul baru:', posts[index].title);
      const newContent = prompt('Masukkan konten baru:', posts[index].content);

      if (newTitle !== null && newContent !== null) {
          posts[index].title = newTitle;
          posts[index].content = newContent;
          posts[index].date = new Date().toISOString(); // Perbarui tanggal

          // Simpan postingan ke localStorage
          savePosts();

          // Perbarui tampilan
          displayPosts();
      }
  }

  // Fungsi untuk menghapus postingan
  function deletePost(index) {
      posts.splice(index, 1); // Hapus postingan dari array

      // Simpan postingan ke localStorage
      savePosts();

      // Perbarui tampilan
      displayPosts();
  }

  // Fungsi untuk mencari postingan
  searchInput.addEventListener('input', function() {
      const searchTerm = searchInput.value.toLowerCase();

      // Filter postingan berdasarkan judul atau konten
      const filteredPosts = posts.filter(post => {
          return post.title.toLowerCase().includes(searchTerm) ||
                 post.content.toLowerCase().includes(searchTerm);
      });

      // Tampilkan postingan yang sesuai
      displayPosts(filteredPosts);
  });

  // Inisialisasi tampilan
  displayPosts();
});
  
})();