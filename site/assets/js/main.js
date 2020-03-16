// fire event function
// code taken from user Kooilnc on https://stackoverflow.com/questions/2705583/how-to-simulate-a-click-with-javascript
const fireDOMEvent = (el, etype) => {
    if (el.fireEvent) {
        el.fireEvent('on' + etype);
    } else {
        var evObj = document.createEvent('Events');
        evObj.initEvent(etype, true, false);
        el.dispatchEvent(evObj);
    }
};

// add comma separators to numbers function
// code taken from user Elias Zamaria on https://stackoverflow.com/questions/2901102/how-to-print-a-number-with-commas-as-thousands-separators-in-javascript
const numberWithCommas = x => {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
};

// list of parts that are ready and loaded
let partsThatAreLoaded = [];

// if page is loaded, remove loader and go
const checkIfAllPartsAreLoaded = () => {
    const partsThatShouldBeLoaded = ['news', 'window'];

    let isLoaded = true;
    partsThatShouldBeLoaded.forEach(part => {
        if (partsThatAreLoaded.indexOf(part) == -1) {
            isLoaded = false;
        }
    });

    // if is loaded, stop loader
    if (isLoaded) {
        document.querySelector('body > .loader').remove();
        document.querySelector('body > .container').style.opacity = '1';
    }
};

// window is loaded
window.addEventListener('load', () => {
    partsThatAreLoaded.push('window');
    checkIfAllPartsAreLoaded();
});

// mobile nav functionality
(() => {
    const calculatorBtn = document.querySelector('.masthead .mobile-nav button.calculator');
    const newsBtn = document.querySelector('.masthead .mobile-nav button.news');
    const casesAndAboutBtn = document.querySelector('.masthead .mobile-nav button.cases-about');

    const container = document.querySelector('.container');

    const clearCurrentTab = () => {
        container.classList.remove('calculator-active');
        container.classList.remove('cases-about-active');
        container.classList.remove('news-active');
    };

    calculatorBtn.addEventListener('click', () => {
        clearCurrentTab();
        container.classList.add('calculator-active');
    });

    newsBtn.addEventListener('click', () => {
        clearCurrentTab();
        container.classList.add('news-active');
    });

    casesAndAboutBtn.addEventListener('click', () => {
        clearCurrentTab();
        container.classList.add('cases-about-active');
        setTimeout(() => {
            fitty(currentCaseCountElm);
        }, 1000 / 60);
    });
})();
