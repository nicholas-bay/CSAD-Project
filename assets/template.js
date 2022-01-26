class UserHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <style>
        li {
          margin-left: 20px;
          margin-right: 20px;
        }
        #navmenu {
          font-size: 13px;
        }
      </style>
      <navbar class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
          <!-- toggle navmenu when small screen -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu">
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class="collapse navbar-collapse" id='navmenu'>
            <ul class="navbar-nav mx-auto my-auto">
              <!-- home -->
              <li class='nav-item' id='navitem'>
                <a href="#home" class="nav-link">
                  <i class="bi bi-house"></i> Home
                </a>
              </li>
              <!-- download -->
              <li class='nav-item' id='navitem'>
                <a href="#download" class="nav-link">
                  <i class="bi bi-download"></i> Download
                </a>
              </li>
              <!-- notifications -->
              <li class='nav-item' id='navitem'>
                <a href="#notifications" class="nav-link">
                  <i class="bi bi-bell"></i> Notifications
                </a>
              </li>
              <!-- help -->
              <li class='nav-item' id='navitem'>
                <a href="#help" class="nav-link">
                  <i class="bi bi-info-circle"></i> Help
                </a>
              </li>
              <!-- search -->
              <li class='nav-item' id='navitem'>
                <a class="nav-link" href="#search">
                  <i class="bi bi-search"></i> Search
                </a>
              </li>
              <!-- cart -->
              <li class='nav-item' id='navitem'>
                <a class="nav-link" href="#cart">
                  <i class="bi bi-cart"></i> Cart
                </a>
              </li>
              <!-- person -->
              <li class='nav-item' id='navitem'>
                <a href="#signuplogin" class="nav-link">
                  <i class="bi bi-person"></i> test<?php echo $_SESSION['username']; ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </navbar>
    `
  }
}
customElements.define(`user-header`, UserHeader)
class GuestHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <style>
        li {
          margin-left: 20px;
          margin-right: 20px;
        }
        #navmenu {
          font-size: 13px;
        }
      </style>
      <navbar class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
          <!-- toggle navmenu when small screen -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu">
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class="collapse navbar-collapse" id='navmenu'>
            <ul class="navbar-nav mx-auto my-auto">
              <!-- download -->
              <li class='nav-item' id='navitem'>
                <a href="#download" class="nav-link">
                  <i class="bi bi-download"></i> Download
                </a>
              </li>
              <!-- help -->
              <li class='nav-item' id='navitem'>
                <a href="#help" class="nav-link">
                  <i class="bi bi-info-circle"></i> Help
                </a>
              </li>
            </ul>
          </div>
        </div>
      </navbar>
    `
  }
}
customElements.define(`guest-header`, GuestHeader)
class MainFooter extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <style>
        footer {
          background-color: #F5F5F7;
          padding: 17px 0px 0px;
        }
        ul {
          list-style: none;
          margin: 0px;
        }
        p {
          color: #79797E;
          font-size: 12px;
          line-height: 1.33337;
          font-weight: 400;
          letter-spacing: -.01em;
          font-family: inherit;
        }
      </style>
      <footer class='page-footer fixed-bottom'>
        <section class='container'>
          <ul>
            <li>
              <p>Developers: Nicholas Bay &middot; Ephraim Yee &middot; Chung Hong Wei &middot; Eugene</p>
            </li>
            <li>
              <p>
                Find Us:
                <a href="#" style="color: black"><i class="bi bi-facebook"></i></a> &middot;
                <a href="#" style="color: black"><i class="bi bi-instagram"></i></a> &middot;
                <a href="#" style="color: black"><i class="bi bi-whatsapp"></i></a> &middot;
                <a href="#" style="color: black"><i class="bi bi-youtube"></i></a>
              </p>
            </li>
          </ul>
        </section>
      </footer>
    `
  }
}
customElements.define(`main-footer`, MainFooter)