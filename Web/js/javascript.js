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
	let newCategory = document.createElement("p");
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
	console.log(currentArticles);
}
