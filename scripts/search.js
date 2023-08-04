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

function filter(filterName) {
    //Retirement
    //Tax Planning
    //Money and Kids
    //Philosophy of Money
    //Investing
    //Current Events
    //Insights
    let tags = document.getElementsByClassName('tag');
    let filterDiv = document.getElementsByClassName('filter');
    let filter = filterName.toUpperCase();

    for (i=0; i<tags.length; i++) {
        tags[i].classList.remove('selected');
        tags[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.classList.remove('safe');
    }

    //clear selected for all and set selected for clicked filter
    for (i=0; i<filterDiv.length; i++) {
        filterDiv[i].classList.remove('selected');
        if (filterDiv[i].innerText.toUpperCase() == filter) {
            filterDiv[i].classList.add('selected');
        }
    }

    for (i=0; i<tags.length; i++) {
        let tag = tags[i].innerText.toUpperCase();
        console.log(tag + ' ' + filter);
        if (!(tag == filter)) {
            if(!tags[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains('safe')) {
                tags[i].classList.remove('selected');
                tags[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.classList.add('hidden');
            }
        }
        else {
            tags[i].classList.add('selected');
            tags[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.classList.remove('hidden');
            tags[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.classList.add('safe');
        }
    }
    
}

