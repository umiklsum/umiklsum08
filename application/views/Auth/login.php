 <div class="container">

     <!-- Outer Row -->
     <div class="row justify-content-center">

         <div class="col-lg-7">

             <div class="card o-hidden border-0 shadow-lg my-5">
                 <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <div class="row">

                         <div class="col-lg">
                             <div class="p-5">
                                 <div class="text-center">
                                     <!-- judul login  -->
                                     <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                                 </div>
                                 <?= $this->session->flashdata('message') ?>
                                 <form class="user" method="POST" action="<?= base_url('auth') ?> ">
                                     <div class="form-group">
                                         <!-- memasukkan email -->
                                         <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                     </div>
                                     <div class="form-group">
                                         <!-- memasukkan password email -->
                                         <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                     </div>
                                     <div class="form-group">
                                         <div class="custom-control custom-checkbox small">
                                             <input type="checkbox" class="custom-control-input" id="customCheck">
                                             <label class="custom-control-label" for="customCheck">Remember
                                                 Me</label>
                                         </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary btn-user btn-block">
                                         Login
                                     </button>
                                 </form>
                                 <hr>
                                 <div class="text-center">
                                     <a class="small" href="<?= base_url('auth/forgotpassword') ?>">Forgot Password?</a>
                                 </div>
                                 <div class="text-center">
                                     <a class="small" href="<?= base_url('auth/registration'); ?>"> Create an Account!
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

     </div>

 </div>