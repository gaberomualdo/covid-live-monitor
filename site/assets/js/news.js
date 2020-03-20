// elm vars
const newsCountrySelectBoxElm = document.querySelector('.panel.latest-news .select-country .country-select-box');
const newsListElm = document.querySelector('.panel.latest-news .news-list');

// get ip address to infer location if possible
(() => {
    fetch('https://ip-api.com/json')
        .then(response => {
            response.text().then(text => {
                // infer country code from list of possible country codes
                const responseObj = JSON.parse(text);
                const possibleCountryCodes = 'ae ar at au be bg br ca ch cn co cu cz de eg fr gb gr hk hu id ie il in it jp kr lt lv ma mx my ng nl no nz ph pl pt ro rs ru sa se sg si sk th tr tw ua us ve za'.split(
                    ' '
                );
                const responseCountryCode = responseObj['countryCode'].toLowerCase();
                if (responseObj['status'] == 'success' && possibleCountryCodes.indexOf(responseCountryCode) > -1) {
                    newsCountrySelectBoxElm.value = responseCountryCode;
                } else {
                    // if no match found, use USA as default country
                    newsCountrySelectBoxElm.value = 'us';
                }

                fireDOMEvent(newsCountrySelectBoxElm, 'change');

                // show select box
                newsCountrySelectBoxElm.style.display = 'block';
            });
        })
        .catch(err => {
            console.error(err.message);
        });
})();

// load news articles when country select is updated
newsCountrySelectBoxElm.addEventListener('change', () => {
    const countryCode = newsCountrySelectBoxElm.value;
    fetch(`http://newsapi.org/v2/top-headlines?country=${countryCode}&q=corona%20virus&apiKey=${newsAPIKey}`)
        .then(response => {
            response.text().then(text => {
                const responseObj = JSON.parse(text);

                // remove existing content of news list
                newsListElm.innerHTML = '';

                // loop through articles and add to news list elm
                const articles = responseObj['articles'];
                articles.forEach((article, index) => {
                    if (index <= 10) {
                        let articleTitle = article['title'].split('-');
                        articleTitle.pop();
                        articleTitle = articleTitle.join('-');

                        newsListElm.innerHTML += `
                        <hr>
                        <a href="${article['url']}" class="article" target="_blank">
                            <p class="top">
                                <em>${article['source']['name']}</em>
                                <span>${moment(article['publishedAt']).calendar()}</span>
                            </p>
                            ${article['urlToImage'] ? `<img class="main-picture" src="${article['urlToImage']}">` : ''}
                            <h1 class="title">${articleTitle}</h1>
                        </a>
                        `;
                    }
                });

                // display no articles found if article length is 0
                if (articles.length == 0) {
                    newsListElm.innerHTML = `<em style="display: block;opacity: .7;font-size: .85rem;text-align: center;margin-top: 1rem;">No Articles Found in Selected Country</em>`;
                }

                // news has loaded, update var if needed
                if (partsThatAreLoaded.indexOf('news') == -1) {
                    partsThatAreLoaded.push('news');
                    checkIfAllPartsAreLoaded();
                }
            });
        })
        .catch(err => {
            console.error(err.message);
        });
});
