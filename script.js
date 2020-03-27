//###########        ROTATE LANGUAGE PFEIL            #########################################
const dropdown = document.querySelector('.dropdown-btn');
dropdown.addEventListener('click', function () {
	pfeil.classList.toggle('close-language');
});

const pfeil = document.querySelector('.open-language');
const language = document.querySelectorAll('.dropdown-item');

function pfeilLanguage() {
	pfeil.classList.toggle('close-language');
}

for (var i = 0; i < language.length; i++) {
	language[i].addEventListener('click', pfeilLanguage, false);
}



// Buisnesskunden Bereiche tab


const link = document.querySelector('.link_grossveranst');
const body = document.querySelector('.body');
const grossveranstTab = document.querySelector('.grossveranst')
const back = document.querySelector('.back');

link.addEventListener('click', function () {
	body.style.display = 'none';
	grossveranstTab.style.display = 'block';
})

back.addEventListener('click', function () {
	body.style.display = 'block';
	grossveranstTab.style.display = 'none';
})