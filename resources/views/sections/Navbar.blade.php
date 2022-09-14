<!-- NAVBAR START -->
<header>
    <nav class="navbar navbar-inverse navbar-global navbar-fixed-top p-0">
        <div class="container-fluid h-100">
            <div class="logo-section">
                <a href="#" class="btn-expand-collapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
                        <path id="Icon"
                            d="M166-45h24v-2.667H166V-45Zm0-6.667h24v-2.667H166v2.667ZM166-61v2.667h24V-61Z"
                            transform="translate(-166 61)" fill="#d8d8d8" fill-rule="evenodd" />
                    </svg>
                </a>
                <a class="navbar-brand" href="index.html">Akillipanel</a>
            </div>
            <div class="navbar-right d-flex justify-content-end justify-content-lg-between">
                <div class="searchbar d-none d-lg-flex">
                    <img src="{{ asset('assets/images/search.svg') }}" alt="searchbar">
                    <input placeholder="Ne Aramıştınız?" type="text">
                </div>
                <div class="user-section">
                    <ul class="user-links">
                        <li class="user-link dropdown ">
                            <button class="position-relative border-0 bg-transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="21.333" height="26"
                                      viewBox="0 0 21.333 26">
                                      <path id="Icon"
                                          d="M337.667-39a2.336,2.336,0,0,0,.533-.053,2.705,2.705,0,0,0,1.92-1.573,2.676,2.676,0,0,0,.2-1.04h-5.333A2.686,2.686,0,0,0,337.667-39Zm8-14.667c0-4.093-2.187-7.52-6-8.427V-63a2,2,0,0,0-2-2,2,2,0,0,0-2,2v.907c-3.827.907-6,4.32-6,8.427V-47L327-44.333V-43h21.333v-1.333L345.667-47v-6.667Z"
                                          transform="translate(-327 65)" fill="#d8d8d8" fill-rule="evenodd" />
                                  </svg>
                                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">3<span class="visually-hidden">unread messages</span>
                                  </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                        <li class="user-link mobile-user">
                            <a href="#">{{ $userAbb }}</a>
                        </li>
                        <li class="user-link desktop-user">
                            <a href="#">{{ $username }}</a>
                        </li>
                    </ul>
                    <a class="mobile-sidenav">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
                            <path id="Icon"
                                d="M166-45h24v-2.667H166V-45Zm0-6.667h24v-2.667H166v2.667ZM166-61v2.667h24V-61Z"
                                transform="translate(-166 61)" fill="#d8d8d8" fill-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- NAVBAR END -->
