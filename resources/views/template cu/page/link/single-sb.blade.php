@extends('User.master')
@section('title','Trang single-sb')
@section('content')

        
		        <!-- ============= CONTENT AREA STARTS HERE ============== -->
				<div id="content" class="clearfix">
						<div id="left-area" class="clearfix">
								<h2 class="title">Macadamia maple tart</h2>
								<p>If food is an experience for you, then you will find it at the Food Recipe</p>
								<div class="{{ asset('public/user/single-img-box') }}">
										<div class="single-slider">
												<img src="{{ asset('public/user/images/slider/single-recipe_1.jpg') }}" alt="Image" />
												<img src="{{ asset('public/user/images/slider/single-recipe_2.jpg') }}" alt="Image" />
												<img src="{{ asset('public/user/images/slider/single-recipe_3.jpg') }}" alt="Image" />
										</div>
										<div class="img-nav">
		                                </div>
								</div>
								<h3>Sweet maple and a layer of nuts in this buttery dessert makes Christmas oh so special!</h3>
								<span class="w-pet-border"></span>
						
								<div class="info-left">
										<h3 class="blue">Ingredients (serves 10)</h3>
										<ul>
												<li>1 1/2 cups plain flour</li>
												<li>1/4 cup caster sugar</li>
												<li>125g butter, chilled, chopped</li>
												<li>1 egg, lightly beaten</li>
												<li>200g unsalted macadamia nuts</li>
										</ul>
										
										<h3 class="blue">Macadamia maple filling</h3>
										<ul>
												<li>1 1/2 cups firmly-packed brown sugar</li>
												<li>1/4 cup queens maple syrup</li>
												<li>50g butter, melted</li>
												<li>1/4 cup pure cream</li>
												<li>3 eggs, lightly beaten</li>
												<li>1 1/2 tablespoons cornflour</li>
												<li>1 teaspoon finely-grated orange rind</li>
										</ul>
										
		                                <h3 class="blue">Method</h3>
										
		                                <h4 class="red">Step 01</h4>
										<p>Place flour, sugar and butter in a food processor. Process until mixture resembles fine breadcrumbs. Add egg. Process until dough just comes together. Turn pastry onto a lightly-floured surface. Knead until just smooth. Shape into a disc. Cover with plastic wrap. Refrigerate for 30 minutes.</p>
										
		                                <h4 class="red">Step 02</h4>
										<p>Place flour, sugar and butter in a food processor. Process until mixture resembles fine breadcrumbs. Add egg. Process until dough just comes together. Turn pastry onto a lightly-floured surface.</p>
										
		                                <h4 class="red">Step 03</h4>
										<p>Place flour, sugar and butter in a food processor. Process until mixture resembles fine breadcrumbs. Add egg. Process until dough just comes together. Turn pastry onto a lightly-floured surface.</p>                    
                                        
								</div><!-- end of info-left div -->
								
								<div class="info-right">
										<div class="cookname">
												<div class="img-box">
														<a href="#"><img src="{{ asset('public/user/images/chef.jpg') }}" alt="Cook" /></a>
												</div>
												<div class="cook-info">
														<h5><a href="#">Chef Lion</a></h5>
														<p>Click here to see more recipes of <a href="#">Cook Name</a></p>
														<a href="#">More..</a>
												</div>
										</div><!-- end of cookname div -->
										<div class="rate-box">
												
                                                <p class="share">
														<a href="#" class="print"></a>
														<a href="#" class="email"></a>
														<a href="#" class="note"></a>
														<a href="#" class="save"></a>
												</p>
												
                                                <h6>Average Member Rating</h6>
												<p class="rates">
														<span></span>
														<span></span>
														<span></span>
														<span></span>
														<span class="off"></span>
														(4.0 / 5)
												</p>
												<a href="#" class="readmore">Rate It Now</a>
												<p class="status"><span>1 member</span> has rated this recipe</p>
                                                
										</div><!-- end of rate-box div -->
										
										<div class="more-recipe">
												<h5>More recipes like this one</h5>
												<div class="recipe-imgs">
														<div class="more-recipes">
																<ul>
																		<li>
																				<a href="#"><img src="{{ asset('public/user/images/slider/small_1.jpg') }}" alt="Image 1" /></a>
																				<p class="info-box">Christmas desserts recipes</p>
																		</li>
																		<li>
																				<a href="#"><img src="{{ asset('public/user/images/slider/small_2.jpg') }}" alt="Image 2" /></a>
																				<p class="info-box">Dessert recipes</p>
																		</li>
																</ul>
														</div>
														<span class="prev prev-recipie"></span>
														<span class="next next-recipie"></span>
												</div><!-- end of recipe-imgs div -->
										</div><!-- end of more-recipe div -->
								
										<div class="nutritional">
												<h3>Nutritional information</h3>
												<p>This information is per serve.</p>
												<ul>
														<li>
																<p>Protein</p>
																<span>6.60g</span>
														</li>
														<li>
																<p>Dietary Fibre</p>
																<span>2.00g</span>
														</li>
														<li>
																<p>Fat Total</p>
																<span>34.60g</span>
														</li>
														<li>
																<p>Energy</p>
																<span>2050kj</span>
														</li>
														<li>
																<p>Fat Saturated</p>
																<span>14.00g</span>
														</li>
														<li>
																<p>Sodium</p>
																<span>157g</span>
														</li>
														<li>
																<p>Carbohydrate</p>
																<span>39.10g</span>
														</li>
														<li>
																<p>Cholesterol</p>
																<span>128.00mg</span>
														</li>
												</ul>
												<a href="#">More recipes with nutritional info</a>
										</div>
								
								</div><!-- end of info-right div -->
								
								<span class="w-pet-border"></span>
								
								<h3 class="blue">Recipe Comments and Reviews
										<span class="note">Please feel free to rate this recipe</span>
								</h3>
								<span class="w-pet-border"></span>
								
								<div class="comments">
										<h2>Comments <span>(3)</span></h2>
										<span class="w-pet-border"></span>
										<ol class="comment-list">
												<li>
														<div class="img-box">
                                                        		<a href="#"><img src="{{ asset('public/user/images/author1.jpg') }}" alt="Comment Author" class="author-img" /></a>
                                                        </div>
														<div class="comment-body">
																<p class="meta">posted by <a href="#">john doe</a> on <span>23rd June 2011</span></p>
																<p class="comment">Cras id nibh neque, eu dignissim orci. Aenean at adipiscing urna. Suspendisse potenti. Suspendisse vitae tellus a neque commodo rutrum.</p>
														</div>
														<ul>
																<li>
		                                                                <div class="img-box">
		                                                                		<a href="#"><img src="{{ asset('public/user/images/author3.jpg') }}" alt="Comment Author" class="author-img" /></a>
		                                                                </div>
		                                                                <div class="comment-body">
				                                                                <p class="meta">posted by <a href="#">john doe</a> on <span>23rd June 2011</span></p>
				                                                                <p class="comment">Cras id nibh neque, eu dignissim orci. Aenean at adipiscing urna. Suspendisse potenti. Suspendisse vitae tellus a neque commodo rutrum.</p>
																		</div>
																</li>
														</ul>
												</li>
												<li>
														<div class="img-box">
                                                        		<a href="#"><img src="{{ asset('public/user/images/author2.jpg') }}" alt="Comment Author" class="author-img" /></a>
                                                        </div>
														<div class="comment-body">
																<p class="meta">posted by <a href="#">john doe</a> on <span>23rd June 2011</span></p>
																<p class="comment">Cras id nibh neque, eu dignissim orci. Aenean at adipiscing urna. Suspendisse potenti. Suspendisse vitae tellus a neque commodo rutrum.</p>
														</div>
												</li>
										</ol>
								</div><!-- end of comments div -->
						
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