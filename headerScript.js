///////////////
//variables
///////////////

const suggestions = [
  "هاست ویندوز",
  "هاست مک",
  "هاست لینوکس",
  "فروش ویژه",
  "همه هاست ها",
  "پرفروش ترین ها",
];
const searchInput = document.querySelector("#search-input");
const suggestBox = document.querySelector("#suggest-box");
const searchBtn = document.querySelector("#submit-search");

////////////////
//eventlisteners
////////////////

eventListener();
function eventListener() {
  searchInput.addEventListener("keyup", suggest);
  searchInput.addEventListener("blur", hideList);
  searchInput.addEventListener("focus", showList);
  suggestBox.addEventListener("click", fillInput);
}

///////////////
//functions
///////////////

//function for suggest via search input
function suggest(e) {
  //get the search input value
  const searchText = e.target.value;

  //initialize a empty array for suggestion
  let suggestList = [];

  //if the searchText is empty it will treated like false and condition wont be execute,otherwise go in it
  if (searchText) {
    suggestList = suggestions.filter(function (data) {
      return data.toLowerCase().includes(searchText.toLowerCase());
    });
  }

  //convert the the suggest list element to html tag template
  suggestList = suggestList.map(function (data) {
    return (data = `<li class="dropdown-item" style="cursor:pointer">${data}</li>`);
  });

  //show the suggestion using this item
  showSuggestion(suggestList);
}

//function for show the suggestion
function showSuggestion(suggestList) {
  if (suggestList.length == 0) {
    hideList();
  } else {
    suggestBox.innerHTML = suggestList.join("");
    showList();
  }
}

//function for fill the search input with the selected item
function fillInput(e) {
  const target = e.target;
  if (target.classList.contains("dropdown-item")) {
    searchInput.value = target.textContent;
  }
}

//function for hide the suggest list
function hideList() {
  suggestBox.style.display = "none";
}

//function for show the suggest list
function showList() {
  suggestBox.style.display = "block";
}
