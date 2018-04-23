let categories = [];
let currentArticles = [];
let dtoProducts = new DTO_Products();



//Va chercher toutes les catégories disponibles et les affiche
function showCategories(){
	$.ajax({
		url : "ajaxCategories.php",
		type : "POST",
		data: {
		}
	}).done(function(msg){
		let response = JSON.parse(msg);

		for(let i = 0; i<response.length;i++){
			categories.push(new Categorie(response[i].ID_CAT, response[i].NOM));
		}

		let title = document.createElement("h2");
		title.setAttribute("style", "margin-bottom:20px;");
		title.innerHTML = "Categories de produits";
		document.getElementById("index_categories").appendChild(title);

		for(let i = 0; i<categories.length;i++){
			addCategoryToList(categories[i]);
		}
	});
}

//Crée un lien vers la page de categories dans la liste a gauche
function addCategoryToList(category){
	let newCategory = document.createElement("h3");
	newCategory.setAttribute("class", "categoryInList");
	newCategory.innerHTML = category.name;

	newCategory.onclick = function(event){
		showArticles(Number(category.id));
	}

	let container = document.getElementById("index_categories");
	container.appendChild(newCategory);
}

//Va chercher tous les articles en lien avec une catégorie et les affiche
function showArticles(id_category){
	console.log(id_category);
	$.ajax({
		url : "ajaxArticles.php",
		type : "POST",
		data: {
			id:id_category
		}
	}).done(function(msg){
		let response = JSON.parse(msg);

		document.getElementById("index_listeArticles").innerHTML = "";
		currentArticles = [];

		for(let i = 0; i<response.length;i++){
			currentArticles.push(new Article(response[i].ID_ARTICLE, response[i].ID_RABAIS, response[i].ID_CAT, response[i].NOM, response[i].ART_DESCRIPTION, response[i].PRIX_BASE, response[i].PRIX_COURANT, response[i].EN_RABAIS));
		}

		for(let i = 0; i<currentArticles.length;i++){
			addArticleToList(currentArticles[i]);
		}
	});

	// currentArticles = dtoProducts.getArticles(id_category);
	// document.getElementById("index_listeArticles").innerHTML = "";

	// for(let i = 0; i<currentArticles.length;i++){
	// 	addArticleToList(currentArticles[i]);
	// }
}

//ajoute un article dans la liste de droite
function addArticleToList(article){
	let newArticle = document.createElement("div");
	newArticle.setAttribute("class", "articleInList");

	let articleTitle = document.createElement("h3");
	articleTitle.setAttribute("style", "width:80%;margin:auto;text-align:center;cursor:pointer;")
	articleTitle.innerHTML = article.name;
	newArticle.appendChild(articleTitle);

	let articleImg = document.createElement("img");
	articleImg.setAttribute("src", "images/arbre.jpg");
	articleImg.setAttribute("style", "width:60%;height:60%;margin:5px 0 5px 20%;text-align:center;")
	articleImg.innerHTML = article.name;
	newArticle.appendChild(articleImg);

	let articlePrice = document.createElement("h3");
	articlePrice.setAttribute("style", "width:50%;text-align:center;float:Left;color:red;")
	articlePrice.innerHTML = article.prixCourant + "$";
	newArticle.appendChild(articlePrice);

	let articleOldPrice = document.createElement("h3");
	articleOldPrice.setAttribute("style", "width:50%;text-align:center;float:Left;text-decoration: line-through;")
	articleOldPrice.innerHTML = article.prixBase + "$";
	newArticle.appendChild(articleOldPrice);
	

	newArticle.onclick = function(event){
		openArticlePage(article);
	}

	let container = document.getElementById("index_listeArticles");
	container.appendChild(newArticle);
}

function openArticlePage(article){
	let container = document.getElementById("index_listeArticles");

	//Vider la liste de gauche
	container.innerHTML = "";
	document.getElementById("index_categories").innerHTML = "";

	//Afficher les infos dans la partie de droite
	let buttonReturn = document.createElement("button");
	buttonReturn.innerHTML = "Retour";
	buttonReturn.setAttribute("id", "buttonReturn");
	buttonReturn.onclick = function(event){
		container.innerHTML = "";
		showCategories();
	}
	container.appendChild(buttonReturn);

	let title = document.createElement("h1");
	title.setAttribute("style", "clear:both;margin:20px 5px; padding-top:20px;width:max-content;");
	title.innerHTML = article.name;
	container.appendChild(title);

	let img = document.createElement("img");
	img.setAttribute("class", "imageArticle");
	img.setAttribute("src", "images/arbre.jpg");
	container.appendChild(img);

	let clearDiv = document.createElement("div");
	clearDiv.setAttribute("style", "clear:both;")
	container.appendChild(clearDiv);

	let currentPrice = document.createElement("h2");
	currentPrice.setAttribute("id", "currentArticlePrice");
	currentPrice.innerHTML = article.prixCourant + "$";
	container.appendChild(currentPrice);

	clearDiv = document.createElement("div");
	clearDiv.setAttribute("style", "clear:both;")
	container.appendChild(clearDiv);

	let buttonBasket = document.createElement("button");
	buttonBasket.innerHTML = "Ajouter au panier";
	buttonBasket.setAttribute("id", "buttonAddBasket");
	buttonBasket.onclick = function(event){
		console.log("ajout");
	}
	container.appendChild(buttonBasket);
}
