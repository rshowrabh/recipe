<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{asset('image/logo.png')}}" alt="logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{env('APP_NAME', 'Recipe App')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


    <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                    <a href="{{url('/')}}"
                       class="nav-link {{ request()->is('/') ? 'active':''  }}">
                        <p>
                            Current Status
                        </p>
                    </a>

                </li>
                
              
            </ul>
          </li>
<!-- Master Meal -->

<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                    <a href="{{url('admin/meal-ingredient-category')}}"
                       class="nav-link {{ (request()->is('admin/meal-ingredient-category/*') || request()->is('admin/meal-ingredient-category')) ? 'active':''  }}">
                        <p>Ingredient Categories</p>
                    </a>
                </li>
              <li class="nav-item">
                    <a href="{{url('admin/meal-recipe-category')}}"
                       class="nav-link {{ (request()->is('admin/meal-recipe-category/*') || request()->is('admin/meal-recipe-category')) ? 'active':''  }}">
                        <p>Recipe Main category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-recipe-sub-category')}}"
                       class="nav-link {{ (request()->is('admin/meal-recipe-sub-category/*') || request()->is('admin/meal-recipe-sub-category')) ? 'active':''  }}">
                        <p>Recipe Sub category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-recipe-sub-sub-category')}}"
                       class="nav-link {{ (request()->is('admin/meal-recipe-sub-sub-category/*') || request()->is('admin/meal-recipe-sub-sub-category')) ? 'active':''  }}">
                        <p>Recipe Sub Sub category</p>
                    </a>
                </li>
              
            </ul>
    </li>



<!-- Master Meal -->


<!-- Masters -->
    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Masters
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                    <a href="{{url('admin/meal-measurement')}}"
                       class="nav-link {{ (request()->is('admin/meal-measurement/*') || request()->is('admin/meal-measurement')) ? 'active':''  }}">
                        <p>Measurement Units</p>
                    </a>
                </li>
              <li class="nav-item">
                    <a href="{{url('admin/meal-cuisine')}}"
                       class="nav-link {{ (request()->is('admin/meal-cuisine/*') || request()->is('admin/meal-cuisine')) ? 'active':''  }}">
                        <p>Cuisine</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-region')}}"
                       class="nav-link {{ (request()->is('admin/meal-region/*') || request()->is('admin/meal-region')) ? 'active':''  }}">
                        <p>Region</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-primary-diet-type')}}"
                       class="nav-link {{ (request()->is('admin/meal-primary-diet-type/*') || request()->is('admin/meal-primary-diet-type')) ? 'active':''  }}">
                        <p>Primary Diet Type</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-dish-type')}}"
                       class="nav-link {{ (request()->is('admin/meal-dish-type/*') || request()->is('admin/meal-dish-type')) ? 'active':''  }}">
                        <p>Dish Type
                        </p>
                    </a>
                </li>
                
            </ul>
    </li>
<!-- Masters -->


<!-- Ingredient Masters -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ingredient
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                    <a href="{{url('admin/meal-ingredient')}}"
                       class="nav-link {{ (request()->is('admin/meal-ingredient/*') || request()->is('admin/meal-ingredient')) ? 'active':''  }}">
                        <p>Ingredient Master</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-vitamin-mineral')}}"
                       class="nav-link {{ (request()->is('admin/meal-vitamin-mineral/*') || request()->is('admin/meal-vitamin-mineral')) ? 'active':''  }}">
                        <p>Vitamin Mineral</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-sugar')}}"
                       class="nav-link {{ (request()->is('admin/meal-sugar/*') || request()->is('admin/meal-sugar')) ? 'active':''  }}">
                        <p>Sugar/ Gulcose</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-fat')}}"
                       class="nav-link {{ (request()->is('admin/meal-fat/*') || request()->is('admin/meal-fat')) ? 'active':''  }}">
                        <p>Fat Details</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-ingredient-measurement')}}"
                       class="nav-link {{ (request()->is('admin/meal-ingredient-measurement/*') || request()->is('admin/meal-ingredient-measurement')) ? 'active':''  }}">
                        <p>Ingredient Weight/ Unit Wise
                        </p>
                    </a>
                </li>
              
            </ul>
    </li>

    <!-- Recipe Masters -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Recipes
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                    <a href="{{url('admin/meal-recipe')}}"
                       class="nav-link {{ (request()->is('admin/meal-recipe/*') || request()->is('admin/meal-recipe')) ? 'active':''  }}">
                        <p>Recipe Masters</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-recipe-ingredient')}}"
                       class="nav-link {{ (request()->is('admin/meal-recipe-ingredient/*') || request()->is('admin/meal-recipe-ingredient')) ? 'active':''  }}">
                        <p>Recipe Ingredient</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-recipe-tag')}}"
                       class="nav-link {{ (request()->is('admin/meal-recipe-tag/*') || request()->is('admin/meal-recipe-tag')) ? 'active':''  }}">
                        <p>Recipe tag</p>
                    </a>
                </li>
            </ul>
    </li>

    <!-- Recipe Masters -->
    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                User  Masters
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              
                <li class="nav-item">
                    <a href="{{url('admin/meal-festival')}}"
                       class="nav-link {{ (request()->is('admin/meal-festival/*') || request()->is('admin/meal-festival')) ? 'active':''  }}">
                        <p>Groups</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-disease')}}"
                       class="nav-link {{ (request()->is('admin/meal-disease/*') || request()->is('admin/meal-disease')) ? 'active':''  }}">
                        <p>User</p>
                    </a>
                </li>
                
            </ul>
    </li>
    <!-- Masters -->
    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Misc Masters
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              
                <li class="nav-item">
                    <a href="{{url('admin/meal-festival')}}"
                       class="nav-link {{ (request()->is('admin/meal-festival/*') || request()->is('admin/meal-festival')) ? 'active':''  }}">
                        <p>Festivals</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-disease')}}"
                       class="nav-link {{ (request()->is('admin/meal-disease/*') || request()->is('admin/meal-disease')) ? 'active':''  }}">
                        <p>Disease</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/meal-tag')}}"
                       class="nav-link {{ (request()->is('admin/meal-tag/*') || request()->is('admin/meal-tag')) ? 'active':''  }}">
                        <p>Tag Master
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{url('admin/meal-dish-type')}}"
                       class="nav-link {{ (request()->is('admin/meal-chef-master/*') || request()->is('admin/meal-chef-master')) ? 'active':''  }}">
                        <p>Chef Masters
                        </p>
                    </a>
                </li>
            </ul>
    </li>
<!-- Masters -->

    
<!-- Masters -->
                
                
                
                
                
                
                
            </ul>

            

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
