

$(document).mouseup(function (e) {
    var container = $(".menu__box");
    var container2 = $(".menu__btn");
    if (container.has(e.target).length === 0&&container2.has(e.target).length === 0){
        container.hide();
    }
    else
        container.show();

});




fetch('https://testimonialapi.toolcarton.com/api')
	.then(function(resp) { return resp.json() })
	.then(function(data) {
		console.log(data);
		for (let x = 0; x < 10; x++){
/*
			let slider = document.querySelector('.slider');


			let card = document.createElement('div');
		    document.card.className = "slider__item";

		    let top = document.createElement('div');
		    document.top.className = 'rating__top';

		    let bottom = document.createElement('div');
		    document.bottom.className = 'rating__bottom';

		    let pic = document.createElement('div');
		    document.pic.className = 'rating__pic';

		    let img = document.createElement('img');
		    document.img.src = data[x].avatar;

		    let div = document.createElement('div');

		    let name =  document.createElement('div');
		    document.name.className = 'rating__title';
		    document.name.innerText = data[x].name;

		    let location =  document.createElement('div');
		    document.location.className = 'rating__subtitle';
		    document.location.innerText = data[x].location;

		    let rate =  document.createElement('p');
		    document.rate.className = 'rating__value';
		    document.rate.innerText = data[x].rating;

		    let text =  document.createElement('p');
		    document.text.className = 'rating__desc';
		    document.text.innerText = data[x].text;


			alert(data[4].message);

		    document.bottom.append(text);

		    document.div.append(name);

		    document.div.append(location);

		    document.pic.append(img);

		    document.top.append(pic);

		    document.top.append(div);

		    document.top.append(rate);

		    document.card.append(top);

		    document.card.append(bottom);




		    document.slider.append(card);*/
		    let card = `<div class="slider__item">
						<div class="rating__top">
							<div class="rating__pic">
								<img src="${data[x].avatar}" alt="user">
							</div>
							<div>
								<div class="rating__title">
									${data[x].name}
								</div>
								<p class="rating__subtitle">
									${data[x].location}
								</p>
							</div>
							<p class="rating__value">
								${data[x].rating}
							</p>
						</div>
						<div class="rating__bottom">
							<p class="rating__desc">
								"${data[x].message}"
							</p>
						</div>
					</div>`
			$('#js_slider').append(card);
		}

			$(document).ready(function(){
		$('.slider').slick({
		arrows:true,
		dots:true,
		infinite: true,
  		variableWidth:true,
  		appendDots:$('.rating__button-left'),
  		appendArrows:$('.rating__button-right'),

	});
});


	})

