let categories = [];
let currentArticles = [];
let dtoProducts = new DTO_Products();

window.onload = () => {
	showCategories();
}

//Va chercher toutes les catégories disponibles et les affiche
function showCategories(){
	categories = dtoProducts.getCategories();

	for(let i = 0; i<categories.length;i++){
		addCategoryToList(categories[i]);
	}
}

//Crée un lien vers la page de categories dans la liste a gauche
function addCategoryToList(category){
	let newCategory = document.createElement("h3");
	newCategory.setAttribute("class", "categoryInList");
	newCategory.innerHTML = category.name;

	newCategory.onclick = function(event){
		showArticles(category.id);
	}

	let container = document.getElementById("index_categories");
	container.appendChild(newCategory);
}

//Va chercher tous les articles en lien avec une catégorie et les affiche
function showArticles(id_category){
	currentArticles = dtoProducts.getArticles(id_category);
	document.getElementById("index_listeArticles").innerHTML = "";

	for(let i = 0; i<currentArticles.length;i++){
		addArticleToList(currentArticles[i]);
	}
}

//ajoute un article dans la liste de droite
function addArticleToList(article){
	let newArticle = document.createElement("div");
	newArticle.setAttribute("class", "articleInList");

	let articleTitle = document.createElement("h3");
	articleTitle.setAttribute("style", "width:80%;margin:auto;text-align:center;")
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