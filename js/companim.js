window.addEventListener('scroll', function(){

	//console.log(window.innerHeight);
	//console.log(window.scrollY);
	//console.log(document.body.offsetHeight);

	scrollValue = (window.innerHeight + window.scrollY) / (document.body.offsetHeight);

	//console.log(scrollValue);

	if(scrollValue > 0.55){

		jQuery(document).ready(function(){
			jQuery('.skillbar').each(function(){
				jQuery(this).find('.skillbar-bar').animate({
					width:jQuery(this).attr('data-percent')
				},6000);
			});
		});
	}
})
