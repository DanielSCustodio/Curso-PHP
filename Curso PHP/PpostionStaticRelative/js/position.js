const $elementFirst = document.querySelector('.elementFirst');
const $elementSecond = document.querySelector('.elementSecond');

$elementFirst.addEventListener('click', function(event){
	this.classList.toggle('elementExample_isActive')
	$elementSecond.classList.add('elementExample_isActive')
})

$elementSecond.addEventListener('click', function(event){
	this.classList.toggle('elementExample_isActive')
	$elementFirst.classList.add('elementExample_isActive')
})