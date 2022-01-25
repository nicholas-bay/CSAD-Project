class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <style>
            li {margin-left: 20px; margin-right: 20px; }
        </style>
        <navbar class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu">
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class="collapse navbar-collapse" id='navmenu' style='font-size: 13px'>
                    <ul class="navbar-nav mx-auto my-auto">
                        <li class='nav-item' id='navitem'>
                            <a href="#home" class="nav-link">
                                <i class="bi bi-house"></i> Home
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#download" class="nav-link">
                                <i class="bi bi-download"></i> Download
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#notifications" class="nav-link">
                                <i class="bi bi-bell"></i> Notifications
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#help" class="nav-link">
                                <i class="bi bi-info-circle"></i> Help
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a class="nav-link" href="#search">
                                <i class="bi bi-search"></i> Search
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a class="nav-link" href="#cart">
                                <i class="bi bi-cart"></i> Cart
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#signuplogin" class="nav-link">
                                <i class="bi bi-person"></i> <span id='person'>Sign Up | Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </navbar>
        `
    }
}
customElements.define(`my-header`, MyHeader)

class MyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <footer class='page-footer' style='background-color: #F5F5F7; padding: 17px 0px 0px'>
            <section class='container' id='footer'>
                <ul style='list-style: none; margin: 0dp;'>
                    <li style='padding-bottom: 0px'>
                        <p style='color: #79797E;
                            font-size: 12px;
                            line-height: 1.33337;
                            font-weight: 400;
                            letter-spacing: -.01em;
                            font-family: inherit;'>
                            Developers: Nicholas Bay &middot; Ephraim Yee &middot; Chung Hong Wei &middot; Eugene &emsp;
                        </p>
                    </li>
                    <li style='padding-bottom: 0px'>
                        <p style='color: #79797E;
                            font-size: 12px;
                            line-height: 1.33337;
                            font-weight: 400;
                            letter-spacing: -.01em;
                            font-family: inherit;'>
                            Find Us:
                            <a href="#" style="color: black"><i class="bi bi-facebook"></i></a> &middot;
                            <a href="#" style="color: black"><i class="bi bi-instagram"></i></a> &middot;
                            <a href="#" style="color: black"><i class="bi bi-whatsapp"></i></a> &middot;
                            <a href="#" style="color: black"><i class="bi bi-youtube"></i></a>
                        </p>
                    </li>
                </ul>
                <hr>
            </section>
        </footer>
        `
    }
}
customElements.define(`my-footer`, MyFooter)