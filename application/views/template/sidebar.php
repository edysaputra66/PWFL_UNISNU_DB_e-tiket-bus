 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light"><b>E-Tiket bus</b> </span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Administrator</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href=" <?= base_url() ?>homepage" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?php echo base_url() ?>backend/order" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>
               List Order
             </p>
           </a>
         </li>

         <li class="nav-item has-treeview">
           <a href="<?php echo base_url() ?>backend/tiket" class="nav-link">
             <i class="nav-icon fas fa-table"></i>
             <p>
               List Tiket
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?php echo base_url() ?>backend/konfirmasi" class="nav-link">
             <i class="nav-icon fas fa-file"></i>
             <p>List Konfirmasi</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?php echo base_url() ?>backend/jadwal" class="nav-link">
             <i class="nav-icon far fa-calendar-alt"></i>
             <p>Jadwal</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?php echo base_url() ?>backend/rute" class="nav-link">
             <i class="nav-icon fa fa-mouse-pointer"></i>
             <p>Tujuan</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?php echo base_url() ?>backend/bus" class="nav-link">
             <i class="nav-icon fa fa-bus"></i>
             <p>BUS</p>
           </a>
         </li>

     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>