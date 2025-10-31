<?php include 'header.php'; ?>

<section class="banner">
	<div class="bannerSlider owl-carousel owl-theme">
		<div class="bannerImg">
			<img src="images/slider1.jpg">
		</div>
		<div class="bannerImg">
			<img src="images/slider2.jpg">
		</div>
		<div class="bannerImg">
			<img src="images/slider3.jpg">
		</div>
		<div class="bannerImg">
			<img src="images/slider4.jpg">
		</div>			
	</div>	
</section>
	

<section class="whySection whybg">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-md-4">
				<div class="mainTitle">
					<h5>Greetings & Welcome</h5>
					<h2> International Publications (EIP)</span></h2>
					<p style="line-height: 28px;font-size: 14px; text-align: justify; color: #000000;">
						Elsevier is a globally recognized publishing company specializing in academic and professional content. Elsevier's textbook promotion strategy centers on showcasing its commitment to authoritative, globally relevant educational resources. They emphasize the expertise of their authors, highlighting rigorous scholarship and cutting-edge content across diverse disciplines like Medicine, Engineering, Scientific, Technical, Management, Agriculture, Arts and Science, Biotechnology, Photography, Religion, Reference Encyclopedias, and Law Books. Partnerships with educational institutions and targeted online marketing campaigns reach students and educators worldwide. Online catalogs provide detailed information, while review copies and sales representatives facilitate adoption. International editions cater to diverse regional needs, and participation in academic conferences ensures visibility. Supplemental learning materials and integration with online platforms further enhance the learning experience, while bestseller status within subject areas bolsters credibility. Ultimately, Elsevier aims to empower students and educators with high-quality, accessible textbooks that drive academic success.
          </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mb-md-4">
				<div class="mainTitle">					
					<h2>Why Authors choose us?</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
        <ul class="whyList">
          <li><i class="fa fa-check"></i> &nbsp;&nbsp;Book will be published with ISBN.</li> 
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Lowest Publication Fee</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;A Govt registered Company and Registered under MSME.</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Complementary Books to each Authors.</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;100% royalty is paid on each book sold.</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Publishing book with DoI Number. </li>
					<li><i class="fa fa-check"></i>	 &nbsp;&nbsp;Partnership with global distributors like Amazon, Flipkart etc.,</li>
					<li><i class="fa fa-check"></i>	 &nbsp;&nbsp;Bestselling titles in Research and Engineering in Colleges.</li>
					<li><i class="fa fa-check"></i>	 &nbsp;&nbsp;As per UGC and other accreditation bodies, it adds points to API and self-appraisal.</li>
				</ul>
			</div>
      <div class="col-md-2"> &nbsp;</div>
			<div class="col-md-5">
        <ul class="whyList">
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Publication certificate softcopy will be provided to each author.</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Free Online Promotion and Distributions like Flipkart, amazon, Publisher website etc.,</li> 
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Publishing book in all regional Languages. </li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Free shipping within India.</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;High-quality 80gsm paper (Royal executive bond sheet)- black and white/ color Print with Glossy laminations.</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Personalized approach and exceptional 24/7 customer service.</li>
					<li><i class="fa fa-check"></i>  &nbsp;&nbsp;Best seller in the market.</li>
        </ul>
      </div>
    </div>
	</div>
</section>

<!--
<section class="products" style="background-image: none; padding-bottom: 0px;">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-md-4">
					<div class="mainTitle">
						<h2>NEW  <span>RELEASES</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="productSlider owl-carousel owl-theme">

						<?php 

							error_reporting(E_ALL);
    					ini_set('display_errors', 1);

							include_once 'eip-admin/class/product_class.php';

                $result = new Product();
                $datas = $result->fetch_product_home();
                $i = 1;
                foreach ($datas as $data) { 
                	
               ?>

				    <div class="card product-card">
				    	<div class="productImg">
			        	<img class="card-img-top card-img-back" src="/eip-admin/uploads/product_images/<?php echo $data['imagelist']; ?>">
			        </div>
			        <div class="card-info">
		            <div class="card-footer bg-transparent border-0">
	                <div class="product-link d-flex align-items-center justify-content-center">
	                	<a class="customBtn" href="products.php">Buy Now</a>
	                </div>
		            </div>
			        </div>
				    </div>
				    <?php
				     } 
                   
            ?>
                      
					</div>
				</div>
			</div>
		</div>
	</section>
