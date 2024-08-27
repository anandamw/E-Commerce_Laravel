   <!-- Modal -->
   <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="sign_in_up_bg">
                       <div class="container">
                           <div class="row justify-content-lg-center justify-content-md-center">
                               <div class="col-lg-12 col-md-8 mt-3 mb-3">
                                   <div class="sign_form">
                                       <h2>Selamat Datang di Berung Madure</h2>
                                       <p>Masuk Ke Akun Anda!</p>
                                       <form action="/login" method="POST">
                                           @csrf
                                           <div class="ui search focus mt-15">
                                               <div class="ui left icon input swdh95">
                                                   <input class="prompt srch_explore" type="email" name="email"
                                                       id="email" placeholder="Email" />
                                                   <i class="uil uil-envelope icon icon2"></i>
                                               </div>
                                           </div>
                                           <div class="ui search focus mt-15">
                                               <div class="ui left icon input swdh95">
                                                   <input class="prompt srch_explore" type="password" name="password"
                                                       id="password" placeholder="Password" />
                                                   <i class="uil uil-key-skeleton-alt icon icon2"></i>
                                               </div>
                                           </div>

                                           <button type="submit" class="login-btn">Masuk</button>
                                       </form>
                                       <p class="sgntrm145">
                                           Klik untuk <a href="#">Lupa Password</a>.
                                       </p>
                                       <p class="mb-0 mt-30 hvsng145">
                                           Belum punya akun? <a href="register">Daftar</a>
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
