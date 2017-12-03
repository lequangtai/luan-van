@extends('User.master')
@section('title','Trang recipes')
@section('content')

		        <!-- ============= CONTENT AREA STARTS HERE ============== -->
				<div id="content" class="clearfix">
						<div id="left-area" class="clearfix">
								<h1>Recent <span>Recipes</span></h1>
                                <span class="w-pet-border"></span><br />
								
								<div class="post recipe-listing-item">
								
										<div class="post-thumb single-img-box">
												<a href="{{ asset('public/user/images/list-items/recipe-list-item-1-big.jpg') }}" title="Sweet maple and a layer" rel="prettyPhoto"><img src="{{ asset('public/user/images/list-items/recipe-list-item-1.jpg') }}" alt="Image" /></a>
										</div>										
										
										<div class="recipe-info">
												
												<h2><a href="#">Pecan Honey Sticky Buns</a></h2>												
												
												<div class="recipe-tags">
													<span class="type">Recipe Type: <a href="#">Sandwiches</a></span>
													<span class="cuisine">Cuisine: <a href="#">French</a></span>
												</div>
																								
												<div class="rating">
														<span class="on"></span>
														<span class="on"></span>
														<span class="on"></span>
														<span class="off"></span>
														<span class="off"></span>
														<span>Average Rating:<span>(3.9 / 5)</span></span>
												</div>												
												
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>												
												
												<a href="#" class="readmore">Read more</a>
										</div>
										
								</div><!-- end of recipe-listing-item div -->
						
								<div class="post recipe-listing-item">
								
										<div class="post-thumb single-img-box">
												<a href="{{ asset('public/user/images/list-items/recipe-list-item-2-main.jpg') }}" title="Sweet maple and a layer" rel="prettyPhoto"><img src="{{ asset('public/user/images/list-items/recipe-list-item-2.jpg') }}" alt="Image" /></a>
										</div>										
										
										<div class="recipe-info">
												
												<h2><a href="#">Pecan Honey Sticky Buns</a></h2>												
												
												<div class="recipe-tags">
													<span class="type">Recipe Type: <a href="#">Sandwiches</a></span>
													<span class="cuisine">Cuisine: <a href="#">French</a></span>
												</div>
																								
												<div class="rating">
														<span class="on"></span>
														<span class="on"></span>
														<span class="on"></span>
														<span class="off"></span>
														<span class="off"></span>
														<span>Average Rating:<span>(3.9 / 5)</span></span>
												</div>												
												
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>												
												
												<a href="#" class="readmore">Read more</a>
										</div>
										
								</div><!-- end of recipe-listing-item div -->
								
								<div class="post recipe-listing-item">
								
										<div class="post-thumb single-img-box">
												<a href="{{ asset('public/user/images/list-items/recipe-list-item-3-main.jpg') }}" title="Sweet maple and a layer" rel="prettyPhoto"><img src="{{ asset('public/user/images/list-items/recipe-list-item-3.jpg') }}" alt="Image" /></a>
										</div>										
										
										<div class="recipe-info">
												
												<h2><a href="#">Pecan Honey Sticky Buns</a></h2>												
												
												<div class="recipe-tags">
													<span class="type">Recipe Type: <a href="#">Sandwiches</a></span>
													<span class="cuisine">Cuisine: <a href="#">French</a></span>
												</div>
																								
												<div class="rating">
														<span class="on"></span>
														<span class="on"></span>
														<span class="on"></span>
														<span class="off"></span>
														<span class="off"></span>
														<span>Average Rating:<span>(3.9 / 5)</span></span>
												</div>												
												
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>												
												
												<a href="#" class="readmore">Read more</a>
										</div>
										
								</div><!-- end of recipe-listing-item div -->
								
								<div class="post recipe-listing-item">
								
										<div class="post-thumb single-img-box">
												<a href="{{ asset('public/user/images/list-items/recipe-list-item-4-main.jpg') }}" title="Sweet maple and a layer" rel="prettyPhoto"><img src="images/list-items/recipe-list-item-4.jpg') }}" alt="Image" /></a>
										</div>										
										
										<div class="recipe-info">
												
												<h2><a href="#">Pecan Honey Sticky Buns</a></h2>												
												
												<div class="recipe-tags">
													<span class="type">Recipe Type: <a href="#">Sandwiches</a></span>
													<span class="cuisine">Cuisine: <a href="#">French</a></span>
												</div>
																								
												<div class="rating">
														<span class="on"></span>
														<span class="on"></span>
														<span class="on"></span>
														<span class="off"></span>
														<span class="off"></span>
														<span>Average Rating:<span>(3.9 / 5)</span></span>
												</div>												
												
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>												
												
												<a href="#" class="readmore">Read more</a>
										</div>
										
								</div><!-- end of recipe-listing-item div -->
						
								<p id="pagination">
										<a href="#">Next</a>
										<a href="#">1</a>
										<a href="#" class="current">2</a>
										<a href="#">3</a>
										<a href="#">Previous</a>
								</p>                
						</div><!-- end of left-area -->
				        <!-- LEFT AREA ENDS HERE -->
                        
                        
                        <!-- ========== START OF SIDEBAR AREA ========== -->
						<div id="sidebar">
								<h2 class="w-bot-border">Recent <span>Posts</span></h2>
								<div class="widget fav-recipes nostylewt">
								
										<div class="tabed">
												<ul class="tabs clearfix">
														<li class="current">Popular</li>
														<li>Recent</li>
														<li>Random</li>
												</ul>
												<div class="block current">
														<ul class="highest">
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_1.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">Best Indian Green Pepper Recipe</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="off"></span>
																				<span class="off"></span>
																				(4.0 / 5)
																		</p>
																</li>
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_2.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">Contest Winner Chinees Soup</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="off"></span>
																				<span class="off"></span>
																				<span class="off"></span>
																				(4.0 / 5)
																		</p>
																</li>
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_3.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">Best Vegitable Recipe</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="off"></span>
																				<span class="off"></span>
																				<span class="off"></span>
																				<span class="off"></span>
																				(4.0 / 5)
																		</p>
																</li>
														</ul>
												</div><!-- end of block div -->
												
												<div class="block">
														<ul class="recent">
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_4.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">Lorem Ipsum World's Best Recipe</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="off"></span>
																				(4.0 / 5)
																		</p>
																</li>
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_5.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">Dolar It Somit Dolar Li Recipe</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="off"></span>
																				<span class="off"></span>
																				(4.0 / 5)
																		</p>
																</li>
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_6.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">The World's Best Winning Recipe</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				(4.0 / 5)
																		</p>
																</li>
														</ul>
												</div><!-- end of block div -->
												
												<div class="block">
														<ul class="recent">
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_7.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">The World's Best Sndwich Recipes here</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="off"></span>
																				(4.0 / 5)
																		</p>
																</li>
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_8.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">The World's Best Bakery Recipes here</a></h5>
																		<p class="rate">
                                                                                <span class="on"></span>
                                                                                <span class="on"></span>
                                                                                <span class="on"></span>
                                                                                <span class="off"></span>
                                                                                <span class="off"></span>
                                                                                (4.0 / 5)
																		</p>
																</li>
																<li>
																		<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_9.jpg') }}" alt="Hotest" /></a>
																		<h5><a href="#">The World's Best Sandwich</a></h5>
																		<p class="rate">
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				<span class="on"></span>
																				(4.0 / 5)
																		</p>
																</li>
														</ul>
												</div><!-- end of block div -->
                                                <div class="bot-border"></div>
										</div><!-- end of tabed div -->
								</div><!-- end of fav-recipes widget -->
								
								<h2 class="w-bot-border bmarginless">Archives</h2>
								<div class="widget archives clearfix nostylewt">
										<ul>
												<li><a href="#">August 2011 </a>(23)</li>
												<li><a href="#">July 2011 </a>(12)</li>
												<li><a href="#">June 2011 </a>(52)</li>
												<li><a href="#">May 2011 </a>(10)</li>
												<li><a href="#">April 2011 </a>(2)</li>
										</ul>
								</div>
								
								<h2 class="w-bot-border">News <span>&amp; Events</span></h2>
								<div class="widget newsEvent nostylewt">
										<ul class="list">
											<li>
													<h5><a href="#">Heading will be appear here</a></h5>
													<p>For every fine wine, there’s the perfect pairing of oli ves and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
											</li>
											
											<li>
													<h5><a href="#">Heading will be appear here</a></h5>
													<p>For every fine wine, there’s the perfect pairing of oli ves and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
											</li>
										</ul>
								</div><!-- end of news div -->
								
								<h2 class="w-bot-border">Twitter <span>Feeds</span></h2>
								<div class="widget twitter nostylewt">
										<ul>
												<li><a href="#">@theCHERIEmint</a> Sounds interesting. Could you send us your ideas/suggestions via the contact form? 2011/06/22</li>
												<li>Thank you for participating and retweeting the free themes &amp; hosting contest: <a href="#">http://t.co/bM7SjAY</a> 2011/06/22</li>
												<li>Thank you for participating and retweeting the free themes &amp; hosting contest: <a href="#">http://t.co/bM7SjAY</a> 2011/06/22</li>
										</ul>
								</div>
						</div><!-- end of sidebar -->
                        
                        <!-- ========== END OF SIDEBAR AREA ========== -->
                        
				</div><!-- end of content div -->
                <!-- ========== CONTENT AREA ENDS HERE ========== -->
                        
    </div><!-- end of container div -->
    <div class="w-pet-border"></div>
