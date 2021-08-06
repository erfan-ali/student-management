        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('public/backend')}}/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container" >
                    
           <?php




$admin=Session::get('name');
if(isset($admin))
{
    echo "Now Login: ".' '. $admin.'<br />';
}
    ?>
    Web:-http://firozlearninghome.com/
                </div>
            </div>
            <!-- #User Info -->


            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">
                   <a href="{{route('dashboard')}}"><strong>Dashboard</strong>             
                    </li>
                    <li class="active">
                        <a href="{{url('/')}}">
                           
                            <span style="color:#000000"><strong>HOME</strong></span>
                        </a>
                    </li>





                    <li>
                        <a href="{{route('admin_login')}}">
                            
                            <span>Admin Login</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{route('index')}}">
                            <span>User Login</span>
                        </a>
                    </li>


                     <li>
                        <a href="{{route('logout')}}">
                            
                            <span>Logout</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{route('student_create')}}">
                            
                            <span>Student Registration</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{route('user_create')}}">
                            
                            <span>User Registration</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('public/backend')}}/pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/ui/waves.html">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{asset('public/backend')}}/javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="{{asset('public/backend')}}/javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('public/backend')}}/javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="{{asset('public/backend')}}/javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('public/backend')}}/javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
      
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="{{asset('public/backend')}}/javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>