-->
<!--
	<section class="products" style="background-image: none; padding-bottom: 0px;">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-md-4">
					<div class="mainTitle">
						<h2>NEW  <span>RELEASES</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="productSlider owl-carousel owl-theme">
					    <div class="card product-card">
					    	<div class="productImg">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-1.jpg">
				        </div>
				        <div class="card-info">
			            <div class="card-footer bg-transparent border-0">
		                <div class="product-link d-flex align-items-center justify-content-center">
		                	<a class="customBtn" href="products.php">Buy Now</a>
		                </div>
			            </div>
				        </div>
					    </div>
					    <div class="card product-card">
				        <img class="card-img-top card-img-back" src="images/newbook/New-Release-2.jpg">
				        <div class="card-info">
			            <div class="card-footer bg-transparent border-0">
		                <div class="product-link d-flex align-items-center justify-content-center">
		                	<a class="customBtn" href="products.php">Buy Now</a>
		                </div>
			            </div>
				        </div>
					    </div>
					    <div class="card product-card">
				        <img class="card-img-top card-img-back" src="images/newbook/New-Release-3.jpg">
					        <div class="card-info">
				            <div class="card-footer bg-transparent border-0">
			                <div class="product-link d-flex align-items-center justify-content-center">
			                	<a class="customBtn" href="products.php">Buy Now</a>
			                </div>
				            </div>
					        </div>
					    </div>
					    <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-4.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
					    <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-6.jpg">
					        <div class="card-info">
					           
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
					    <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-8.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-9.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-10.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-11.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-12.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-13.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-14.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-15.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
              <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-16.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                      
					</div>
				</div>
			</div>
		</div>
	</section>
	
	-->
<!--
	<section class="products"  style="background-image: none;">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-md-4">
					<div class="mainTitle">
						<h2>Trending <span>Products</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="productSlider owl-carousel owl-theme">
					    
                        <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-4.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
                        <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-8.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
                        <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-12.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
                        
                        <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-16.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
                        
                        <div class="card product-card">
				        	<img class="card-img-top card-img-back" src="images/newbook/New-Release-2.jpg">
					        <div class="card-info">
					            
					            <div class="card-footer bg-transparent border-0">
					                <div class="product-link d-flex align-items-center justify-content-center">
					                	<a class="customBtn" href="products.php">Buy Now</a>
					                </div>
					            </div>
					        </div>
					    </div>
                        
                      
					</div>
				</div>
			</div>
		</div>
	</section>
-->

<section class="products" style="background-image: none; padding-bottom: 0px;">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-md-4">
				<div class="mainTitle">
					<h2>Trending <span>Products</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="productSlider owl-carousel owl-theme">

					<?php 

						error_reporting(E_ALL);
  					ini_set('display_errors', 1);

						include_once 'eip-admin/class/product_class.php';

              $result = new Product();
              $datas = $result->fetch_product_home();
              $i = 1;
              foreach ($datas as $data) { 
              	
             ?>

			    <div class="card product-card">
			    	<div class="productImg">
		        	<img class="card-img-top card-img-back" src="/eip-admin/uploads/product_images/<?php echo $data['imagelist']; ?>">
		        </div>
		        <div class="card-info">
	            <div class="card-footer bg-transparent border-0">
                <div class="product-link d-flex align-items-center justify-content-center">
                	<a class="customBtn" href="products.php">Buy Now</a>
                </div>
	            </div>
		        </div>
			    </div>
			    <?php
			     } 
                 
          ?>
                    
				</div>
			</div>
		</div>
	</div>
</section>

<section class="whySection">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-md-4">
				<div class="mainTitle">
					<h2>TECHNICAL BENEFITS</h2>
					<p style="line-height: 25px;font-size: 14px; text-align: justify; color: #000000;">1. Writing a textbook is one of the standard approaches of helping Students and Academic Community.</p>
					<p style="line-height: 25px;font-size: 14px; text-align: justify; color: #000000;">2. Increases leverage in the direction of increments based on publication.</p>
					<p style="line-height: 25px;font-size: 14px; text-align: justify; color: #000000;">3. Author(s) can use the details for NAAC, UGC, NIRF, NBA, etc.,</p>
					<p style="line-height: 25px;font-size: 14px; text-align: justify; color: #000000;">4. It adds weightage to your profile </p>
					<p style="line-height: 25px;font-size: 14px; text-align: justify; color: #000000;">5. ISBN gives unique recognition.</p>
				</div>
			</div>
		</div>			
	</div>
</section>


	
<?php include 'footer.php'; ?>