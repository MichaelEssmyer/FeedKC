                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <cart inline-template> 
                                    <div>
                                        <a class='nav-link' @click='cart = !cart'>
                                            cart
                                        </a>
                                        <div class='cart' v-if='cart'>
                                            <i class='fa fa-times-circle float-right' @click='cart = !cart'></i>
                                            <div class='food' v-for='(item, index) in items'>
                                                @{{ item.title }}
                                                @{{ item.body }}
                                            </div>
                                        </div>
                                    </div>
                                </cart>
                            </li>
                        @endguest
                    </ul>
