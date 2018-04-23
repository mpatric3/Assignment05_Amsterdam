<?php include "inc/html-top.inc";?>
	<body>
		<section class = "banner">
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section> <!--.banner-->

		<div class= "container" style="z-index: 1;">

			<div class = "slider" style="z-index: -1;"> <!--slider of images of place where each person is from-->
	        	<img src="images/fruitpic.jpg" alt="A Nice Fruit Arrangement.">
				<img src="images/morefruit.jpg" alt="Even more fruit.">
				<img src="images/seedlessfruit.jpg" alt="Seedless Fruit">
			</div>

			<div>
				<h2>Fruit: An Overview</h2>

				<h3>Fruits and Berries</h3>
				<p>In botany, a fruit is the seed-bearing structure in flowering plants (also known as angiosperms) formed from the ovary after flowering.
				</p>

				<p>Fruits are the means by which angiosperms disseminate seeds. Edible fruits, in particular, have propagated with the movements of humans and animals in a symbiotic relationship as a means for seed dispersal and nutrition; in fact, humans and many animals have become dependent on fruits as a source of food.[1] Accordingly, fruits account for a substantial fraction of the world's agricultural output, and some (such as the apple and the pomegranate) have acquired extensive cultural and symbolic meanings.
				</p>

				<p>In common language usage, "fruit" normally means the fleshy seed-associated structures of a plant that are sweet or sour, and edible in the raw state, such as apples, bananas, grapes, lemons, oranges, and strawberries. On the other hand, in botanical usage, "fruit" includes many structures that are not commonly called "fruits", such as bean pods, corn kernels, tomatoes, and wheat grains.[2][3] The section of a fungus that produces spores is also called a fruiting body.[4]
				</p>

				<h3>Culinary Fruit and Botanical Fruit</h3>
				<p>
				Many common terms for seeds and fruit do not correspond to the botanical classifications. In culinary terminology, a fruit is usually any sweet-tasting plant part, especially a botanical fruit; a nut is any hard, oily, and shelled plant product; and a vegetable is any savory or less sweet plant product.[5] However, in botany, a fruit is the ripened ovary or carpel that contains seeds, a nut is a type of fruit and not a seed, and a seed is a ripened ovule.[6]
				</p>
				<p>
				Examples of culinary "vegetables" and nuts that are botanically fruit include corn, cucurbits (e.g., cucumber, pumpkin, and squash), eggplant, legumes (beans, peanuts, and peas), sweet pepper, and tomato. In addition, some spices, such as allspice and chili pepper, are fruits, botanically speaking.[6] In contrast, rhubarb is often referred to as a fruit, because it is used to make sweet desserts such as pies, though only the petiole (leaf stalk) of the rhubarb plant is edible,[7] and edible gymnosperm seeds are often given fruit names, e.g., ginkgo nuts and pine nuts.
				</p>
				<p>
				Botanically, a cereal grain, such as corn, rice, or wheat, is also a kind of fruit, termed a caryopsis. However, the fruit wall is very thin and is fused to the seed coat, so almost all of the edible grain is actually a seed.[8]
				</p>



			</div>

 
		        <div class="container">  
					<div class="table-responsive">  
						<span id="result"></span>
						<div id="live_data"></div>                 
					</div>  
				</div> 
		<script>  
		$(document).ready(function(){  
		    function fetch_data()  
		    {  
		        $.ajax({  
		            url:"select.php",  
		            method:"POST",  
		            success:function(data){  
						$('#live_data').html(data);  
		            }  
		        });  
		    }  
		    fetch_data();  
		    $(document).on('click', '#btn_add', function(){  
		        var first_name = $('#first_name').text();  
		        var last_name = $('#last_name').text();  
		        if(first_name == '')  
		        {  
		            alert("Enter First Name");  
		            return false;  
		        }  
		        if(last_name == '')  
		        {  
		            alert("Enter Last Name");  
		            return false;  
		        }  
		        $.ajax({  
		            url:"insert.php",  
		            method:"POST",  
		            data:{first_name:first_name, last_name:last_name},  
		            dataType:"text",  
		            success:function(data)  
		            {  
		                alert(data);  
		                fetch_data();  
		            }  
		        })  
		    });  
		    
			function edit_data(id, text, column_name)  
		    {  
		        $.ajax({  
		            url:"edit.php",  
		            method:"POST",  
		            data:{id:id, text:text, column_name:column_name},  
		            dataType:"text",  
		            success:function(data){  
		                //alert(data);
						$('#result').html("<div class='alert alert-success'>"+data+"</div>");
		            }  
		        });  
		    }  
		    $(document).on('blur', '.first_name', function(){  
		        var id = $(this).data("id1");  
		        var first_name = $(this).text();  
		        edit_data(id, first_name, "first_name");  
		    });  
		    $(document).on('blur', '.last_name', function(){  
		        var id = $(this).data("id2");  
		        var last_name = $(this).text();  
		        edit_data(id,last_name, "last_name");  
		    });  
		    $(document).on('click', '.btn_delete', function(){  
		        var id=$(this).data("id3");  
		        if(confirm("Are you sure you want to delete this?"))  
		        {  
		            $.ajax({  
		                url:"delete.php",  
		                method:"POST",  
		                data:{id:id},  
		                dataType:"text",  
		                success:function(data){  
		                    alert(data);  
		                    fetch_data();  
		                }  
		            });  
		        }  
		    });  
		});  
		</script>


			<?php include "inc/footer.inc"; ?>

		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>