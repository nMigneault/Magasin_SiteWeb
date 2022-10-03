function changeTheme()
{
	// V1
	//const bd = document.querySelector('body');
	//bd.classList.toggle('colorChange');
	// V2
	document.querySelector('body').classList.toggle('colorChange');
}

function afficheLargeImage()
{	
	document.getElementById('linkImageDetailProduit').addEventListener('click', function (e)
	{
		e.preventDefault(); 
		displayImg(e.currentTarget);
	});
}

//La fonction charge l'image originale et, lorsqu'elle est chargée, l'affiche dans le link.
function displayImg(link)
{
	var img = new Image();

	img.addEventListener('load', function ()
	{
		overlay.style.display = 'block';
		overlay.innerHTML = '';
		overlay.appendChild(img);
	});

	img.src = link.href;
}

function hideOverlay()
{
	var monOverlay = document.getElementById('overlay');
	if (monOverlay != null)
	{
		monOverlay.style.display = 'none';
	}
}

function faireJoke()
{
	document.getElementById('joke').value = 'Rabais en magasin seulement!!';
}

function afficherBtnOriginal()
{
	document.getElementById('joke').value = 'Obtenir un rabais';
}

function rapelerLivraison()
{
	document.getElementById('livraison').innerHTML += 'Commandez avant 17h pour livraison le lendemain.'; 
}
