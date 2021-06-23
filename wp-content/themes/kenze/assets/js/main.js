window.addEventListener("DOMContentLoaded", () => {
  try {
    const IconsItem = document.querySelectorAll(
        ".icons-menu.header .menu-item"
      ),
      menuList = document.querySelector(".main-menu.header"),
      adminPanel = document.querySelector("#wpadminbar"),
      menuBtn = document.querySelector(".menu-btn"),
      header = document.querySelector("header.header_v1 .container"),
      sliderHeadline = document.querySelectorAll(
        ".slider.v1 .container .slider-box .info-box .headline"
      ),
      textSlider = document.querySelectorAll(
        " .slider.v1 .container .slider-box .info-box .text"
      ),
      posts_v1Healines = document.querySelectorAll(
        "section.posts_v1 .container .post_v1 .info-box .headline a h2"
      ),
      posts_v1Text = document.querySelectorAll(
        "section.posts_v1 .container .post_v1 .info-box .text p"
      ),
      formatPosts = document.querySelectorAll(".format-icon"),
      newLetterUrl = document.querySelectorAll(
        ".newsletter-wrapper .container .wrapper .tnp.tnp-subscription form"
      ),
      homePostHeadlines = document.querySelectorAll(
        "section.home_posts .container .posts .post .info-box .headline"
      ),
      archivePostsHealines = document.querySelectorAll(
        ".archive-page .container .posts .info-box .headline"
      ),
      archivePostsText = document.querySelectorAll(
        ".archive-page .container .posts .info-box .content"
      ),
      textPostS = document.querySelectorAll(
        ".posts-s .container .posts .post-s .info-box .content p"
      ),
      postsHeadlines = document.querySelectorAll(
        ".post .info-box .headline a h2"
      ),
      postText = document.querySelectorAll(".post .info-box .text p"),
      homePostText = document.querySelectorAll(
        "section.home_posts .container .posts .post .info-box .content"
      ),
      ntp = document.querySelectorAll(
        "aside .widget.widget_newsletterwidget .tnp.tnp-widget form .tnp-field.tnp-field-email input"
      ),
      recentPostsWidget = document.querySelectorAll(
        ".widget.kenze_blog_widget .kenzetheme-blog-widgets .widget_post .info-box .headline a"
      ),
      latestPosts = document.querySelectorAll(
        ".widget.widget_recent_entries ul li a"
      ),
      menu_wrapper = document.querySelector("header.header_v3 .menu-wrapper"),
      header_3_btn = document.querySelector(
        ".header.header_v3 .container .icons-wrapper span.menu-btn"
      ),
      header_3_menu = document.querySelector(
        ".header.header_v3 .container .main-menu"
      ),
      emptySearchForm = document.querySelector(".search-empty-result"),
      nextPage = document.querySelectorAll(".next.page-numbers"),
      prevPage = document.querySelectorAll(".prev.page-numbers"),
      widgetIconsItems = document.querySelectorAll(
        ".widget.widget_nav_menu div ul li"
      ),
      header_3_icons = document.querySelector(
        ".header.header_v3 .container .icons-wrapper"
      ),
      searchForm = document.querySelector(".search-form"),
      searchBtn = document.querySelectorAll(".search-btn"),
      tpElems = document.querySelectorAll(".typography p"),
      archiveWrapPosts = document.querySelector(".container .posts");

    function linkIcons(select) {
      select.forEach((icon) => {
        let iconClass = icon.textContent.split(" ");
        let wrapper = document.createElement("i");
        iconClass.forEach((item) => {
          wrapper.classList.add(item);
        });
        icon.querySelector("a").textContent = "";
        icon.querySelector("a").appendChild(wrapper);
      });
    }

    function header_3_settings(btn, menu, icons_wrapper, menu_wrapper) {
      if (btn && menu) {
        let headline = document.createElement("h2"),
          arrow_back = document.createElement("span"),
          list_item = menu.querySelectorAll(".menu-item");
        arrow_back.classList.add("arrow-back");
        headline.classList.add("menu-headline");
        arrow_back.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>`;
        headline.textContent = "MENU";
        menu.appendChild(arrow_back);
        menu.appendChild(headline);

        function toggleMenu() {
          menu.classList.toggle("active");
          icons_wrapper.classList.toggle("active");
          menu_wrapper.classList.toggle("active");
        }

        function removeMenu() {
          menu.classList.remove("active");
          icons_wrapper.classList.remove("active");
          menu_wrapper.classList.remove("active");
        }

        btn.addEventListener("click", () => {
          toggleMenu();
        });

        menu_wrapper.addEventListener("click", () => {
          removeMenu();
        });

        arrow_back.addEventListener("click", () => {
          removeMenu();
        });

        window.addEventListener("keydown", (e) => {
          if (e.code === "Escape") {
            removeMenu();
          }
        });
      }
    }

    function searchRes(el) {
      if (
        el &&
        el.classList.contains("search-page") &&
        !el.querySelector("article.post")
      ) {
        emptySearchForm.classList.add("active");
      }
    }

    function emptyTagPlace() {
      document.querySelectorAll(".tags").forEach((item) => {
        if (!item.querySelector("a")) {
          item.classList.add("hide");
        }
      });
    }

    searchRes(archiveWrapPosts);

    function headLineMenu() {
      if (header) {
        let headline = document.createElement("h2");
        let menuWrapper = document.createElement("div");
        headline.classList.add("headline-menu");
        menuWrapper.classList.add("menu-wrapper");
        headline.textContent = "MENU";
        menuList.appendChild(headline);
        header.appendChild(menuWrapper);
      }
    }

    function switchComments() {
      let older = document.querySelectorAll(
        ".navigation.comment-navigation .nav-links .nav-previous"
      );
      if (older) {
        older.forEach((old) => {
          let elem = document.createElement("span");
          elem.classList.add("arrow");
          old.querySelector("a").innerHTML = "";
          elem.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>`;
          old.querySelector("a").appendChild(elem);
        });
      }
    }

    function switchCommentsNext() {
      let newer = document.querySelectorAll(
        ".navigation.comment-navigation .nav-links .nav-next"
      );
      if (newer) {
        newer.forEach((old) => {
          let elem = document.createElement("span");
          elem.classList.add("arrow");
          old.querySelector("a").innerHTML = "";
          elem.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>`;
          old.querySelector("a").appendChild(elem);
        });
      }
    }
    switchCommentsNext();
    switchComments();

    function wpPanel() {
      if (adminPanel) {
        menuList.classList.add("admin-panel");
      } else {
        menuList.classList.remove("admin-panel");
      }
    }

    function toggleMenu(menuBtn, header, menuList) {
      if (menuBtn && header) {
        menuBtn.addEventListener("click", () => {
          menuList.classList.toggle("toggle");
          header.querySelector(".menu-wrapper").classList.toggle("toggle");
          document.querySelector("body").classList.toggle("toggle");
        });
        window.addEventListener("click", (e) => {
          if (header && e.target == header.querySelector(".menu-wrapper")) {
            menuList.classList.remove("toggle");
            header.querySelector(".menu-wrapper").classList.remove("toggle");
            document.querySelector("body").classList.remove("toggle");
          }
        });
        document.addEventListener("keydown", (e) => {
          if (e.code == "Escape") {
            menuList.classList.remove("toggle");
            header.querySelector(".menu-wrapper").classList.remove("toggle");
            document.querySelector("body").classList.remove("toggle");
          }
        });
      }
    }

    function toggleMenuV2(menuBtn, list) {
      if (menuBtn && list) {
        menuBtn.addEventListener("click", () => {
          list.classList.toggle("active");
        });
        document.addEventListener("keydown", (e) => {
          if (e.code == "Escape") {
            list.classList.remove("active");
          }
        });
      }
    }

    toggleMenu(menuBtn, header, menuList);

    toggleMenuV2(
      document.querySelector(
        "header.header_v2 .container .icons-wrapper .menu-btn"
      ),
      document.querySelector("header.header_v2 .container .main-menu")
    );

    function splitWords(elem) {
      let content = elem.textContent;
      let letters = content.split(" ");
      elem.innerHTML = "";

      for (let idx = 0; idx < letters.length; idx++) {
        if (letters[idx].trim() !== "") {
          elem.innerHTML += `<div><span>${letters[idx]}</span></div>`;
        }
      }
    }

    function subMenuArrow() {
      menuList.querySelectorAll(".menu-item").forEach((item) => {
        if (item.querySelector("ul.sub-menu")) {
          let fragment = document.createElement("span");
          fragment.classList.add("arrow-down");
          fragment.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>`;
          item.appendChild(fragment);
        }
      });
    }

    function sliders(slides, prev, next, dir = "") {
      let slideIndex = 1,
        paused = false;
      const items = document.querySelectorAll(slides);

      function showSlides(n) {
        if (n > items.length) {
          slideIndex = 1;
        }

        if (n < 1) {
          slideIndex = items.length;
        }

        items.forEach((item) => {
          item.classList.remove("active");
        });

        items[slideIndex - 1].classList.add("active");
      }

      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      try {
        const prevBtn = document.querySelector(prev),
          nextBtn = document.querySelector(next);

        prevBtn.addEventListener("click", () => {
          plusSlides(-1);
        });

        nextBtn.addEventListener("click", () => {
          plusSlides(1);
        });
      } catch (e) {}

      function activateAnimation() {
        if (dir === "vertical") {
          paused = setInterval(function () {
            plusSlides(1);
            items[slideIndex - 1].classList.add("slideInDown");
          }, 10000);
        } else {
          paused = setInterval(function () {
            plusSlides(1);
          }, 10000);
        }
      }
      activateAnimation();

      items[0].parentNode.addEventListener("mouseenter", () => {
        clearInterval(paused);
      });
      items[0].parentNode.addEventListener("mouseleave", () => {
        activateAnimation();
      });
    }

    function toggleElement(elem, btnSelector, toggleClass = "toggle") {
      btnSelector.forEach((item) => {
        item.addEventListener("click", () => {
          elem.classList.toggle(toggleClass);
          item.classList.toggle(toggleClass);
        });
      });
    }

    function arrowPagination(prev, next) {
      let spanPrevElem = document.createElement("span");
      let spanNextElem = document.createElement("span");
      spanPrevElem.classList.add("prev_page");
      spanNextElem.classList.add("next_page");
      spanPrevElem.innerHTML = `<i class="fas fa-long-arrow-alt-left"></i>`;
      spanNextElem.innerHTML = `<i class="fas fa-long-arrow-alt-right"></i>`;

      prev.forEach((item) => {
        item.textContent = "";
        item.appendChild(spanPrevElem);
      });
      next.forEach((item) => {
        item.textContent = "";
        item.appendChild(spanNextElem);
      });
    }

    function kitkut(text, limit, more = "") {
      text.forEach((item) => {
        item.innerHTML = item.innerHTML.replace(/\s+/g, " ").trim();
        if (item.innerHTML.length > limit) {
          item.innerHTML = item.innerHTML.substring(0, limit - 1) + `${more}`;
        }
        item.innerHTML = item.innerHTML;
      });
    }

    function formatSign() {
      if (formatPosts) {
        formatPosts.forEach((item) => {
          let frmt = item.getAttribute("data-format");
          if (frmt && frmt === "video") {
            let icon = document.createElement("div");
            icon.classList.add("format-icon-post");
            icon.innerHTML =
              '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>';
            item.appendChild(icon);
          } else if (frmt && frmt === "audio") {
            let icon = document.createElement("div");
            icon.classList.add("format-icon-post");
            icon.innerHTML =
              '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>';
            item.appendChild(icon);
          } else if (frmt && frmt === "gallery") {
            let icon = document.createElement("div");
            icon.classList.add("format-icon-post");
            icon.innerHTML =
              '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>';
            item.appendChild(icon);
          }
        });
      }
    }

    function lettersUrl(url) {
      let location = window.location.href;

      if (location.split("").slice(-1)[0] == "/") {
        url.forEach((item) => {
          let href = (item.action = location + "?na=s");
        });
      }
    }

    function embedVideos(elem) {
      elem.forEach((item) => {
        if (item.querySelector("iframe")) {
          const content = item.innerHTML;

          const newHTML = `<div class='video-wrapper'>${content}</div>`;

          item.innerHTML = newHTML;
        }
      });
    }

    sliderHeadline.forEach((item) => {
      splitWords(item);
    });

    textSlider.forEach((item) => {
      splitWords(item);
    });

    if (document.querySelector(".slider.v1")) {
      sliders(
        ".slider.v1 .container .slider-box",
        ".slider.v1 .container .prev-arrow",
        ".slider.v1 .container .next-arrow"
      );
    } else if (document.querySelector(".slider.v2")) {
      sliders(
        ".slider.v2 .container .slider-box",
        ".slider.v2 .container .prev-arrow",
        ".slider.v2 .container .next-arrow"
      );
    } else if (document.querySelector(".slider.v3")) {
      sliders(
        ".slider.v3 .container .slider-box",
        ".slider.v3 .container .prev-arrow",
        ".slider.v3 .container .next-arrow"
      );
    }
    formatSign();
    linkIcons(widgetIconsItems);
    ntp.forEach((item) => {
      item.placeholder = "Type Here..";
    });
    embedVideos(tpElems);
    toggleElement(searchForm, searchBtn);
    arrowPagination(prevPage, nextPage);
    lettersUrl(newLetterUrl);
    kitkut(postsHeadlines, 50, "...");
    kitkut(postText, 105, "...");
    kitkut(posts_v1Healines, 50, "...");
    kitkut(posts_v1Text, 70, "...");
    kitkut(homePostHeadlines, 60, "...");
    kitkut(homePostText, 250, "...");
    kitkut(recentPostsWidget, 36, "...");
    kitkut(latestPosts, 45, "...");
    kitkut(archivePostsHealines, 90, "...");
    kitkut(archivePostsText, 250, "...");
    subMenuArrow();
    toggleMenu();
    wpPanel();
    headLineMenu();
    linkIcons(IconsItem);
    emptyTagPlace();
    header_3_settings(
      header_3_btn,
      header_3_menu,
      header_3_icons,
      menu_wrapper
    );
  } catch (e) {
    console.log(e);
  }
});

const replyCommentEl = document.querySelectorAll(
    ".comments-area ol.comment-list .comment article .reply"
  ),
  commentCancel = document.querySelector(
    ".comments-area .comment-respond .comment-reply-title small a"
  );
function commentSetting(el, reply) {
  if (el && reply) {
    el = el.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    `;
    reply.forEach((item) => {
      const arrow = document.createElement("span");
      arrow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right"><polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path></svg>`;
      item.appendChild(arrow);
    });
  }
}

commentSetting(commentCancel, replyCommentEl);
