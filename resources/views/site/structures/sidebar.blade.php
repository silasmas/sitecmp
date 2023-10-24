
                    <div class="col-md-4 pb--60">
                        <!-- Sidebar Start -->
                        <div class="sidebar">
                            <!-- Widget Start -->
                            <div class="widget">
                                <!-- Search Widget Start -->
                                <div class="search--widget">
                                    <form action="/search" method="POST" data-form="validate">
                                    {{csrf_field()}}
                                        <div class="input-group">
                                            <input type="search" name="keyword" placeholder="Recherche sur..." class="form-control" required>

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default active">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Search Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Recentes Publications</h2>

                                <!-- Recent Posts Widget Start -->
                                <div class="recent-posts--widget">
                                    <ul class="nav">
                                        @foreach($posts as $post)
                                        <li class="clearfix">
                                            <div class="img mr--15 float--left">
                                                <a href="#"><img src="img/widgets-img/recent-post-01.jpg" alt=""></a>
                                            </div>

                                            <div class="info">
                                                <p class="title"><a href="/blog-detail/{{$post->id}}" class="btn-link">
                                                    @if($post->type == "1")[Vidéo] @elseif($post->type == "2")[Audio] @else [Article] @endif
                                                        {{$post->title}}</a></p>

                                                <p class="date"><a href="/blog/{{$post->id}}" class="btn-link">{{ \Carbon\Carbon::parse($post->date_publication)->format('d M Y H:i')}}</a></p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Recent Posts Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <!--div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Bâtisseurs</h2>

                                <div class="nav--widget">
                                    <ul class="nav">
                                        <li>
                                            <a href="/batisseur/presentation">
                                                <span class="text">Présentation</span>
                                                <span class="count">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/batisseur/objectif">
                                                <span class="text">Objectif mensuel</span>
                                                <span class="count">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/batisseur/guide">
                                                <span class="text">Guide</span>
                                                <span class="count">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/batisseur/contribution">
                                                <span class="text">Contribution</span>
                                                <span class="count">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/batisseur/abonnement">
                                                <span class="text">Abonnement</span>
                                                <span class="count">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Partenariat</span>
                                                <span class="count">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div-->
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Tags</h2>

                                <!-- Tagcloud Start -->
                                <div class="tagcloud">
                                    <a href="/unite/3">Extensions</a>
                                    <a href="/programme">Programmes</a>
                                    <a href="/aboutcmp">Mission</a>
                                    <a href="/batisseur/presentation">Batisseur</a>                                    
                                    <a href="/aboutcmp">Vision</a>
                                    <a href="/aboutcmp">Histoire</a>
                                    <a href="/unite/2">Cellules</a>
                                </div>
                                <!-- Tagcloud End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                        <!-- Sidebar End -->
                    </div>