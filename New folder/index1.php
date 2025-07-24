<?php 
include("Product.php");
$product = new Product();
$categories = $product->getCategories();
$totalRecords = $product->getTotalProducts();
include('inc/header.php');
?>
<title>L.M.E</title>
<link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="css/style.css">       
<div class="container" style="height:1000px;">
<div class="content"> 
	<div class="container-fluid">			
            <form method="post" id="search_form">               
                <div class="row">                    
                   <aside class="col-lg-3 col-md-4">						
						<div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true">Categories</h3></div>
                            <div class="panel-body collapse in" id="panelOne">
                                <ul class="list-group">
                                <?php 
								foreach ($categories as $key => $category) {
                                    if(isset($_POST['category'])) {
                                        if(in_array($product->cleanString($category['category_id']),$_POST['category'])) {
                                            $categoryCheck ='checked="checked"';
                                        } else {
											$categoryCheck="";
                                        }
									}
                                ?>
								<li class="list-group-item">
									<div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($category['category_id']); ?>" <?php echo @$categoryCheck; ?> name="category[]" class="sort_rang category"><?php echo ucfirst($category['category_name']); ?></label></div>
								</li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </aside>

                    <section class="col-md-8">
                        <div class="row">
                            <div id="results"></div>
                        </div>
                    </section>
                </div>
				<input type="hidden" id="totalRecords" value="<?php echo $totalRecords; ?>">
            </form>
        </div>        
    </div>        
<script src="js/script.js"></script>		