<!-- ============= CONTAINER AREA ENDS HERE ============== -->



<!-- ============= BOTTOM AREA STARTS HERE ============== -->
	    <div id="bottom-wrap">
		    	<ul id="bottom" class="clearfix">
			        	<li>
				            	<div class="about">
					                	<a href="index-2.html"><img src="{{ asset('public/user/images/footer-logo.png') }}" alt="Footer Logo" class="footer-logo" /></a>
					                    <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. For every fine wine, there’s the For every fine wine...</p>
					                    <a href="#" class="readmore">Read more About Us</a>
				                </div>
						</li>
						<li>
								<h2>Recent <span>Recipes</span></h2>
								<ul class="recent-posts">
										<li>
												<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_16.jpg') }}" alt="Image" /></a>
												<h5><a href="#">The World's Best</a></h5>
												<p>Sandwich Recipes here once there will be chnace of going to go</p>
										</li>
										
										<li>
												<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_17.jpg') }}" alt="Image" /></a>
												<h5><a href="#">The World's Best</a></h5>
												<p>Sandwich Recipes here once there will be chnace of going to go</p>
										</li>
								</ul>
						</li>
			            
			            <li>
								<h2>Twitter <span>Updates</span></h2>
                            <div id="twitter_update_list" class="twitter">
                            </div>
						</li>
			            
				</ul><!-- end of bottom div -->
	    </div><!-- end of bottom-wrap div -->
<!-- ============= BOTTOM AREA ENDS HERE ============== -->


@endsection