function search() {
    let searchText = document.getElementById('searchbox').value
    let titles = document.getElementsByTagName('h3')
    //searchText works

    for (i=0; i<titles.length; i++) {
        let title = titles[i].innerText.toUpperCase()
        if (!title.includes(searchText.toUpperCase())) {
            titles[i].parentElement.parentElement.parentElement.parentElement.classList.add('hidden');
        }
        else {
            titles[i].parentElement.parentElement.parentElement.parentElement.classList.remove('hidden');
        }
    }
    
}