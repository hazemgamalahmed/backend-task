<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}"
                 class="nav-link {{Route::currentRouteName() == 'admin.categories.index' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.products.index') }}"
                 class="nav-link {{Route::currentRouteName() == 'admin.products.index' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.dashbord')}}" 
                class="nav-link {{Route::currentRouteName() == 'admin.dashbord' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dash board</p>
                </a>
              </li>
            </ul>
          </li>
         

           