<?php $this->view("Minima_template/header", $data);?>

	<section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Upload image</h4>	
	<form name="contactForm" class="customform" method="post">
	
	<div class="s-12"> 
        <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
		<p class="subject-error form-error">Please enter a title.</p>
	</div>
	<div class="s-12"> 
        <input name="file" class="subject" type="file" required>
		<p class="subject-error form-error">Please select a file.</p>
	</div>

	<div class="s-12">
		<textarea name="description" class="required message" placeholder="Description" rows="3"></textarea>
<<<<<<< HEAD
       <p class="message-error form-error">Image description.</p>
=======
       <p class="message-error form-error">Please enter a description.</p>
>>>>>>> febc85633cb7853ffc62e3683a4001e3fa3b7486
     </div>
	<div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
  </form>
  </div>           
</section>
</div>
<?php $this->view("Minima_template/footer", $data);?>