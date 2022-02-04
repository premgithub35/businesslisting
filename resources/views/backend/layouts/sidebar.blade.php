<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="/backend/img/logo.png" alt="Laravel Starter" class="brand-image img-circle elevation-3"
   style="opacity: .8">
<span class="brand-text font-weight-light">Business Listing</span>
</a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/backend/img/profile.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{auth()->user()->username}}</a>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             {{-- dashboard section --}}   
              <li class="nav-item has-treeview ">
                <a href="{{route('dashboard')}}" class="nav-link">
                  <i class="nav-icon fa fa-tachometer"></i>
                  <p>
                  Dashboard
                  <i class="right fa fa-angle-left"></i>
                </p>
                </a>
              </li>

                {{-- message section --}}   
                <li class="nav-item has-treeview ">
                  <a href="{{route('message')}}" class="nav-link">
                    <i class="nav-icon fa fa-tachometer"></i>
                    <p>
                    Message List
                    <i class="right fa fa-angle-left"></i>
                  </p>
                  </a>
                </li>

{{-- portfolio section --}}
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fa fa-newspaper-o"></i>
<p>
Sub Categories Item
<i class="right fa fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{route('add-listing')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Add Listing</p>
</a>
</li>
  <li class="nav-item">
      <a href="{{route('listing')}}" class="nav-link">
        <i class="fa fa-circle-o nav-icon"></i>
          <p>View/Edit Listing</p>
      </a>
  </li>
</ul>
</li>

{{-- portfolio section --}}
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fa fa-newspaper-o"></i>
<p>
Categories
<i class="right fa fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{route('add-categories')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Add Categories</p>
</a>
</li>
  <li class="nav-item">
      <a href="{{route('categories')}}" class="nav-link">
        <i class="fa fa-circle-o nav-icon"></i>
          <p>View/Edit Categories</p>
      </a>
  </li>
</ul>
</li>


          {{-- Reviews section --}}
               <li class="nav-item has-treeview ">
                  <a href="{{('reviews')}}" class="nav-link">
                  <i class="nav-icon fa fa-star"></i>
                  <p>
                   Reviews
                  <i class="right fa fa-angle-left"></i>
                 </p>
               </a>
              </li>

          {{-- portfolio section --}}

          <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-file-text-o"></i>
                    <p>
                     Pages
                  <i class="right fa fa-angle-left"></i>
                  </p>
                 </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('pages')}}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                          <p>View/Edit Page</p>
                      </a>
                  </li>
                      <li class="nav-item">
                        <a href="{{route('add-page')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Add Page</p>
                   </a>
                  </li>                   
                  </ul>
                </li>

          {{-- careers section --}}

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-graduation-cap"></i>
            <p>
              Careers
              <i class="fa fa-angle-left right"></i>
             </p>
            </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('careers')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Career List</p>
              </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('add-career')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Career</p>
              </a>
                    </li>               
                </ul>
            </li>

{{-- faqs section --}}

  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-question-circle"></i>
                    <p>
                      Faqs
                    <i class="fa fa-angle-left right"></i>
                   </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('faq')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>FAQS List</p>
                   </a>
                  </li>
                  <li class="nav-item">
                  <a href="{{route('add-faq')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Add FAQs</p>
                  </a>
                </li>
                </ul>
                </li> 

 {{-- Users section --}}
 <li class="nav-item has-treeview">
  <a href="#" class="nav-link">
   <i class="nav-icon fa fa-user"></i>
   <p>
    User
   <i class="right fa fa-angle-left"></i>
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="{{route('users')}}" class="nav-link">
      <i class="fa fa-circle-o nav-icon"></i>
        <p>View/Edit User</p>
    </a>
  </li>
    <li class="nav-item">
      <a href="{{route('add-user')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Add User</p>
  </a>
  </li>            
  </ul>
</li>
            
    </ul> 
  </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
